<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm
     */
    public function index()
    {
        $products = Product::with('categories')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Hiển thị form tạo sản phẩm mới
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Lưu sản phẩm mới vào database
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lt:price',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        // Xử lý slug
        $slug = Str::slug($request->name);
        $count = Product::where('slug', 'LIKE', $slug . '%')->count();
        $uniqueSlug = $count ? "{$slug}-{$count}" : $slug;

        // Xử lý thumbnail
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('products/thumbnails', 'public');
        }

        // Tạo sản phẩm
        $product = Product::create([
            'name' => $request->name,
            'slug' => $uniqueSlug,
            'description' => $request->description,
            'content' => $request->content,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'sku' => strtoupper(Str::random(8)),
            'is_active' => $request->is_active ?? false,
            'is_featured' => $request->is_featured ?? false,
            'thumbnail' => $thumbnailPath,
        ]);

        // Gán danh mục
        $product->categories()->attach($request->categories);

        // Xử lý hình ảnh sản phẩm
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imagePath = $image->store('products/images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imagePath,
                    'order' => $index + 1,
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Sản phẩm đã được tạo thành công.');
    }

    /**
     * Hiển thị thông tin chi tiết sản phẩm
     */
    public function show(Product $product)
    {
        $product->load(['categories', 'images']);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Hiển thị form chỉnh sửa sản phẩm
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $product->load(['categories', 'images']);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Cập nhật thông tin sản phẩm
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lt:price',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        // Xử lý slug nếu tên thay đổi
        if ($product->name != $request->name) {
            $slug = Str::slug($request->name);
            $count = Product::where('slug', 'LIKE', $slug . '%')->where('id', '!=', $product->id)->count();
            $uniqueSlug = $count ? "{$slug}-{$count}" : $slug;
            $product->slug = $uniqueSlug;
        }

        // Xử lý thumbnail
        if ($request->hasFile('thumbnail')) {
            // Xóa thumbnail cũ nếu có
            if ($product->thumbnail) {
                Storage::disk('public')->delete($product->thumbnail);
            }
            $thumbnailPath = $request->file('thumbnail')->store('products/thumbnails', 'public');
            $product->thumbnail = $thumbnailPath;
        }

        // Cập nhật thông tin sản phẩm
        $product->name = $request->name;
        $product->description = $request->description;
        $product->content = $request->content;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
        $product->is_active = $request->is_active ?? false;
        $product->is_featured = $request->is_featured ?? false;
        $product->save();

        // Cập nhật danh mục
        $product->categories()->sync($request->categories);

        // Xử lý hình ảnh sản phẩm
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imagePath = $image->store('products/images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imagePath,
                    'order' => $product->images->count() + $index + 1,
                ]);
            }
        }

        // Xử lý xóa hình ảnh
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image) {
                    Storage::disk('public')->delete($image->image);
                    $image->delete();
                }
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    /**
     * Xóa sản phẩm
     */
    public function destroy(Product $product)
    {
        // Xóa thumbnail
        if ($product->thumbnail) {
            Storage::disk('public')->delete($product->thumbnail);
        }

        // Xóa hình ảnh sản phẩm
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image);
        }

        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}

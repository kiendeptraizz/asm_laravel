<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Lấy danh sách sản phẩm
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::with('categories', 'images')->latest()->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }

    /**
     * Lưu sản phẩm mới
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'thumbnail' => 'nullable|image|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Tạo slug
        $slug = Str::slug($request->name);
        $uniqueSlug = $slug;
        $counter = 1;

        // Đảm bảo slug là duy nhất
        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

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
            'is_active' => $request->has('is_active'),
            'is_featured' => $request->has('is_featured'),
            'thumbnail' => $thumbnailPath,
        ]);

        // Gán danh mục
        $product->categories()->attach($request->categories);

        // Xử lý hình ảnh sản phẩm
        if ($request->hasFile('images')) {
            $order = 1;
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('products/images', 'public');
                $product->images()->create([
                    'image' => $imagePath,
                    'order' => $order++
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Sản phẩm đã được tạo thành công',
            'data' => $product->load('categories', 'images'),
        ], 201);
    }

    /**
     * Hiển thị thông tin chi tiết sản phẩm
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Product $product)
    {
        $product->load('categories', 'images');

        return response()->json([
            'success' => true,
            'data' => $product,
        ]);
    }

    /**
     * Cập nhật thông tin sản phẩm
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'thumbnail' => 'nullable|image|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Cập nhật slug nếu tên thay đổi
        if ($request->name !== $product->name) {
            $slug = Str::slug($request->name);
            $uniqueSlug = $slug;
            $counter = 1;

            while (Product::where('slug', $uniqueSlug)->where('id', '!=', $product->id)->exists()) {
                $uniqueSlug = $slug . '-' . $counter;
                $counter++;
            }

            $product->slug = $uniqueSlug;
        }

        // Xử lý thumbnail
        if ($request->hasFile('thumbnail')) {
            // Xóa thumbnail cũ
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
        $product->is_active = $request->has('is_active');
        $product->is_featured = $request->has('is_featured');
        $product->save();

        // Cập nhật danh mục
        $product->categories()->sync($request->categories);

        // Xử lý hình ảnh sản phẩm
        if ($request->hasFile('images')) {
            // Xóa hình ảnh cũ nếu có yêu cầu
            if ($request->has('delete_all_images') && $request->delete_all_images) {
                foreach ($product->images as $image) {
                    Storage::disk('public')->delete($image->image);
                    $image->delete();
                }
            }

            $order = $product->images()->max('order') + 1;
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('products/images', 'public');
                $product->images()->create([
                    'image' => $imagePath,
                    'order' => $order++
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Sản phẩm đã được cập nhật thành công',
            'data' => $product->fresh()->load('categories', 'images'),
        ]);
    }

    /**
     * Xóa sản phẩm
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Product $product)
    {
        // Xóa hình ảnh
        if ($product->thumbnail) {
            Storage::disk('public')->delete($product->thumbnail);
        }

        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image);
        }

        // Xóa sản phẩm
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Sản phẩm đã được xóa thành công',
        ]);
    }

    /**
     * Tìm kiếm sản phẩm
     *
     * @param  string  $keyword
     * @return \Illuminate\Http\JsonResponse
     */
    public function search($keyword)
    {
        $products = Product::with('categories', 'images')
            ->where('name', 'like', "%{$keyword}%")
            ->orWhere('description', 'like', "%{$keyword}%")
            ->orWhere('content', 'like', "%{$keyword}%")
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }

    /**
     * Lấy sản phẩm theo danh mục
     *
     * @param  int  $categoryId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByCategory($categoryId)
    {
        $products = Product::with('categories', 'images')
            ->whereHas('categories', function ($query) use ($categoryId) {
                $query->where('categories.id', $categoryId);
            })
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }

    /**
     * Lấy sản phẩm nổi bật
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFeatured()
    {
        $products = Product::with('categories', 'images')
            ->where('is_featured', true)
            ->where('is_active', true)
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }
}
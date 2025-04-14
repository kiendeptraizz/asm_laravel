<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm
     */
    public function index(Request $request)
    {
        $query = Product::with('categories', 'images')->where('is_active', true);

        // Sắp xếp
        $sort = $request->input('sort', 'latest');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $products = $query->paginate(12);

        return view('products.index', compact('products', 'sort'));
    }

    /**
     * Hiển thị chi tiết sản phẩm
     */
    public function show($slug)
    {
        $product = Product::with('categories', 'images')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedProducts = Product::with('categories')
            ->where('id', '!=', $product->id)
            ->whereHas('categories', function ($query) use ($product) {
                $query->whereIn('categories.id', $product->categories->pluck('id'));
            })
            ->where('is_active', true)
            ->take(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Hiển thị sản phẩm nổi bật
     */
    public function featured()
    {
        $featuredProducts = Product::with('categories', 'images')
            ->where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->paginate(12);

        return view('products.featured', compact('featuredProducts'));
    }

    /**
     * Hiển thị sản phẩm theo danh mục
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $products = Product::with('categories', 'images')
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('categories.id', $category->id);
            })
            ->where('is_active', true)
            ->latest()
            ->paginate(12);

        return view('products.category', compact('products', 'category'));
    }

    /**
     * Tìm kiếm sản phẩm
     */
    public function search(Request $request)
    {
        $keyword = $request->input('q');

        $products = Product::with('categories', 'images')
            ->where('is_active', true)
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%")
                    ->orWhere('description', 'like', "%{$keyword}%");
            })
            ->latest()
            ->paginate(12);

        return view('products.search', compact('products', 'keyword'));
    }
}
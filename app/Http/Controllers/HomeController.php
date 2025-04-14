<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Hiển thị trang chủ
     */
    public function index()
    {
        // Lấy sản phẩm nổi bật
        $featuredProducts = Product::with('categories', 'images')
            ->where('is_active', true)
            ->where('is_featured', true)
            ->take(8)
            ->latest()
            ->get();

        // Lấy danh mục
        $categories = Category::where('is_active', true)
            ->take(3)
            ->get();

        return view('welcome', compact('featuredProducts', 'categories'));
    }
}
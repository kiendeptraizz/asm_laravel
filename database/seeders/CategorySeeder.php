<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Điện thoại',
            'Laptop',
            'Máy tính bảng',
            'Phụ kiện',
            'Đồng hồ thông minh',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'description' => 'Mô tả cho danh mục ' . $category,
                'is_active' => true,
            ]);
        }
    }
}
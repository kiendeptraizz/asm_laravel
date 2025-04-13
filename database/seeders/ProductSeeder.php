<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ trước khi thêm mới
        ProductImage::query()->delete();
        Product::query()->delete();

        // Đảm bảo thư mục tồn tại
        Storage::disk('public')->makeDirectory('products/thumbnails');
        Storage::disk('public')->makeDirectory('products/images');

        $products = [
            [
                'name' => 'iPhone 14 Pro Max',
                'description' => 'Điện thoại iPhone 14 Pro Max mới nhất',
                'content' => 'Nội dung chi tiết về iPhone 14 Pro Max',
                'price' => 28990000,
                'sale_price' => 27990000,
                'quantity' => 50,
                'is_active' => true,
                'is_featured' => true,
                'categories' => [1], // Điện thoại
                'image' => 'iphone.jpg'
            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'description' => 'Điện thoại Samsung Galaxy S23 Ultra mới nhất',
                'content' => 'Nội dung chi tiết về Samsung Galaxy S23 Ultra',
                'price' => 25990000,
                'sale_price' => 24990000,
                'quantity' => 40,
                'is_active' => true,
                'is_featured' => true,
                'categories' => [1], // Điện thoại
                'image' => 'samsung.jpg'
            ],
            [
                'name' => 'MacBook Pro M2',
                'description' => 'Laptop MacBook Pro với chip M2',
                'content' => 'Nội dung chi tiết về MacBook Pro M2',
                'price' => 35990000,
                'sale_price' => 34990000,
                'quantity' => 30,
                'is_active' => true,
                'is_featured' => true,
                'categories' => [2], // Laptop
                'image' => 'macbook.jpg'
            ],
            [
                'name' => 'iPad Pro 12.9 inch',
                'description' => 'Máy tính bảng iPad Pro 12.9 inch',
                'content' => 'Nội dung chi tiết về iPad Pro 12.9 inch',
                'price' => 22990000,
                'sale_price' => 21990000,
                'quantity' => 25,
                'is_active' => true,
                'is_featured' => false,
                'categories' => [3], // Máy tính bảng
                'image' => 'ipad.jpg'
            ],
            [
                'name' => 'Apple Watch Series 8',
                'description' => 'Đồng hồ thông minh Apple Watch Series 8',
                'content' => 'Nội dung chi tiết về Apple Watch Series 8',
                'price' => 10990000,
                'sale_price' => 9990000,
                'quantity' => 60,
                'is_active' => true,
                'is_featured' => false,
                'categories' => [5], // Đồng hồ thông minh
                'image' => 'apple-watch.jpg'
            ],
        ];

        // Tạo thư mục placeholder images
        $placeholderDir = storage_path('app/public/products/thumbnails');
        if (!File::exists($placeholderDir)) {
            File::makeDirectory($placeholderDir, 0755, true);
        }

        foreach ($products as $productData) {
            $categories = $productData['categories'];
            $image = $productData['image'];

            unset($productData['categories']);
            unset($productData['image']);

            $productData['slug'] = Str::slug($productData['name']);
            $productData['sku'] = strtoupper(Str::random(8));

            // Tạo placeholder image
            $thumbnailPath = 'products/thumbnails/placeholder-' . Str::slug($productData['name']) . '.png';
            $this->createPlaceholderImage($thumbnailPath, $productData['name']);
            $productData['thumbnail'] = $thumbnailPath;

            $product = Product::create($productData);
            $product->categories()->attach($categories);

            // Tạo một vài hình ảnh sản phẩm
            for ($i = 1; $i <= 3; $i++) {
                $imagePath = 'products/images/placeholder-' . Str::slug($productData['name']) . '-' . $i . '.png';
                $this->createPlaceholderImage($imagePath, $productData['name'] . ' ' . $i);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imagePath,
                    'order' => $i
                ]);
            }
        }
    }

    /**
     * Tạo placeholder image với text
     */
    private function createPlaceholderImage($path, $text)
    {
        $width = 300;
        $height = 300;

        // Tạo hình ảnh
        $image = imagecreatetruecolor($width, $height);

        // Màu nền và text
        $bgColor = imagecolorallocate($image, 240, 240, 240);
        $textColor = imagecolorallocate($image, 50, 50, 50);

        // Đổ màu nền
        imagefill($image, 0, 0, $bgColor);

        // Thêm text
        $fontSize = 5;
        $text = wordwrap($text, 15, "\n", true);

        // Vẽ text (sử dụng imagestring thay vì imagettftext)
        $lines = explode("\n", $text);
        $lineHeight = 20;
        $totalHeight = count($lines) * $lineHeight;
        $startY = ($height - $totalHeight) / 2;

        foreach ($lines as $i => $line) {
            $lineWidth = strlen($line) * 8; // Ước tính độ rộng của text
            $x = ($width - $lineWidth) / 2;
            $y = $startY + ($i * $lineHeight);
            imagestring($image, $fontSize, $x, $y, $line, $textColor);
        }

        // Lưu hình ảnh
        $fullPath = storage_path('app/public/' . $path);
        $dir = dirname($fullPath);

        if (!File::exists($dir)) {
            File::makeDirectory($dir, 0755, true);
        }

        imagepng($image, $fullPath);
        imagedestroy($image);
    }
}
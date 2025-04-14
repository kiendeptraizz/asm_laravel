@extends('layouts.app')

@section('title', 'Shop Điện Tử - Cửa hàng điện tử uy tín')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Chào mừng đến với Shop Điện Tử</h1>
            <p class="lead">Điểm đến lý tưởng cho các sản phẩm công nghệ và thiết bị điện tử mới nhất</p>
            <div class="mt-4">
                <a href="/products" class="btn btn-primary btn-lg me-2">Mua sắm ngay</a>
                <a href="/products/featured" class="btn btn-outline-light btn-lg">Xem sản phẩm</a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Sản phẩm nổi bật</h2>
            <div class="row">
                @forelse($featuredProducts as $product)
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        @if($product->sale_price && $product->sale_price < $product->price)
                            <div class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm giá</div>
                        @endif
                        
                        @if($product->thumbnail)
                            <img src="{{ asset('storage/' . $product->thumbnail) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $product->name }}">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                @if($product->sale_price && $product->sale_price < $product->price)
                                    <span class="text-muted text-decoration-line-through">{{ number_format($product->price) }}₫</span>
                                    <span class="fw-bold text-primary">{{ number_format($product->sale_price) }}₫</span>
                                @else
                                    <span class="fw-bold text-primary">{{ number_format($product->price) }}₫</span>
                                @endif
                            </div>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 60) }}</p>
                            <div class="d-grid">
                                <a href="/products/{{ $product->slug }}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Fallback nếu không có sản phẩm nổi bật -->
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <div class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm giá</div>
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                        <div class="card-body">
                            <h5 class="card-title">MacBook Pro 2023</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted text-decoration-line-through">45.990.000₫</span>
                                <span class="fw-bold text-primary">41.990.000₫</span>
                            </div>
                            <p class="card-text">MacBook Pro mới nhất với chip M2, RAM 16GB và SSD 512GB.</p>
                            <div class="d-grid">
                                <a href="/products" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="text-center mt-4">
                <a href="/products" class="btn btn-outline-primary">Xem tất cả sản phẩm</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Mua sắm theo danh mục</h2>
            <div class="row g-4">
                @forelse($categories as $category)
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="{{ $category->name }}">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $category->name }}</h4>
                            <p class="card-text">{{ $category->description ?? 'Khám phá các sản phẩm trong danh mục này.' }}</p>
                            <a href="/products/category/{{ $category->slug }}" class="btn btn-outline-primary">Xem {{ $category->name }}</a>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Fallback nếu không có danh mục -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Laptop">
                        <div class="card-body text-center">
                            <h4 class="card-title">Laptop</h4>
                            <p class="card-text">Khám phá các dòng laptop từ các thương hiệu hàng đầu như Apple, Dell, HP và nhiều hãng khác.</p>
                            <a href="/products" class="btn btn-outline-primary">Xem laptop</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://via.placeholder.com/1920x600');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 30px;
    }
    
    .product-card {
        transition: transform 0.3s ease;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .product-card:hover {
        transform: translateY(-10px);
    }
</style>
@endpush
@extends('layouts.app')

@section('title', $product->name . ' - Shop Điện Tử')

@section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>
    
    <div class="row mb-5">
        <div class="col-md-5">
            @if($product->thumbnail)
                <img src="{{ asset('storage/' . $product->thumbnail) }}" class="img-fluid rounded" alt="{{ $product->name }}">
            @else
                <img src="https://via.placeholder.com/600x400" class="img-fluid rounded" alt="{{ $product->name }}">
            @endif
            
            @if($product->images && count($product->images) > 0)
                <div class="row mt-3">
                    @foreach($product->images as $image)
                        <div class="col-3">
                            <img src="{{ asset('storage/' . $image->image) }}" class="img-thumbnail" alt="{{ $product->name }}">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        
        <div class="col-md-7">
            <h1 class="mb-3">{{ $product->name }}</h1>
            
            <div class="mb-3">
                @if($product->sale_price && $product->sale_price < $product->price)
                    <span class="text-muted text-decoration-line-through fs-5">{{ number_format($product->price) }}₫</span>
                    <span class="fs-3 fw-bold text-primary">{{ number_format($product->sale_price) }}₫</span>
                    <span class="badge bg-danger ms-2">Giảm {{ round((1 - $product->sale_price / $product->price) * 100) }}%</span>
                @else
                    <span class="fs-3 fw-bold text-primary">{{ number_format($product->price) }}₫</span>
                @endif
            </div>
            
            <div class="mb-3">
                <span class="badge bg-{{ $product->quantity > 0 ? 'success' : 'danger' }}">
                    {{ $product->quantity > 0 ? 'Còn hàng' : 'Hết hàng' }}
                </span>
                
                @if($product->is_featured)
                    <span class="badge bg-primary ms-2">Sản phẩm nổi bật</span>
                @endif
                
                @if($product->categories)
                    @foreach($product->categories as $category)
                        <a href="{{ route('products.category', $category->slug) }}" class="badge bg-secondary text-decoration-none ms-2">{{ $category->name }}</a>
                    @endforeach
                @endif
            </div>
            
            <div class="mb-4">
                <h5>Mô tả sản phẩm:</h5>
                <p>{{ $product->description }}</p>
            </div>
            
            <div class="mb-4">
                <h5>Thông tin chi tiết:</h5>
                <p>{{ $product->content }}</p>
            </div>
            
            <div class="d-grid gap-2 d-md-flex">
                <button class="btn btn-primary btn-lg flex-grow-1">Mua ngay</button>
                <button class="btn btn-outline-primary btn-lg">Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>
    
    @if(count($relatedProducts) > 0)
        <div class="related-products mt-5">
            <h3 class="mb-4">Sản phẩm liên quan</h3>
            <div class="row">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="col-md-3 mb-4">
                        <div class="card product-card h-100">
                            @if($relatedProduct->sale_price && $relatedProduct->sale_price < $relatedProduct->price)
                                <div class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm giá</div>
                            @endif
                            
                            @if($relatedProduct->thumbnail)
                                <img src="{{ asset('storage/' . $relatedProduct->thumbnail) }}" class="card-img-top" alt="{{ $relatedProduct->name }}">
                            @else
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $relatedProduct->name }}">
                            @endif
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    @if($relatedProduct->sale_price && $relatedProduct->sale_price < $relatedProduct->price)
                                        <span class="text-muted text-decoration-line-through">{{ number_format($relatedProduct->price) }}₫</span>
                                        <span class="fw-bold text-primary">{{ number_format($relatedProduct->sale_price) }}₫</span>
                                    @else
                                        <span class="fw-bold text-primary">{{ number_format($relatedProduct->price) }}₫</span>
                                    @endif
                                </div>
                                <div class="d-grid mt-auto">
                                    <a href="{{ route('products.show', $relatedProduct->slug) }}" class="btn btn-outline-primary">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection

@push('styles')
<style>
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
@extends('layouts.app')

@section('title', $product->name . ' - Shop Điện Tử')

@section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Sản phẩm</a></li>
            @if($product->categories->count() > 0)
                <li class="breadcrumb-item">
                    <a href="{{ route('products.category', $product->categories->first()->slug) }}">
                        {{ $product->categories->first()->name }}
                    </a>
                </li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>
    
    <div class="row">
        <!-- Product Images -->
        <div class="col-lg-6 mb-4">
            <div class="product-images">
                <div class="main-image mb-3">
                    <img src="{{ $product->thumbnail ? Storage::url($product->thumbnail) : asset('images/no-image.png') }}" 
                        class="img-fluid rounded" id="main-product-image" alt="{{ $product->name }}">
                </div>
                @if($product->images->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="thumbnail-image me-2 active" data-image="{{ Storage::url($product->thumbnail) }}">
                                    <img src="{{ Storage::url($product->thumbnail) }}" class="img-thumbnail" alt="{{ $product->name }}">
                                </div>
                                @foreach($product->images as $image)
                                    <div class="thumbnail-image me-2" data-image="{{ Storage::url($image->image) }}">
                                        <img src="{{ Storage::url($image->image) }}" class="img-thumbnail" alt="{{ $product->name }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Product Info -->
        <div class="col-lg-6">
            <h1 class="mb-3">{{ $product->name }}</h1>
            
            <div class="mb-3">
                @if($product->sale_price && $product->sale_price < $product->price)
                    <span class="text-danger h3 fw-bold">{{ number_format($product->sale_price) }}đ</span>
                    <span class="text-muted text-decoration-line-through ms-2">{{ number_format($product->price) }}đ</span>
                    <span class="badge bg-danger ms-2">
                        -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                    </span>
                @else
                    <span class="text-danger h3 fw-bold">{{ number_format($product->price) }}đ</span>
                @endif
            </div>
            
            <div class="mb-3">
                <span class="text-muted">SKU: {{ $product->sku }}</span>
                <span class="mx-2">|</span>
                <span class="text-muted">Tình trạng: 
                    @if($product->quantity > 0)
                        <span class="text-success">Còn hàng ({{ $product->quantity }})</span>
                    @else
                        <span class="text-danger">Hết hàng</span>
                    @endif
                </span>
            </div>
            
            <div class="mb-4">
                <p>{{ $product->description }}</p>
            </div>
            
            <form action="{{ route('cart.add') }}" method="POST" class="mb-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="quantity" class="col-form-label">Số lượng:</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" max="{{ $product->quantity }}">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary" {{ $product->quantity > 0 ? '' : 'disabled' }}>
                            <i class="fas fa-cart-plus me-2"></i>Thêm vào giỏ hàng
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="mb-4">
                <h5>Danh mục:</h5>
                <div>
                    @foreach($product->categories as $category)
                        <a href="{{ route('products.category', $category->slug) }}" class="badge bg-secondary text-decoration-none">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <!-- Product Details -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <ul class="nav nav-tabs card-header-tabs" id="productTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">
                                Chi tiết sản phẩm
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                                Đánh giá
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            {!! $product->content !!}
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <p>Chưa có đánh giá nào cho sản phẩm này.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Related Products -->
    @if($relatedProducts->count() > 0)
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="mb-4">Sản phẩm liên quan</h3>
            <div class="row">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 border-0 shadow-sm product-card">
                            <div class="position-relative">
                                <a href="{{ route('products.show', $relatedProduct->slug) }}">
                                    <img src="{{ $relatedProduct->thumbnail ? Storage::url($relatedProduct->thumbnail) : asset('images/no-image.png') }}" 
                                        class="card-img-top" alt="{{ $relatedProduct->name }}">
                                </a>
                                @if($relatedProduct->sale_price && $relatedProduct->sale_price < $relatedProduct->price)
                                    <div class="product-badge bg-danger">Sale</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('products.show', $relatedProduct->slug) }}" class="text-decoration-none text-dark">
                                        {{ $relatedProduct->name }}
                                    </a>
                                </h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        @if($relatedProduct->sale_price && $relatedProduct->sale_price < $relatedProduct->price)
                                            <span class="text-danger fw-bold">{{ number_format($relatedProduct->sale_price) }}đ</span>
                                            <span class="text-muted text-decoration-line-through ms-2">{{ number_format($relatedProduct->price) }}đ</span>
                                        @else
                                            <span class="text-danger fw-bold">{{ number_format($relatedProduct->price) }}đ</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@push('styles')
<style>
    .thumbnail-image {
        cursor: pointer;
        opacity: 0.6;
        transition: opacity 0.3s;
    }
    .thumbnail-image.active, .thumbnail-image:hover {
        opacity: 1;
    }
    .product-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        color: white;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const thumbnails = document.querySelectorAll('.thumbnail-image');
        const mainImage = document.getElementById('main-product-image');
        
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                // Update main image
                mainImage.src = this.getAttribute('data-image');
                
                // Update active state
                thumbnails.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>
@endpush
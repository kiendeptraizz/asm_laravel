@extends('layouts.app')

@section('title', 'Sản phẩm nổi bật - Shop Điện Tử')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Sản phẩm nổi bật</h1>
    
    <div class="row">
        @forelse($featuredProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card product-card h-100">
                    @if($product->sale_price && $product->sale_price < $product->price)
                        <div class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm giá</div>
                    @endif
                    
                    @if($product->thumbnail)
                        <img src="{{ asset('storage/' . $product->thumbnail) }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $product->name }}">
                    @endif
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            @if($product->sale_price && $product->sale_price < $product->price)
                                <span class="text-muted text-decoration-line-through">{{ number_format($product->price) }}₫</span>
                                <span class="fw-bold text-primary">{{ number_format($product->sale_price) }}₫</span>
                            @else
                                <span class="fw-bold text-primary">{{ number_format($product->price) }}₫</span>
                            @endif
                        </div>
                        <p class="card-text flex-grow-1">{{ Str::limit($product->description, 100) }}</p>
                        <div class="d-grid mt-auto">
                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Không có sản phẩm nổi bật nào.
                </div>
            </div>
        @endforelse
    </div>
    
    <div class="d-flex justify-content-center mt-4">
        {{ $featuredProducts->links() }}
    </div>
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
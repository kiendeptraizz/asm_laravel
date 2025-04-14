@extends('layouts.app')

@section('title', 'Sản phẩm - Shop Điện Tử')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Sidebar Filters -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Lọc sản phẩm</h5>
                </div>
                <div class="card-body">
                    <h6 class="mb-3">Sắp xếp theo</h6>
                    <form action="{{ route('products.index') }}" method="GET">
                        <div class="mb-3">
                            <select name="sort" class="form-select" onchange="this.form.submit()">
                                <option value="latest" {{ $sort == 'latest' ? 'selected' : '' }}>Mới nhất</option>
                                <option value="price_asc" {{ $sort == 'price_asc' ? 'selected' : '' }}>Giá: Thấp đến cao</option>
                                <option value="price_desc" {{ $sort == 'price_desc' ? 'selected' : '' }}>Giá: Cao đến thấp</option>
                                <option value="name_asc" {{ $sort == 'name_asc' ? 'selected' : '' }}>Tên: A-Z</option>
                                <option value="name_desc" {{ $sort == 'name_desc' ? 'selected' : '' }}>Tên: Z-A</option>
                            </select>
                        </div>
                    </form>
                    
                    <h6 class="mb-3">Danh mục</h6>
                    <div class="list-group list-group-flush">
                        @foreach(App\Models\Category::where('is_active', true)->get() as $category)
                            <a href="{{ route('products.category', $category->slug) }}" class="list-group-item list-group-item-action">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Product List -->
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Tất cả sản phẩm</h2>
                <span>Hiển thị {{ $products->count() }} / {{ $products->total() }} sản phẩm</span>
            </div>
            
            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm product-card">
                            <div class="position-relative">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img src="{{ $product->thumbnail ? Storage::url($product->thumbnail) : asset('images/no-image.png') }}" 
                                        class="card-img-top" alt="{{ $product->name }}">
                                </a>
                                @if($product->sale_price && $product->sale_price < $product->price)
                                    <div class="product-badge bg-danger">Sale</div>
                                @endif
                                @if($product->is_featured)
                                    <div class="product-badge bg-primary">Hot</div>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none text-dark">
                                        {{ $product->name }}
                                    </a>
                                </h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        @if($product->sale_price && $product->sale_price < $product->price)
                                            <span class="text-danger fw-bold">{{ number_format($product->sale_price) }}đ</span>
                                            <span class="text-muted text-decoration-line-through ms-2">{{ number_format($product->price) }}đ</span>
                                        @else
                                            <span class="text-danger fw-bold">{{ number_format($product->price) }}đ</span>
                                        @endif
                                    </div>
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-cart-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            Không có sản phẩm nào.
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .product-card {
        transition: transform 0.3s;
    }
    .product-card:hover {
        transform: translateY(-5px);
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
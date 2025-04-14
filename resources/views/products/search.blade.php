@extends('layouts.app')

@section('title', 'Tìm kiếm: ' . $keyword . ' - Shop Điện Tử')

@section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm: {{ $keyword }}</li>
        </ol>
    </nav>
    
    <div class="row">
        <!-- Sidebar Filters -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tìm kiếm</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.search') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="keyword" value="{{ $keyword }}" placeholder="Nhập từ khóa...">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
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
                <h2 class="mb-0">Kết quả tìm kiếm: "{{ $keyword }}"</h2>
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
                            Không tìm thấy sản phẩm nào phù hợp với từ khóa "{{ $keyword }}".
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $products->appends(['keyword' => $keyword])->links() }}
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
@extends('layouts.admin')

@section('title', 'Chi tiết sản phẩm')

@section('styles')
<style>
    .product-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 15px;
    }
    .product-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 20px;
    }
    .gallery-item {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 1px solid #ddd;
    }
</style>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Chi tiết sản phẩm</h1>
    <div>
        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Chỉnh sửa
        </a>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Quay lại
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Hình ảnh sản phẩm</h5>
            </div>
            <div class="card-body text-center">
                @if($product->thumbnail)
                    <img src="{{ Storage::url($product->thumbnail) }}" alt="{{ $product->name }}" class="product-image">
                @else
                    <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No image" class="product-image">
                @endif
                
                <div class="product-gallery">
                    @forelse($product->images as $image)
                        <img src="{{ Storage::url($image->image) }}" alt="Product image" class="gallery-item">
                    @empty
                        <p class="text-muted">Không có hình ảnh bổ sung</p>
                    @endforelse
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Thông tin bổ sung</h5>
            </div>
            <div class="card-body">
                <p><strong>SKU:</strong> {{ $product->sku }}</p>
                <p><strong>Trạng thái:</strong> 
                    @if($product->is_active)
                        <span class="badge bg-success">Đang bán</span>
                    @else
                        <span class="badge bg-danger">Ngừng bán</span>
                    @endif
                </p>
                <p><strong>Nổi bật:</strong> 
                    @if($product->is_featured)
                        <span class="badge bg-primary">Có</span>
                    @else
                        <span class="badge bg-secondary">Không</span>
                    @endif
                </p>
                <p><strong>Ngày tạo:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Cập nhật lần cuối:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Thông tin sản phẩm</h5>
            </div>
            <div class="card-body">
                <h2>{{ $product->name }}</h2>
                <p class="text-muted">{{ $product->slug }}</p>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <p><strong>Giá:</strong> {{ number_format($product->price) }} đ</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Giá khuyến mãi:</strong> {{ $product->sale_price ? number_format($product->sale_price) . ' đ' : 'Không có' }}</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Số lượng trong kho:</strong> {{ $product->quantity }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Danh mục:</strong> 
                            @foreach($product->categories as $category)
                                <span class="badge bg-info">{{ $category->name }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
                
                <hr>
                
                <h5>Mô tả ngắn:</h5>
                <p>{{ $product->description ?: 'Không có mô tả' }}</p>
                
                <h5>Nội dung chi tiết:</h5>
                <div>
                    {!! $product->content ?: 'Không có nội dung chi tiết' !!}
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Thao tác</h5>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i> Xóa sản phẩm
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
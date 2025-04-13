@extends('layouts.admin')

@section('title', 'Chi tiết danh mục - Admin Panel')

@section('header', 'Chi tiết danh mục')

@section('content')
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Thông tin danh mục</h5>
        <div>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Chỉnh sửa
            </a>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Quay lại
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th style="width: 200px">ID:</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Tên danh mục:</th>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th>Slug:</th>
                <td>{{ $category->slug }}</td>
            </tr>
            <tr>
                <th>Mô tả:</th>
                <td>{{ $category->description ?: 'Không có mô tả' }}</td>
            </tr>
            <tr>
                <th>Trạng thái:</th>
                <td>
                    @if($category->is_active)
                        <span class="badge bg-success">Hiển thị</span>
                    @else
                        <span class="badge bg-secondary">Ẩn</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Ngày tạo:</th>
                <td>{{ $category->created_at->format('d/m/Y H:i:s') }}</td>
            </tr>
            <tr>
                <th>Ngày cập nhật:</th>
                <td>{{ $category->updated_at->format('d/m/Y H:i:s') }}</td>
            </tr>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Sản phẩm trong danh mục này</h5>
    </div>
    <div class="card-body">
        @if($category->products->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if($product->thumbnail)
                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}" width="50" height="50" class="img-thumbnail">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price) }} đ</td>
                            <td>
                                @if($product->is_active)
                                    <span class="badge bg-success">Đang bán</span>
                                @else
                                    <span class="badge bg-secondary">Ẩn</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted">Không có sản phẩm nào trong danh mục này.</p>
        @endif
    </div>
</div>
@endsection
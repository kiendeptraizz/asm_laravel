@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')

@section('header', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h2>Chào mừng đến với trang quản trị</h2>
                <p>Bạn có thể quản lý sản phẩm, danh mục, đơn hàng và người dùng từ đây.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="fas fa-box fa-3x mb-3 text-primary"></i>
                <h5 class="card-title">Sản phẩm</h5>
                <p class="card-text">Quản lý tất cả sản phẩm của bạn</p>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Quản lý</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="fas fa-list fa-3x mb-3 text-primary"></i>
                <h5 class="card-title">Danh mục</h5>
                <p class="card-text">Quản lý danh mục sản phẩm</p>
                <a href="#" class="btn btn-primary">Quản lý</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="fas fa-shopping-cart fa-3x mb-3 text-primary"></i>
                <h5 class="card-title">Đơn hàng</h5>
                <p class="card-text">Xem và quản lý đơn hàng</p>
                <a href="#" class="btn btn-primary">Quản lý</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                <h5 class="card-title">Người dùng</h5>
                <p class="card-text">Quản lý tài khoản người dùng</p>
                <a href="#" class="btn btn-primary">Quản lý</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Đơn hàng gần đây</h5>
            </div>
            <div class="card-body">
                <p>Chưa có đơn hàng nào.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Thống kê nhanh</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <span>Tổng sản phẩm:</span>
                    <span class="badge bg-primary">0</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Tổng danh mục:</span>
                    <span class="badge bg-success">0</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Đơn hàng mới:</span>
                    <span class="badge bg-warning">0</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Người dùng mới:</span>
                    <span class="badge bg-info">0</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
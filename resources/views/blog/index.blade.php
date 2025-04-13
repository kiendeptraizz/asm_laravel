@extends('layouts.app')

@section('title', 'Blog - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Blog Công Nghệ</h1>
        
        <!-- Featured Post -->
        <div class="card border-0 shadow-sm mb-5">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid rounded-start" alt="Featured Post">
                </div>
                <div class="col-md-6">
                    <div class="card-body p-4 p-md-5">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge bg-primary me-2">Nổi bật</span>
                            <small class="text-muted">15/06/2023</small>
                        </div>
                        <h2 class="card-title mb-3">So sánh chi tiết iPhone 14 Pro và Samsung Galaxy S23 Ultra</h2>
                        <p class="card-text">Hai flagship hàng đầu từ Apple và Samsung có những điểm mạnh và yếu riêng. Bài viết này sẽ phân tích chi tiết về thiết kế, hiệu năng, camera và thời lượng pin để giúp bạn lựa chọn sản phẩm phù hợp nhất.</p>
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://via.placeholder.com/40x40" class="rounded-circle me-2" alt="Author">
                            <span>Nguyễn Văn A</span>
                        </div>
                        <a href="{{ url('/blog/1') }}" class="btn btn-primary">Đọc tiếp</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Blog Categories -->
        <div class="mb-4">
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="btn btn-outline-primary">Tất cả</a>
                <a href="#" class="btn btn-outline-secondary">Điện thoại</a>
                <a href="#" class="btn btn-outline-secondary">Laptop</a>
                <a href="#" class="btn btn-outline-secondary">Máy tính bảng</a>
                <a href="#" class="btn btn-outline-secondary">Thiết bị đeo</a>
                <a href="#" class="btn btn-outline-secondary">Phụ kiện</a>
                <a href="#" class="btn btn-outline-secondary">Mẹo hay</a>
                <a href="#" class="btn btn-outline-secondary">Tin tức</a>
            </div>
        </div>
        
        <!-- Blog Posts -->
        <div class="row">
            <!-- Post 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-secondary">Điện thoại</span>
                            <small class="text-muted">10/06/2023</small>
                        </div>
                        <h5 class="card-title">Top 5 điện thoại tầm trung đáng mua nhất 2023</h5>
                        <p class="card-text">Với ngân sách từ 5-10 triệu đồng, bạn có thể sở hữu những chiếc điện thoại có cấu hình mạnh, camera tốt và thiết kế đẹp.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/30x30" class="rounded-circle me-2" alt="Author">
                                <small>Trần Thị B</small>
                            </div>
                            <a href="{{ url('/blog/2') }}" class="btn btn-sm btn-outline-primary">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Post 2 -->
            <div class="col-lg-4 col-md-6
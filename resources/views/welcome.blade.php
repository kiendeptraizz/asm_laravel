@extends('layouts.app')

@section('title', 'Shop Điện Tử - Cửa hàng điện tử uy tín')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Chào mừng đến với Shop Điện Tử</h1>
            <p class="lead">Điểm đến lý tưởng cho các sản phẩm công nghệ và thiết bị điện tử mới nhất</p>
            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg me-2">Mua sắm ngay</a>
                <a href="{{ route('products.index') }}" class="btn btn-outline-light btn-lg">Xem sản phẩm</a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Sản phẩm nổi bật</h2>
            <div class="row">
                <!-- Static product cards since we're having issues with dynamic data -->
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
                                <a href="{{ route('products.index') }}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-primary">25.990.000₫</span>
                            </div>
                            <p class="card-text">iPhone mới nhất với chip A16 Bionic, bộ nhớ 256GB và hệ thống camera Pro.</p>
                            <div class="d-grid">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <div class="badge bg-success position-absolute top-0 end-0 m-2">Mới</div>
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S23</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-primary">20.990.000₫</span>
                            </div>
                            <p class="card-text">Flagship mới nhất của Samsung với Snapdragon 8 Gen 2, RAM 8GB và bộ nhớ 128GB.</p>
                            <div class="d-grid">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                        <div class="card-body">
                            <h5 class="card-title">Tai nghe Sony WH-1000XM5</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-primary">8.490.000₫</span>
                            </div>
                            <p class="card-text">Tai nghe chống ồn cao cấp với chất lượng âm thanh hàng đầu trong ngành.</p>
                            <div class="d-grid">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Xem tất cả sản phẩm</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Mua sắm theo danh mục</h2>
            <div class="row g-4">
                <!-- Static category cards -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Laptop">
                        <div class="card-body text-center">
                            <h4 class="card-title">Laptop</h4>
                            <p class="card-text">Khám phá các dòng laptop từ các thương hiệu hàng đầu như Apple, Dell, HP và nhiều hãng khác.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Xem laptop</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Điện thoại">
                        <div class="card-body text-center">
                            <h4 class="card-title">Điện thoại</h4>
                            <p class="card-text">Khám phá các điện thoại thông minh mới nhất từ Apple, Samsung, Google và nhiều hãng khác.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Xem điện thoại</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Phụ kiện">
                        <div class="card-body text-center">
                            <h4 class="card-title">Phụ kiện</h4>
                            <p class="card-text">Tìm phụ kiện hoàn hảo cho thiết bị của bạn - tai nghe, ốp lưng, sạc và nhiều phụ kiện khác.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Xem phụ kiện</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Tại sao chọn chúng tôi</h2>
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="p-3">
                        <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h4>Giao hàng nhanh</h4>
                        <p>Miễn phí vận chuyển cho đơn hàng trên 1.000.000₫. Nhận sản phẩm trong vòng 2-3 ngày làm việc.</p>
                    </div>
                </div>
                
                <div class="col-md-3 text-center">
                    <div class="p-3">
                        <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                        <h4>Bảo hành chính hãng</h4>
                        <p>Tất cả sản phẩm đều được bảo hành chính hãng 12 tháng và hỗ trợ đổi trả trong 30 ngày.</p>
                    </div>
                </div>
                
                <div class="col-md-3 text-center">
                    <div class="p-3">
                        <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                        <h4>Hỗ trợ 24/7</h4>
                        <p>Đội ngũ hỗ trợ khách hàng luôn sẵn sàng giúp đỡ bạn mọi lúc, mọi nơi qua nhiều kênh liên lạc.</p>
                    </div>
                </div>
                
                <div class="col-md-3 text-center">
                    <div class="p-3">
                        <i class="fas fa-credit-card fa-3x text-primary mb-3"></i>
                        <h4>Thanh toán an toàn</h4>
                        <p>Nhiều phương thức thanh toán an toàn và bảo mật. Hỗ trợ trả góp 0% lãi suất.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Khách hàng nói gì về chúng tôi</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"Tôi rất hài lòng với chất lượng sản phẩm và dịch vụ khách hàng tại đây. Sản phẩm chính hãng, giá cả hợp lý và giao hàng nhanh chóng."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Khách hàng">
                                <div>
                                    <h6 class="mb-0">Nguyễn Văn A</h6>
                                    <small class="text-muted">Khách hàng thân thiết</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="card-text">"Giao hàng rất nhanh và sản phẩm đúng như mô tả. Đóng gói cũng rất cẩn thận và an toàn. Chắc chắn tôi sẽ mua sắm ở đây lần nữa!"</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Khách hàng">
                                <div>
                                    <h6 class="mb-0">Trần Thị B</h6>
                                    <small class="text-muted">Khách hàng mới</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"Tôi đã gặp vấn đề với đơn hàng của mình và đội ngũ hỗ trợ khách hàng đã giải quyết ngay lập tức. Giá cả cạnh tranh và họ có nhiều sản phẩm đa dạng."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Khách hàng">
                                <div>
                                    <h6 class="mb-0">Lê Văn C</h6>
                                    <small class="text-muted">Khách hàng thường xuyên</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2>Đăng ký nhận bản tin</h2>
                    <p>Cập nhật thông tin về sản phẩm mới, khuyến mãi và tin tức công nghệ.</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Địa chỉ email của bạn">
                            <button class="btn btn-dark" type="submit">Đăng ký</button>
                        </div>
                    </form>
                </div>
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
@extends('layouts.app')

@section('title', 'iPhone 14 Pro - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/sanpham') }}">Sản phẩm</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/danhmuc/dienthoai') }}">Điện thoại</a></li>
                <li class="breadcrumb-item active" aria-current="page">iPhone 14 Pro</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Product Images -->
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="iPhone 14 Pro">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="iPhone 14 Pro">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="iPhone 14 Pro">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="iPhone 14 Pro">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Trước</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Sau</span>
                            </button>
                        </div>

                        <div class="row mt-3">
                            <div class="col-3">
                                <img src="https://via.placeholder.com/150x100" class="img-thumbnail" alt="Thumbnail 1" data-bs-target="#productCarousel" data-bs-slide-to="0">
                            </div>
                            <div class="col-3">
                                <img src="https://via.placeholder.com/150x100" class="img-thumbnail" alt="Thumbnail 2" data-bs-target="#productCarousel" data-bs-slide-to="1">
                            </div>
                            <div class="col-3">
                                <img src="https://via.placeholder.com/150x100" class="img-thumbnail" alt="Thumbnail 3" data-bs-target="#productCarousel" data-bs-slide-to="2">
                            </div>
                            <div class="col-3">
                                <img src="https://via.placeholder.com/150x100" class="img-thumbnail" alt="Thumbnail 4" data-bs-target="#productCarousel" data-bs-slide-to="3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h1 class="mb-3">iPhone 14 Pro</h1>
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <span class="ms-1">(5.0 - 120 đánh giá)</span>
                        </div>
                        <div class="mb-3">
                            <h3 class="text-primary">25.990.000₫</h3>
                        </div>
                        <p>iPhone 14 Pro với thiết kế Dynamic Island, màn hình Super Retina XDR 6.1 inch luôn bật, camera Pro 48MP, chip A16 Bionic siêu mạnh mẽ.</p>

                        <div class="mb-3">
                            <h5>Màu sắc:</h5>
                            <div class="d-flex gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="color" id="color1" checked>
                                    <label class="form-check-label" for="color1">Đen</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="color" id="color2">
                                    <label class="form-check-label" for="color2">Bạc</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="color" id="color3">
                                    <label class="form-check-label" for="color3">Vàng</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="color" id="color4">
                                    <label class="form-check-label" for="color4">Tím</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h5>Bộ nhớ:</h5>
                            <div class="d-flex gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storage" id="storage1" checked>
                                    <label class="form-check-label" for="storage1">128GB</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storage" id="storage2">
                                    <label class="form-check-label" for="storage2">256GB</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storage" id="storage3">
                                    <label class="form-check-label" for="storage3">512GB</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storage" id="storage4">
                                    <label class="form-check-label" for="storage4">1TB</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h5>Số lượng:</h5>
                            <div class="input-group" style="width: 150px;">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="text" class="form-control text-center" value="1" id="quantityInput">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg">
                                <i class="fas fa-shopping-cart me-2"></i>Thêm vào giỏ hàng
                            </button>
                            <button class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-heart me-2"></i>Thêm vào yêu thích
                            </button>
                        </div>

                        <div class="mt-4">
                            <h5>Chia sẻ:</h5>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-info">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#" class="btn btn-outline-success">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Description Tabs -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="productTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Mô tả</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab" aria-controls="specs" aria-selected="false">Thông số kỹ thuật</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá (120)</button>
                            </li>
                        </ul>
                        <div class="tab-content p-3" id="productTabsContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <h4>iPhone 14 Pro - Đỉnh cao công nghệ</h4>
                                <p>iPhone 14 Pro đưa bạn đến một trải nghiệm hoàn toàn mới với Dynamic Island - một tính năng tương tác mới giúp bạn truy cập thông tin nhanh chóng. Màn hình Super Retina XDR luôn bật giúp bạn xem thông tin quan trọng mà không cần mở khóa điện thoại.</p>
                                
                                <h5>Camera chuyên nghiệp</h5>
                                <p>Hệ thống camera Pro 48MP với camera chính 48MP, camera Ultra Wide và camera Telephoto cho phép bạn chụp ảnh với độ chi tiết đáng kinh ngạc. Chế độ Action mode giúp quay video ổn định ngay cả khi chuyển động.</p>
                                
                                <h5>Hiệu năng vượt trội</h5>
                                <p>Chip A16 Bionic mang đến hiệu năng vượt trội, xử lý mọi tác vụ một cách mượt mà, từ chơi game đến chỉnh sửa video 4K. Pin dài lâu giúp bạn sử dụng cả ngày mà không lo hết pin.</p>
                                
                                <h5>Bảo mật tối đa</h5>
                                <p>Face ID nhanh và an toàn giúp bảo vệ dữ liệu của bạn. Tính năng SOS khẩn cấp qua vệ tinh và Phát hiện va chạm giúp bạn an toàn hơn trong mọi tình huống.</p>
                            </div>
                            <div class="tab-pane fade" id="specs" role="tabpanel" aria-labelledby="specs-tab">
                                <h4>Thông số kỹ thuật</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Màn hình</th>
                                                <td>Super Retina XDR OLED 6.1 inch, 2556 x 1179 pixel ở 460 ppi</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Chip</th>
                                                <td>A16 Bionic</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Camera sau</th>
                                                <td>Hệ thống camera Pro 48MP: Camera chính 48MP, Ultra Wide 12MP, Telephoto 12MP</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Camera trước</th>
                                                <td>Camera TrueDepth 12MP với khả năng tự động lấy nét</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bộ nhớ</th>
                                                <td>128GB, 256GB, 512GB, 1TB</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pin</th>
                                                <td>Lên đến 23 giờ phát video</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kháng nước</th>
                                                <td>IP68 (độ sâu tối đa 6 mét trong tối đa 30 phút)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kích thước</th>
                                                <td>147,5 x 71,5 x 7,85 mm</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Trọng lượng</th>
                                                <td>206 gram</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Hệ điều hành</th>
                                                <td>iOS 16</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="text-center mb-4">
                                            <h1 class="display-1 fw-bold">4.9</h1>
                                            <div class="mb-2">
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </div>
                                            <p>Dựa trên 120 đánh giá</p>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="me-2">5 sao</span>
                                                <div class="progress flex-grow-1" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-2">85%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="me-2">4 sao</span>
                                                <div class="progress flex-grow-1" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-2">10%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="me-2">3 sao</span>
                                                <div class="progress flex-grow-1" style="height: 10px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-2">3%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="me-2">2 sao</span>
                                                <div class="progress flex-grow-1" style="height: 10px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-2">1%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="me-2">1 sao</span>
                                                <div class="progress flex-grow-1" style="height: 10px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-2">1%</span>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">Viết đánh giá</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="mb-4">Đánh giá gần đây</h4>
                                        
                                        <!-- Review 1 -->
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <div>
                                                        <h5 class="mb-0">Nguyễn Văn A</h5>
                                                        <div class="text-muted small">Đã mua hàng tại Shop Điện Tử</div>
                                                    </div>
                                                    <div class="text-muted small">15/06/2023</div>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                </div>
                                                <h6>Sản phẩm tuyệt vời!</h6>
                                                <p>iPhone 14 Pro là một sản phẩm tuyệt vời. Camera chụp ảnh rất đẹp, pin dùng cả ngày không lo hết. Dynamic Island là một tính năng rất hay và hữu ích. Rất hài lòng với sản phẩm này!</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Review 2 -->
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <div>
                                                        <h5 class="mb-0">Trần Thị B</h5>
                                                        <div class="text-muted small">Đã mua hàng tại Shop Điện Tử</div>
                                                    </div>
                                                    <div class="text-muted small">10/06/2023</div>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                </div>
                                                <h6>Đáng đồng tiền bát gạo</h6>
                                                <p>Mặc dù giá hơi cao nhưng iPhone 14 Pro thực sự đáng đồng tiền bát gạo. Màn hình đẹp, camera chụp ảnh sắc nét, hiệu năng mạnh mẽ. Rất hài lòng với trải nghiệm sử dụng.</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Review 3 -->
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <div>
                                                        <h5 class="mb-0">Lê Văn C</h5>
                                                        <div class="text-muted small">Đã mua hàng tại Shop Điện Tử</div>
                                                    </div>
                                                    <div class="text-muted small">05/06/2023</div>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="far fa-star text-warning"></i>
                                                </div>
                                                <h6>Sản phẩm tốt, giao hàng nhanh</h6>
                                                <p>Sản phẩm chất lượng tốt, đúng như mô tả. Shop giao hàng nhanh và đóng gói cẩn thận. Chỉ tiếc là pin không được tốt như mong đợi, nhưng nhìn chung vẫn rất hài lòng.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center mt-4">
                                            <button class="btn btn-outline-primary">Xem thêm đánh giá</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-4">Sản phẩm liên quan</h2>
                <div class="row">
                    <!-- Related Product 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">iPhone 13 Pro</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">19.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-1">(4.5)</span>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Product 2 -->
                    <div class="col-md-3 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">iPhone 14</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">21.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="ms-1">(4.9)</span>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Product 3 -->
                    <div class="col-md-3 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">iPhone 14 Pro Max</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">28.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="ms-1">(5.0)</span>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Product 4 -->
                    <div class="col-md-3 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy S23 Ultra</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">26.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-1">(4.7)</span>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Viết đánh giá</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="reviewRating" class="form-label">Đánh giá của bạn</label>
                            <div class="rating">
                                <i class="far fa-star fs-4 text-warning"></i>
                                <i class="far fa-star fs-4 text-warning"></i>
                                <i class="far fa-star fs-4 text-warning"></i>
                                <i class="far fa-star fs-4 text-warning"></i>
                                <i class="far fa-star fs-4 text-warning"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="reviewTitle" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" id="reviewTitle" placeholder="Nhập tiêu đề đánh giá">
                        </div>
                        <div class="mb-3">
                            <label for="reviewContent" class="form-label">Nội dung đánh giá</label>
                            <textarea class="form-control" id="reviewContent" rows="4" placeholder="Chia sẻ trải nghiệm của bạn về sản phẩm này"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="reviewImages" class="form-label">Thêm hình ảnh (tùy chọn)</label>
                            <input class="form-control" type="file" id="reviewImages" multiple>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary">Gửi đánh giá</button>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
        // Quantity increment/decrement
        document.getElementById('incrementBtn').addEventListener('click', function() {
            var input = document.getElementById('quantityInput');
            input.value = parseInt(input.value) + 1;
        });
        
        document.getElementById('decrementBtn').addEventListener('click', function() {
            var input = document.getElementById('quantityInput');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        });
        
        // Rating system for review modal
        const stars = document.querySelectorAll('.rating .fa-star');
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                stars.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.remove('far');
                        s.classList.add('fas');
                    } else {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });
    </script>
    @endsection
@endsection
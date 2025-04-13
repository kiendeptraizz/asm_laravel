@extends('layouts.app')

@section('title', 'Tất cả sản phẩm - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Sidebar / Filters -->
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Danh mục</h5>
                        <div class="list-group list-group-flush">
                            <a href="{{ url('/danhmuc/laptop') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Laptop
                                <span class="badge bg-primary rounded-pill">24</span>
                            </a>
                            <a href="{{ url('/danhmuc/dienthoai') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Điện thoại
                                <span class="badge bg-primary rounded-pill">18</span>
                            </a>
                            <a href="{{ url('/danhmuc/maytinhbang') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Máy tính bảng
                                <span class="badge bg-primary rounded-pill">12</span>
                            </a>
                            <a href="{{ url('/danhmuc/phukien') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Phụ kiện
                                <span class="badge bg-primary rounded-pill">36</span>
                            </a>
                            <a href="{{ url('/danhmuc/amthanh') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Âm thanh
                                <span class="badge bg-primary rounded-pill">15</span>
                            </a>
                        </div>

                        <h5 class="mt-4 mb-3">Thương hiệu</h5>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="brand1">
                            <label class="form-check-label" for="brand1">Apple</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="brand2">
                            <label class="form-check-label" for="brand2">Samsung</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="brand3">
                            <label class="form-check-label" for="brand3">Dell</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="brand4">
                            <label class="form-check-label" for="brand4">HP</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="brand5">
                            <label class="form-check-label" for="brand5">Sony</label>
                        </div>

                        <h5 class="mt-4 mb-3">Giá</h5>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="priceRange" id="price1">
                            <label class="form-check-label" for="price1">Dưới 5 triệu</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="priceRange" id="price2">
                            <label class="form-check-label" for="price2">5 - 10 triệu</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="priceRange" id="price3">
                            <label class="form-check-label" for="price3">10 - 20 triệu</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="priceRange" id="price4">
                            <label class="form-check-label" for="price4">20 - 30 triệu</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="priceRange" id="price5">
                            <label class="form-check-label" for="price5">Trên 30 triệu</label>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary w-100">Lọc sản phẩm</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Tất cả sản phẩm</h2>
                    <div class="d-flex align-items-center">
                        <label for="sort" class="me-2">Sắp xếp:</label>
                        <select class="form-select" id="sort">
                            <option value="newest">Mới nhất</option>
                            <option value="price-asc">Giá: Thấp đến cao</option>
                            <option value="price-desc">Giá: Cao đến thấp</option>
                            <option value="popular">Phổ biến nhất</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <div class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm giá</div>
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">MacBook Pro 2023</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted text-decoration-line-through">45.990.000₫</span>
                                    <span class="fw-bold text-primary">41.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-1">(4.5)</span>
                                </div>
                                <p class="card-text">MacBook Pro mới nhất với chip M2, RAM 16GB và SSD 512GB.</p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">iPhone 14 Pro</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">25.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="ms-1">(5.0)</span>
                                </div>
                                <p class="card-text">iPhone mới nhất với chip A16 Bionic, bộ nhớ 256GB và hệ thống camera Pro.</p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <div class="badge bg-success position-absolute top-0 end-0 m-2">Mới</div>
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy S23</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">20.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="ms-1">(4.0)</span>
                                </div>
                                <p class="card-text">Flagship mới nhất của Samsung với Snapdragon 8 Gen 2, RAM 8GB và bộ nhớ 128GB.</p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">Tai nghe Sony WH-1000XM5</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">8.490.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-1">(4.7)</span>
                                </div>
                                <p class="card-text">Tai nghe chống ồn cao cấp với chất lượng âm thanh hàng đầu trong ngành.</p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">Dell XPS 13</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="fw-bold text-primary">32.990.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="ms-1">(4.9)</span>
                                </div>
                                <p class="card-text">Laptop mỏng nhẹ với màn hình InfinityEdge, Intel Core i7 và 16GB RAM.</p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <div class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm giá</div>
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Hình ảnh sản phẩm">
                            <div class="card-body">
                                <h5 class="card-title">iPad Pro 12.9"</h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted text-decoration-line-through">28.990.000₫</span>
                                    <span class="fw-bold text-primary">26.490.000₫</span>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-1">(4.6)</span>
                                </div>
                                <p class="card-text">iPad Pro với chip M2, màn hình Liquid Retina XDR và bộ nhớ 256GB.</p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sau</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Tài khoản của tôi - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Tài khoản của tôi</h1>
        
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="https://via.placeholder.com/100" class="rounded-circle" alt="Avatar">
                            <h5 class="mt-3 mb-0">Nguyễn Văn A</h5>
                            <p class="text-muted">nguyenvana@example.com</p>
                        </div>
                        
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action active">
                                <i class="fas fa-user me-2"></i> Thông tin tài khoản
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-shopping-bag me-2"></i> Đơn hàng của tôi
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-map-marker-alt me-2"></i> Địa chỉ giao hàng
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-heart me-2"></i> Sản phẩm yêu thích
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-bell me-2"></i> Thông báo
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-lock me-2"></i> Đổi mật khẩu
                            </a>
                            <a href="#" class="list-group-item list-group-item-action text-danger">
                                <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Thông tin tài khoản</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="fullName" class="col-sm-3 col-form-label">Họ và tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fullName" value="Nguyễn Văn A">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" value="nguyenvana@example.com" readonly>
                                    <div class="form-text">Email không thể thay đổi</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-3 col-form-label">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" id="phone" value="0987654321">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="dob" class="col-sm-3 col-form-label">Ngày sinh</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="dob" value="1990-01-01">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Giới tính</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                        <label class="form-check-label" for="male">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Nữ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                        <label class="form-check-label" for="other">Khác</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="avatar" class="col-sm-3 col-form-label">Ảnh đại diện</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="avatar">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Đơn hàng gần đây</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Ngày đặt</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD12345</td>
                                        <td>15/06/2023</td>
                                        <td><span class="badge bg-success">Đã giao hàng</span></td>
                                        <td>15.990.000₫</td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD12346</td>
                                        <td>10/06/2023</td>
                                        <td><span class="badge bg-info">Đang giao hàng</span></td>
                                        <td>34.480.000₫</td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD12347</td>
                                        <td>05/06/2023</td>
                                        <td><span class="badge bg-warning text-dark">Đang xử lý</span></td>
                                        <td>8.490.000₫</td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">Chi tiết</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-primary">Xem tất cả đơn hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
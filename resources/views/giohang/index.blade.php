@extends('layouts.app')

@section('title', 'Giỏ hàng - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Giỏ hàng của bạn</h1>
        
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0">Sản phẩm</th>
                                        <th scope="col" class="border-0 text-center">Giá</th>
                                        <th scope="col" class="border-0 text-center">Số lượng</th>
                                        <th scope="col" class="border-0 text-center">Tổng</th>
                                        <th scope="col" class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Cart Item 1 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/80" class="img-fluid rounded me-3" alt="iPhone 14 Pro">
                                                <div>
                                                    <h6 class="mb-0">iPhone 14 Pro</h6>
                                                    <small class="text-muted">Màu: Đen | Bộ nhớ: 256GB</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">25.990.000₫</td>
                                        <td class="text-center">
                                            <div class="input-group input-group-sm mx-auto" style="width: 120px;">
                                                <button class="btn btn-outline-secondary" type="button">-</button>
                                                <input type="text" class="form-control text-center" value="1">
                                                <button class="btn btn-outline-secondary" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="text-center fw-bold">25.990.000₫</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    
                                    <!-- Cart Item 2 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/80" class="img-fluid rounded me-3" alt="Tai nghe Sony WH-1000XM5">
                                                <div>
                                                    <h6 class="mb-0">Tai nghe Sony WH-1000XM5</h6>
                                                    <small class="text-muted">Màu: Đen</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">8.490.000₫</td>
                                        <td class="text-center">
                                            <div class="input-group input-group-sm mx-auto" style="width: 120px;">
                                                <button class="btn btn-outline-secondary" type="button">-</button>
                                                <input type="text" class="form-control text-center" value="1">
                                                <button class="btn btn-outline-secondary" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="text-center fw-bold">8.490.000₫</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã giảm giá">
                            <button class="btn btn-outline-primary" type="button">Áp dụng</button>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <button class="btn btn-outline-secondary me-2">Cập nhật giỏ hàng</button>
                        <a href="{{ url('/sanpham') }}" class="btn btn-primary">Tiếp tục mua sắm</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Tóm tắt đơn hàng</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span>Tạm tính</span>
                            <span>34.480.000₫</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Giảm giá</span>
                            <span>0₫</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Phí vận chuyển</span>
                            <span>Miễn phí</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3 fw-bold">
                            <span>Tổng cộng</span>
                            <span>34.480.000₫</span>
                        </div>
                        <div class="d-grid">
                            <a href="{{ url('/thanhtoan') }}" class="btn btn-primary">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Chúng tôi chấp nhận</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <img src="https://via.placeholder.com/50" alt="Visa" class="img-fluid">
                            <img src="https://via.placeholder.com/50" alt="MasterCard" class="img-fluid">
                            <img src="https://via.placeholder.com/50" alt="American Express" class="img-fluid">
                            <img src="https://via.placeholder.com/50" alt="PayPal" class="img-fluid">
                            <img src="https://via.placeholder.com/50" alt="Momo" class="img-fluid">
                            <img src="https://via.placeholder.com/50" alt="ZaloPay" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
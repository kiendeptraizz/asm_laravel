@extends('layouts.app')

@section('title', 'Thanh toán - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Thanh toán</h1>
        
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Thông tin giao hàng</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">Họ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="province" class="form-label">Tỉnh/Thành phố <span class="text-danger">*</span></label>
                                    <select class="form-select" id="province" required>
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        <option>Hà Nội</option>
                                        <option>TP. Hồ Chí Minh</option>
                                        <option>Đà Nẵng</option>
                                        <option>Hải Phòng</option>
                                        <option>Cần Thơ</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="district" class="form-label">Quận/Huyện <span class="text-danger">*</span></label>
                                    <select class="form-select" id="district" required>
                                        <option value="">Chọn quận/huyện</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="ward" class="form-label">Phường/Xã <span class="text-danger">*</span></label>
                                    <select class="form-select" id="ward" required>
                                        <option value="">Chọn phường/xã</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="note" class="form-label">Ghi chú đơn hàng (tùy chọn)</label>
                                <textarea class="form-control" id="note" rows="3" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Phương thức vận chuyển</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping1" checked>
                            <label class="form-check-label d-flex justify-content-between align-items-center" for="shipping1">
                                <div>
                                    <span class="fw-bold">Giao hàng tiêu chuẩn</span>
                                    <p class="text-muted mb-0">Nhận hàng trong 3-5 ngày</p>
                                </div>
                                <span>Miễn phí</span>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping2">
                            <label class="form-check-label d-flex justify-content-between align-items-center" for="shipping2">
                                <div>
                                    <span class="fw-bold">Giao hàng nhanh</span>
                                    <p class="text-muted mb-0">Nhận hàng trong 1-2 ngày</p>
                                </div>
                                <span>50.000₫</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping3">
                            <label class="form-check-label d-flex justify-content-between align-items-center" for="shipping3">
                                <div>
                                    <span class="fw-bold">Giao hàng hỏa tốc</span>
                                    <p class="text-muted mb-0">Nhận hàng trong ngày</p>
                                </div>
                                <span>100.000₫</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Phương thức thanh toán</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                            <label class="form-check-label" for="payment1">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="COD" class="me-2">
                                    <div>
                                        <span class="fw-bold">Thanh toán khi nhận hàng (COD)</span>
                                        <p class="text-muted mb-0">Thanh toán bằng tiền mặt khi nhận hàng</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment" id="payment2">
                            <label class="form-check-label" for="payment2">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="Banking" class="me-2">
                                    <div>
                                        <span class="fw-bold">Chuyển khoản ngân hàng</span>
                                        <p class="text-muted mb-0">Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment" id="payment3">
                            <label class="form-check-label" for="payment3">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="Momo" class="me-2">
                                    <div>
                                        <span class="fw-bold">Ví MoMo</span>
                                        <p class="text-muted mb-0">Thanh toán qua ví điện tử MoMo</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment" id="payment4">
                            <label class="form-check-label" for="payment4">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="ZaloPay" class="me-2">
                                    <div>
                                        <span class="fw-bold">ZaloPay</span>
                                        <p class="text-muted mb-0">Thanh toán qua ví điện tử ZaloPay</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="payment5">
                            <label class="form-check-label" for="payment5">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="Credit Card" class="me-2">
                                    <div>
                                        <span class="fw-bold">Thẻ tín dụng/ghi nợ</span>
                                        <p class="text-muted mb-0">Thanh toán an toàn với Visa, Mastercard, JCB</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Đơn hàng của bạn</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span>Sản phẩm</span>
                            <span>Tổng</span>
                        </div>
                        
                        <hr>
                        
                        <!-- Order Item 1 -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span>iPhone 14 Pro × 1</span>
                                <div class="text-muted small">Màu: Đen | Bộ nhớ: 256GB</div>
                            </div>
                            <span>25.990.000₫</span>
                        </div>
                        
                        <!-- Order Item 2 -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span>Tai nghe Sony WH-1000XM5 × 1</span>
                                <div class="text-muted small">Màu: Đen</div>
                            </div>
                            <span>8.490.000₫</span>
                        </div>
                        
                        <hr>
                        
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tạm tính</span>
                            <span>34.480.000₫</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Giảm giá</span>
                            <span>0₫</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Phí vận chuyển</span>
                            <span>Miễn phí</span>
                        </div>
                        
                        <hr>
                        
                        <div class="d-flex justify-content-between mb-4 fw-bold">
                            <span>Tổng cộng</span>
                            <span>34.480.000₫</span>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="terms" required>
                            <label class="form-check-label" for="terms">
                                Tôi đã đọc và đồng ý với <a href="#">điều khoản và điều kiện</a> của website
                            </label>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
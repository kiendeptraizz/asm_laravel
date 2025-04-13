@extends('layouts.app')

@section('title', 'Liên hệ - Shop Điện Tử')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5">Liên hệ với chúng tôi</h1>
        
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="mb-4">Gửi tin nhắn cho chúng tôi</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Nội dung <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Gửi tin nhắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h4 class="mb-4">Thông tin liên hệ</h4>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Địa chỉ</h5>
                                <p>123 Đường ABC, Quận 1, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <i class="fas fa-phone-alt text-primary fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Điện thoại</h5>
                                <p>+84 123 456 789</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <i class="fas fa-envelope text-primary fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Email</h5>
                                <p>info@shopdientu.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-clock text-primary fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Giờ làm việc</h5>
                                <p>Thứ Hai - Thứ Bảy: 8:00 - 21:00<br>Chủ Nhật: 9:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h4 class="mb-4">Kết nối với chúng tôi</h4>
                        <div class="d-flex gap-3 mb-4">
                            <a href="#" class="btn btn-outline-primary rounded-circle">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-info rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger rounded-circle">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-dark rounded-circle">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger rounded-circle">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4241674197956!2d106.69901937465353!3d10.77126358929391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4670702e31%3A0xa5777fb3a5bb9972!2sBitexco%20Financial%20Tower!5e0!3m2!1sen!2s!4v1687436791023!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Câu hỏi thường gặp</h4>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Thời gian giao hàng mất bao lâu?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Thời gian giao hàng phụ thuộc vào khu vực của bạn. Đối với khu vực nội thành TP.HCM và Hà Nội, thời gian giao hàng thường từ 1-2 ngày. Đối với các tỉnh thành khác, thời gian giao hàng từ 3-5 ngày.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Làm thế nào để theo dõi đơn hàng của tôi?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Bạn có thể theo dõi đơn hàng của mình bằng cách đăng nhập vào tài khoản và vào mục "Đơn hàng của tôi". Tại đây, bạn có thể xem trạng thái đơn hàng và thông tin vận chuyển. Ngoài ra, chúng tôi cũng sẽ gửi email và tin nhắn SMS cập nhật trạng thái đơn hàng cho bạn.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Chính sách đổi trả hàng như thế nào?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Chúng tôi áp dụng chính sách đổi trả trong vòng 7 ngày kể từ ngày nhận hàng. Sản phẩm đổi trả phải còn nguyên vẹn, không có dấu hiệu đã qua sử dụng và còn đầy đủ hộp, phụ kiện. Đối với sản phẩm lỗi do nhà sản xuất, chúng tôi sẽ hỗ trợ đổi mới hoặc hoàn tiền 100%.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Làm thế nào để hủy đơn hàng?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Bạn có thể hủy đơn hàng trong vòng 24 giờ sau khi đặt hàng và trước khi đơn hàng được giao cho đơn vị vận chuyển. Để hủy đơn hàng, bạn có thể đăng nhập vào tài khoản, vào mục "Đơn hàng của tôi" và chọn "Hủy đơn hàng". Hoặc bạn có thể liên hệ với chúng tôi qua hotline 1900.1234 để được hỗ trợ.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Các phương thức thanh toán được chấp nhận?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Chúng tôi chấp nhận nhiều phương thức thanh toán khác nhau bao gồm: thanh toán khi nhận hàng (COD), chuyển khoản ngân hàng, thẻ tín dụng/ghi nợ (Visa, Mastercard, JCB), và các ví điện tử như MoMo, ZaloPay, VNPay.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
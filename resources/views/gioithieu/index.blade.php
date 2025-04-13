@extends('layouts.app')

@section('title', 'Giới thiệu - Shop Điện Tử')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Về Shop Điện Tử</h1>
                    <p class="lead mb-4">Chúng tôi là đơn vị tiên phong trong lĩnh vực cung cấp các sản phẩm công nghệ chính hãng tại Việt Nam với hơn 10 năm kinh nghiệm.</p>
                    <a href="{{ url('/lienhe') }}" class="btn btn-light btn-lg">Liên hệ ngay</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Về chúng tôi" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://via.placeholder.com/600x400" alt="Câu chuyện của chúng tôi" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Câu chuyện của chúng tôi</h2>
                <p class="lead mb-4">Shop Điện Tử được thành lập vào năm 2013 với sứ mệnh mang đến những sản phẩm công nghệ chính hãng, chất lượng cao với giá cả hợp lý cho người tiêu dùng Việt Nam.</p>
                <p>Từ một cửa hàng nhỏ tại TP. Hồ Chí Minh, đến nay chúng tôi đã phát triển thành một trong những nhà bán lẻ thiết bị điện tử hàng đầu với hơn 50 cửa hàng trên toàn quốc và hệ thống thương mại điện tử phục vụ hàng triệu khách hàng mỗi năm.</p>
                <p>Chúng tôi tự hào là đối tác ủy quyền chính thức của các thương hiệu công nghệ hàng đầu thế giới như Apple, Samsung, Sony, LG, và nhiều thương hiệu khác.</p>
            </div>
        </div>
    </div>

    <!-- Our Values Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Giá trị cốt lõi</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <h4>Chất lượng</h4>
                            <p>Chúng tôi cam kết cung cấp sản phẩm chính hãng, chất lượng cao và đảm bảo quyền lợi của khách hàng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-heart fa-2x"></i>
                            </div>
                            <h4>Tận tâm</h4>
                            <p>Chúng tôi luôn đặt khách hàng làm trung tâm, lắng nghe và đáp ứng mọi nhu cầu của khách hàng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-bolt fa-2x"></i>
                            </div>
                            <h4>Đổi mới</h4>
                            <p>Chúng tôi không ngừng đổi mới, cập nhật xu hướng công nghệ mới nhất để mang đến trải nghiệm tốt nhất cho khách hàng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Team Section -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Đội ngũ lãnh đạo</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="CEO">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nguyễn Văn A</h5>
                        <p class="text-muted">Giám đốc điều hành (CEO)</p>
                        <p class="card-text">Với hơn 15 năm kinh nghiệm trong ngành công nghệ, ông A đã dẫn dắt công ty phát triển mạnh mẽ từ năm 2013.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="COO">
                    <div class="card-body text-center">
                        <h5 class="card-title">Trần Thị B</h5>
                        <p class="text-muted">Giám đốc vận hành (COO)</p>
                        <p class="card-text">Bà B có hơn 10 năm kinh nghiệm trong quản lý chuỗi cung ứng và vận hành hệ thống bán lẻ quy mô lớn.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="CTO">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lê Văn C</h5>
                        <p class="text-muted">Giám đốc công nghệ (CTO)</p>
                        <p class="card-text">Ông C là chuyên gia công nghệ với hơn 12 năm kinh nghiệm, phụ trách phát triển nền tảng thương mại điện tử của công ty.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="CMO">
                    <div class="card-body text-center">
                        <h5 class="card-title">Phạm Thị D</h5>
                        <p class="text-muted">Giám đốc marketing (CMO)</p>
                        <p class="card-text">Bà D có hơn 8 năm kinh nghiệm trong lĩnh vực marketing số và xây dựng thương hiệu cho các công ty công nghệ lớn.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achievements Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Thành tựu của chúng tôi</h2>
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h2 class="display-4 fw-bold text-primary mb-3">50+</h2>
                            <p class="mb-0">Cửa hàng trên toàn quốc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h2 class="display-4 fw-bold text-primary mb-3">500+</h2>
                            <p class="mb-0">Nhân viên tận tâm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h2 class="display-4 fw-bold text-primary mb-3">1M+</h2>
                            <p class="mb-0">Khách hàng hài lòng</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h2 class="display-4 fw-bold text-primary mb-3">10+</h2>
                            <p class="mb-0">Năm kinh nghiệm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Khách hàng nói gì về chúng tôi</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"Tôi đã mua sắm tại Shop Điện Tử nhiều lần và luôn hài lòng với chất lượng sản phẩm và dịch vụ. Nhân viên tư vấn rất nhiệt tình và chuyên nghiệp."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50x50" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h6 class="mb-0">Nguyễn Văn X</h6>
                                <small class="text-muted">Khách hàng tại TP.HCM</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-4">"Chế độ bảo hành và hậu mãi của Shop Điện Tử rất tốt. Khi sản phẩm của tôi gặp vấn đề, họ đã hỗ trợ sửa chữa nhanh chóng và chuyên nghiệp."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50x50" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h6 class="mb-0">Trần Thị Y</h6>
                                <small class="text-muted">Khách hàng tại Hà Nội</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p class="mb-4">"Tôi rất ấn tượng với tốc độ giao hàng của Shop Điện Tử. Đặt hàng buổi sáng và nhận được sản phẩm vào buổi chiều cùng ngày. Sản phẩm đúng như mô tả và giá cả hợp lý."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50x50" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h6 class="mb-0">Lê Văn Z</h6>
                                <small class="text-muted">Khách hàng tại Đà Nẵng</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Đối tác của chúng tôi</h2>
            <div class="row align-items-center">
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <img src="https://via.placeholder.com/150x80" alt="Partner" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <img src="https://via.placeholder.com/150x80" alt="Partner" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <img src="https://via.placeholder.com/150x80" alt="Partner" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <img src="https://via.placeholder.com/150x80" alt="Partner" class="img-fluid">
                </div>
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <img src="https://via.placeholder.com/150x80" alt="Partner" class="img-fluid">
                </div>
                <div class="col-md-2 col-6">
                    <img src="https://via.placeholder.com/150x80" alt="Partner" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm bg-primary text-white p-5 text-center">
                    <h2 class="mb-4">Sẵn sàng trải nghiệm dịch vụ của chúng tôi?</h2>
                    <p class="lead mb-4">Hãy ghé thăm cửa hàng gần nhất hoặc mua sắm trực tuyến ngay hôm nay để nhận nhiều ưu đãi hấp dẫn!</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ url('/sanpham') }}" class="btn btn-light btn-lg">Mua sắm ngay</a>
                        <a href="{{ url('/lienhe') }}" class="btn btn-outline-light btn-lg">Liên hệ chúng tôi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
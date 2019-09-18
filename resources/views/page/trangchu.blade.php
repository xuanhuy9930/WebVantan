@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('css')
<link rel="stylesheet" href="css/trangchu.css">
@endsection
@section('content')
	<!-- main -->
        <main>
        <!-- start slide -->
        <div class="slider">
            <img src="images/carousel1.jpg" alt="">
            <img src="images/carousel3.jpg" alt="">
        </div>
        <!-- end slider -->
        <!-- start benefits -->
        <section id="benefits-grid" class="bg hidden-xs">
            <div class="container" style="position: relative;">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="text-big">
                            <a href="#"><i class="far fa-envelope"></i></a>
                            <h6>Đề nghị báo giá</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-big new-css">
                            <a href="#" id="hover-show"><i class="fas fa-cloud-download-alt"></i></a>
                            <h6>Chọn dịch vụ</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-big">
                            <a href="#"><i class="fas fa-mobile-alt"></i></a>
                            <h6>Hotline: <b>0965 167 989</b></h6>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-md-3">
                        <div class="text-big">
                            <a href="#"><i class="fab fa-weixin"></i></a>
                            <h6>Tư vấn trực tiếp</h6>
                        </div>
                    </div>
                    <div class="list-service " style="display: none;">
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Ấn phẩm văn phòng</p>
                                <ul class="multi-column-dropdown">
                                    <li><a href="#"><i class="fas fa-star"></i><span>In card
                                                visit</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Phong
                                                Bì</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Kẹp
                                                File</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In hóa
                                                đơn</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In sách,
                                                In tạp chí</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In sổ
                                                tay, sổ bìa da</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In thiệp chúc mừng năm
                                                mới</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In tiêu đề
                                                thư</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In nhãn
                                                đĩa</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In giấy ghi
                                                chú</span></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <p>Ấn phẩm quảng cáo</p>
                                <ul class="multi-column-dropdown">
                                    <li><a href="#"><i class="fas fa-star"></i><span>In
                                                catalogue</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In túi
                                                giấy</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In tờ rơi,
                                                Flyer</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In tờ
                                                gấp, Brochure</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In
                                                poster</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In profile, hồ sơ năng
                                                lực</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In phông
                                                bạt</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In
                                                voucher</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Thẻ
                                                Tích Điểm</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In biển
                                                quảng cáo</span></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <p>Ấn phẩm khác</p>
                                <ul class="multi-column-dropdown">
                                    <li><a href="#"><i class="fas fa-star"></i><span>In kỷ yếu</span></a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Thẻ
                                                Nhựa</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Lịch
                                                Tết</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In tem
                                                bảo hành, tem vỡ</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In menu, thực
                                                đơn</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Bao Bì, Vỏ
                                                Hộp</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In tem
                                                nhãn, tem decal</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In Bao Lì
                                                Xì</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In vé xe, vé
                                                sự kiện</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>In giấy
                                                khen, bằng khen</span></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <p>Thiết kế quảng cáo</p>
                                <ul class="multi-column-dropdown">
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết
                                                kế logo, slogan</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế nhận diện thương
                                                hiệu</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế bao bì sản phẩm</span></a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế catalogue,
                                                profile</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế nhãn mác hàng
                                                hóa</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế card visit đẹp</span></a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế banner, poster</span></a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế phông bạt, biển
                                                bảng</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế túi giấy ấn
                                                tượng</span></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i><span>Thiết kế lịch độc quyền</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!-- end benefits -->

        <!-- start thu ngo -->
        <section id="thu-ngo">
            <div class="container">
                <h1>Về chúng tôi</h1>
                <p>Trẻ trung, năng động, sáng tạo và đầy nhiệt huyết là những điều chúng tôi có thể tự hào về mình. Khởi
                    nguồn từ một ước mơ, tiếp sức bởi mong muốn biến ước mơ thành hiện thực, In Hồng Đăng của chúng tôi
                    đã hình thành như thế.</p>
                <a href="images/thu-ngo(2).jpg" class="btn-thu-ngo fancybox">Thư ngỏ &gt;</a>
            </div>
        </section>
        <!-- end thu ngo -->

        <!-- start media -->
        <section id="multi-media">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="multi-title">Video giới thiệu</div>
                        <div class="video-dash"><iframe src="https://www.youtube.com/embed/vOi4OwGM3JA?autoplay=1"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
                    </div>
                    <div class="col-md-6">
                        <div class="multi-title">Hình ảnh công ty</div>
                        <div class="img-dash"><a href="#"><img src="images/anhcongty.png" alt="Hình ảnh công ty"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end media -->

        <!-- start e-about -->
        <section id="e-about" class="bg hidden-xs">
            <div class=" container" style="text-align: center">
                <div class="page-title-slider-1 heading-center-1">
                    <h1>Lý do khách hàng chọn chúng tôi</h1>
                </div>
            </div>
            <div class="container" style="background: #fff; padding: 20px 15px; border-radius: 3px;">
              <div class="row">
                <div class="e-column col-sm-4" style="height: 311px;">
                    <div data-scroll-reveal="wait 0.1s enter left" class="placeholder"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="header">
                            <h4 class="h4-color">CHẤT LƯỢNG</h4><img alt="CHẤT LƯỢNG"
                                class="img-responsive img-circle center-block"
                                src="images/thoi-gian.jpg">
                        </div>
                        <div class="content">
                            <p>Chúng tôi sử dụng nguyên liệu tốt nhất, máy móc hiện đại nhất để mang lại sản phẩm hoàn
                                hảo nhất đến tay khách hàng.</p>
                        </div>
                    </div>
                </div>
                <div class="e-column col-sm-2" style="height: 311px;">
                    <div data-scroll-reveal="wait 0.1s enter left" class="placeholder"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="header">
                            <h4 class="h4-color">THỜI GIAN</h4><img alt="THỜI GIAN"
                                class="img-responsive img-circle center-block"
                                src="images/thoi-gian.jpg">
                        </div>
                        <div class="content">
                            <p>Chúng tôi cam kết sẽ đem sản phẩm đến tay khách hàng một cách nhanh nhất và đúng hẹn nhất
                            </p>
                        </div>
                    </div>
                </div>
                <div class="e-column col-sm-2" style="height: 311px;">
                    <div data-scroll-reveal="wait 0.1s enter left" class="placeholder"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="header">
                            <h4 class="h4-color">GIÁ THÀNH</h4><img alt="GIÁ THÀNH"
                                class="img-responsive img-circle center-block"
                                src="images/thoi-gian.jpg">
                        </div>
                        <div class="content">
                            <p>Chúng tôi cam kết giá thành luôn hợp lý và ổn định cho khách hàng cho cả những đơn hàng
                                tiếp theo.</p>
                        </div>
                    </div>
                </div>
                <div class="e-column col-sm-2" style="height: 311px;">
                    <div data-scroll-reveal="wait 0.1s enter left" class="placeholder"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="header">
                            <h4 class="h4-color">KHÁCH HÀNG</h4><img alt="KHÁCH HÀNG"
                                class="img-responsive img-circle center-block"
                                src="images/thoi-gian.jpg">
                        </div>
                        <div class="content">
                            <p>Với đội ngũ tư vấn viên giàu kinh nghiệm, am hiểu về lĩnh vực in ấn. Chúng tôi sẽ tư vấn
                                cho quý khách sản phẩm phù hợp nhất với chi phí thấp nhất.</p>
                        </div>
                    </div>
                </div>
                <div class="e-column col-sm-2" style="height: 311px;">
                    <div data-scroll-reveal="wait 0.1s enter left" class="placeholder"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="header">
                            <h4 class="h4-color">KHUYẾN MÃI</h4><img alt="KHUYẾN MÃI"
                                class="img-responsive img-circle center-block"
                                src="images/thoi-gian.jpg">
                        </div>
                        <div class="content">
                            <p>Ngoài việc đem lại những sản phẩm hoàn hảo cho quý khách với giá thành hợp lý. Chúng tôi
                                còn có những khuyến mại hấp dẫn đi kèm cho từng đơn hàng quý khách đặt in</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <!-- end e-about -->

        <!-- start rule -->
        <section id="rule" class="bg">
            <div class="container" style="text-align: center">
                <div class="page-title-slider-1 heading-center-1">
                    <h1>Cam kết dịch vụ</h1>
                </div>
            </div>
            <div class="container">
                <img src="images/service.png" class="img-responsive" alt="Cam kết dịch vụ">
            </div>
        </section>
        <!-- end rule -->

        <!-- start menu service -->
        <section id="menu-service">
            <div class="container">
                <div class="home-header-top">
                    <div class="ld_container row">
                        <div class="slogan col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <h3 class="slogan-small">CÔNG TY CP IN HỒNG ĐĂNG</h3>
                            <h1 class="slogan-large">THIẾT KẾ THƯƠNG HIỆU DOANH NGHIỆP MỚI</h1>
                        </div>
                        <div class="banner-home-header-top col-sm-6 col-md-6 col-lg-6">
                            <a href="/"><img alt="thiet-ke-logo" class="img-fluid" title=""
                                    src="images/banner-mid.png"></a>
                        </div>
                    </div>
                </div>
                <div class="menu-header clear ">
                    <div class="menu-header-content row" id="menu-menu-header">

                        <div class=" col-xs-12 col-md-3 col-lg-3">
                            <a href="">
                                <p>Ấn phẩm văn phòng</p>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">In Card visit</a></li>
                                <li><a href="#">In Phong bì</a></li>
                                <li><a href="#">In Kẹp file</a></li>
                                <li><a href="#">In Hóa đơn</a></li>
                                <li><a href="#">In Sách, In Tạp chí</a></li>
                                <li><a href="#">In Sổ tay, Sổ bìa da</a></li>
                                <li><a href="#">In Thiệp chúc mừng năm mới</a></li>
                                <li><a href="">In Tiêu đề thư</a></li>
                                <li><a href="">In Nhãn đĩa</a></li>
                                <li><a href="">In Giấy ghi chú</a></li>
                            </ul>
                        </div>

                        <div class=" col-xs-12  col-md-3 col-lg-3">
                            <a href="">
                                <p>Ấn phẩm quảng cáo</p>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">In Catalogue</a></li>
                                <li><a href="">In Túi giấy</a></li>
                                <li><a href="">In Tờ rơi, Flyer</a></li>
                                <li><a href="">In Tờ gấp, Brochure</a></li>
                                <li><a href="">In Poster</a></li>
                                <li><a href="">In Profile, Hồ sơ năng lực</a></li>
                                <li><a href="">In Phông bạt</a></li>
                                <li><a href="">In Voucher</a></li>
                                <li><a href="">In Thẻ tích điểm</a></li>
                                <li><a href="">In Biển quảng cáo</a></li>
                            </ul>
                        </div>

                        <div class=" col-xs-12 col-md-3 col-lg-3">
                            <a href="">
                                <p>Ấn phẩm khác</p>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">In Kỷ yếu</a></li>
                                <li><a href="">In Thẻ nhựa</a></li>
                                <li><a href="">In Lịch Tết</a></li>
                                <li><a href="">In Tem bảo hành, Tem vỡ</a></li>
                                <li><a href="">In Menu, Thực đơn</a></li>
                                <li><a href="">In Bao bì, Vỏ hộp</a></li>
                                <li><a href="">In Tem nhãn, Tem decal</a></li>
                                <li><a href="">In Bao lì xì</a></li>
                                <li><a href="">In Vé xe, Vé sự kiện</a></li>
                                <li><a href="">In Giấy khen, Bằng khen</a></li>
                            </ul>
                        </div>

                        <div class=" col-xs-12 col-md-3 col-lg-3">
                            <a href="">
                                <p>Thiết kế quảng cáo</p>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">Thiết kế logo, slogan</a></li>
                                <li><a href="">Thiết kế nhận diện thương hiệu</a></li>
                                <li><a href="">Thiết kế bao bì sản phẩm</a></li>
                                <li><a href="">Thiết kế catalogue, profile</a></li>
                                <li><a href="">Thiết kế nhãn mác hàng hóa</a></li>
                                <li><a href="">Thiết kế card visit đẹp</a></li>
                                <li><a href="">Thiết kế banner, poster</a></li>
                                <li><a href="">Thiết kế phông bạt, biển bảng</a></li>
                                <li><a href="">Thiết kế túi giấy ấn tượng</a></li>
                                <li><a href="">Thiết kế lịch độc quyền</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end menu service -->

        <!-- start product -->
        <section id="products" class="bg">
            <div class="container" style="text-align: center;">
                <div class="page-title-slider-1 heading-center-1">
                    <h1>Dịch vụ tiêu biểu</h1>
                </div>
            </div>
            <div class="container">
                <div class="list-product row" id="hs_container">
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="">In catalogue</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-khac/in-ky-yeu">In kỷ yếu</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-van-phong/in-phong-bi">In Phong Bì</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-quang-cao/in-tui-giay">In túi giấy</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-khac/in-the-nhua">In Thẻ Nhựa</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-khac/in-lich-tet">In Lịch Tết</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-quang-cao/in-to-gap-brochure">In tờ
                                gấp, Brochure</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-van-phong/in-kep-file">In Kẹp File</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-khac/in-tem-bao-hanh-tem-vo">In tem bảo
                                hành, tem vỡ</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-quang-cao/in-profile-ho-so-nang-luc">In
                                profile, hồ sơ năng lực</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-khac/in-bao-bi-vo-hop">In Bao Bì, Vỏ
                                Hộp</a></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 item-product brand-photo clear-margin ">
                        <div class="g-image hs_container">
                            <a href="">
                                <img class="img-responsive" src="images/mau-to-gap-brochure-dep-01.jpg"
                                    alt="In catalogue dep 02">
                            </a>
                        </div>
                        <div class="g-title"><a class="title-pro" href="/an-pham-khac/in-tem-nhan-tem-decal">In tem
                                nhãn, tem decal</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product -->


        <!-- start custom -->
        <section id="custom">
            <div class="container" style="text-align: center;">
                <div class="page-title-slider-1 heading-center-1">
                    <h1>Khách hàng quen thuộc</h1>
                </div>
            </div>
            <div class="container">
                <div class="text-kh">
                    <img src="images/doi-tac-fpt.jpg" alt="">
                    <img src="images/doi-tac-petrolimex.jpg" alt="">
                    <img src="images/doi-tac-viettel.jpg" alt="">
                    <img src="images/doi-tac-fpt.jpg" alt="">
                    <img src="images/doi-tac-petrolimex.jpg" alt="">
                    <img src="images/doi-tac-viettel.jpg" alt="">
                    <img src="images/doi-tac-fpt.jpg" alt="">
                    <img src="images/doi-tac-petrolimex.jpg" alt="">
                    <img src="images/doi-tac-viettel.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- end custom -->

        <!-- start contact -->
        <section id="contact">
            <div class="supports">
                <div class="container">
                    <h3 class="s-title">Tư vấn viên online</h3>
                    <div class="s-list row">
                        <div class="col-md-3">
                            <div class="s-item">
                                <div class="s-img"><a href=""><img src="images/contact1.png" alt="Trần Thương"
                                            class="img-responsive img-circle"></a></div>
                                <div class="s-info"><a href="" class="s-name">Trần Thương</a>
                                    <p class="s-phone"><i class="fas fa-phone-square-alt"></i>0961 587 989</p>
                                    <a href=""><i class="fab fa-skype"
                                            style="color: #0AA4AB"></i>&nbsp;&nbsp;hongdangjsc</a>
                                    <a href="" class="s-email"><i
                                            class="fas fa-envelope-square"></i>baogia@inhongdang.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="s-item">
                                <div class="s-img"><a href="">
                                        <img src="images/contact1.png" alt="Vũ Thảo"
                                            class="img-responsive img-circle"></a></div>
                                <div class="s-info"><a href="" class="s-name">Vũ Thảo</a>
                                    <p class="s-phone"><i class="fas fa-phone-square-alt"></i>0961 588 478</p>
                                    <a href=""><i class="fab fa-skype"
                                            style="color: #0AA4AB"></i>&nbsp;&nbsp;hongdangjsc</a>
                                    <a href="" class="s-email"><i
                                            class="fas fa-envelope-square"></i>baogia@inhongdang.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="s-item">
                                <div class="s-img"><a href="">
                                        <img src="images/contact1.png" alt="Vũ Thảo"
                                            class="img-responsive img-circle"></a></div>
                                <div class="s-info"><a href="" class="s-name">Vũ Thảo</a>
                                    <p class="s-phone"><i class="fas fa-phone-square-alt"></i>0961 588 478</p>
                                    <a href=""><i class="fab fa-skype"
                                            style="color: #0AA4AB"></i>&nbsp;&nbsp;hongdangjsc</a>
                                    <a href="" class="s-email"><i
                                            class="fas fa-envelope-square"></i>baogia@inhongdang.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="s-item">
                                <div class="s-img"><a href="">
                                        <img src="images/contact1.png" alt="Vũ Thảo"
                                            class="img-responsive img-circle"></a></div>
                                <div class="s-info"><a href="" class="s-name">Vũ Thảo</a>
                                    <p class="s-phone"><i class="fas fa-phone-square-alt"></i>0961 588 478</p>
                                    <a href=""><i class="fab fa-skype"
                                            style="color: #0AA4AB"></i></i>&nbsp;&nbsp;hongdangjsc</a>
                                    <a href="" class="s-email"><i
                                            class="fas fa-envelope-square"></i>baogia@inhongdang.vn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h3 class="s-title">Nhân viên kinh doanh</h3>
                    <div class="s-list"></div>
                </div>
            </div>
        </section>
        <!-- end contact -->

        <!-- start question -->
        <section id="question" class="bg hidden-xs">
            <div class="container" style="text-align: center">
                <div class="page-title-slider-1 heading-center-1">
                    <h1>Những điều bạn cần biết</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6  brand-photo module-news-event-home"><a href=""
                            title="Hướng dẫn đặt hàng"><img class="img-responsive" alt="Hướng dẫn đặt hàng"
                                src="images/huong-dan-dat-hang.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-md-6  brand-photo module-news-event-home"><a href=""
                            title="Hướng dẫn thanh toán"><img class="img-responsive" alt="Hướng dẫn thanh toán"
                                src="images/huong-dan-thanh-toan.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-md-6  brand-photo module-news-event-home"><a href=""
                            title="Hệ thống kho xưởng"><img class="img-responsive" alt="Hệ thống kho xưởng"
                                src="images/he-thong-kho-xuong.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-md-6  brand-photo module-news-event-home"><a href=""
                            title="Chính sách khách hàng"><img class="img-responsive" alt="Chính sách khách hàng"
                                src="images/chinh-sach-khach-hang.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-md-6  brand-photo module-news-event-home"><a href=""
                            title="Kỹ thuật ngành in"><img class="img-responsive" alt="Kỹ thuật ngành in"
                                src="images/ky-thuat-nganh-in.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-md-6  brand-photo module-news-event-home"><a href=""
                            title="Câu hỏi thường gặp"><img class="img-responsive" alt="Câu hỏi thường gặp"
                                src="images/cau-hoi-thuong-gap.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 20px; padding: 0 25px;"><a href="/"><img class="img-fluid"
                        src="images/banner.jpg" alt="sức mạnh vượt trội"></a></div>
        </section>
        <!-- end question -->

        <!-- start new -->
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 clear-margin">
                        <div style="width: 100%;" class="dt-fancy-separator title-left">
                            <div class="dt-fancy-title"><span class="separator-holder separator-left"></span>Tin in
                                ấn<span class="separator-holder separator-right"></span></div>
                        </div>
                        <div class="news-list">
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin">
                                            <a href="">
                                                <img alt="Kỹ Thuật Ép Kim  Điểm Nhấn Cao Cấp Catalogue"
                                                    class="img-fluid" src="images/in-ky-yeu-cong-ty.jpg">
                                            </a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin">
                                            <a href="">Kỹ Thuật Ép Kim Điểm Nhấn Cao Cấp Catalogue</a><br>
                                            <time class="text-secondary">06/07/2019</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="In Catalogue Chất Lượng – Nhanh nhất tại Hà Nội"
                                                    class="img-fluid" src="images/in-ky-yeu-cong-ty.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin"><a href="">In
                                                Catalogue Chất Lượng – Nhanh nhất tại Hà Nội</a><br><time
                                                class="text-secondary">04/07/2019</time></div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Chụp kỷ yếu đẹp ở đâu Hà Nội" class="img-fluid"
                                                    src="images/in-ky-yeu-cong-ty.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin"><a href="">Chụp kỷ yếu
                                                đẹp ở đâu Hà
                                                Nội</a><br><time class="text-secondary">09/05/2019</time></div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Xưởng in offset giá rẻ tại Hà Nội" class="img-fluid"
                                                    src="images/in-ky-yeu-cong-ty.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin"><a href="">Xưởng in
                                                offset giá rẻ
                                                tại Hà Nội</a><br><time class="text-secondary">16/11/2017</time></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 clear-margin">
                        <div style="width: 100%;" class="dt-fancy-separator title-left">
                            <div class="dt-fancy-title"><span class="separator-holder separator-left"></span>Tin quảng
                                cáo<span class="separator-holder separator-right"></span></div>
                        </div>
                        <div class="news-list">
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Công nghệ nào in ấn tốt nhất hiện nay" class="img-fluid"
                                                    src="images/xuong-in-offset-gia-re-tai-ha-noi123.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin">
                                            <a href="">Công nghệ nào in
                                                ấn tốt nhất hiện nay</a><br><time
                                                class="text-secondary">03/07/2019</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin">
                                            <a href=""><img alt="In thẻ nhân viên tại Hồng Đăng sẽ có những ưu đãi gì"
                                                    class="img-fluid"
                                                    src="images/xuong-in-offset-gia-re-tai-ha-noi123.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin">
                                            <a href="">In
                                                thẻ nhân viên tại Hồng Đăng sẽ có những ưu đãi gì</a><br><time
                                                class="text-secondary">20/11/2017</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Công ty in ấn giá rẻ, uy tín tại Hà Nội" class="img-fluid"
                                                    src="images/xuong-in-offset-gia-re-tai-ha-noi123.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin"><a href="">Công ty in
                                                ấn giá
                                                rẻ, uy tín tại Hà Nội</a><br><time
                                                class="text-secondary">20/11/2017</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Xưởng in offset giá rẻ tại Hà Nội" class="img-fluid"
                                                    src="images/xuong-in-offset-gia-re-tai-ha-noi123.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin"><a href="">Xưởng in
                                                offset giá rẻ
                                                tại Hà Nội</a><br><time class="text-secondary">16/11/2017</time></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 clear-margin">
                        <div style="width: 100%;" class="dt-fancy-separator title-left">
                            <div class="dt-fancy-title"><span class="separator-holder separator-left"></span>Tin khuyến
                                mãi<span class="separator-holder separator-right"></span></div>
                        </div>
                        <div class="news-list">
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Chương trình khuyến mãi lớn - Tri ân khách hàng tháng 9"
                                                    class="img-fluid" src="images/banner-the-nhua-12.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin">
                                            <a href="">Chương
                                                trình khuyến mãi lớn - Tri ân khách hàng tháng 9</a><br><time
                                                class="text-secondary">17/05/2018</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="TRI ÂN KHÁCH HÀNG MIỄN PHÍ 100% PHÍ DỊCH VỤ THIẾT KẾ"
                                                    class="img-fluid" src="images/banner-the-nhua-12.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin">
                                            <a href="">TRI
                                                ÂN KHÁCH HÀNG MIỄN PHÍ 100% PHÍ DỊCH VỤ THIẾT KẾ</a><br><time
                                                class="text-secondary">19/10/2017</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="borders">
                                <article>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 clear-margin"><a href=""><img
                                                    alt="Tri ân khách hàng giảm giá dịch vụ in thẻ nhựa"
                                                    class="img-fluid" src="images/banner-the-nhua-12.jpg"></a>
                                        </div>
                                        <div class="post-content col-xs-9 col-md-9 clear-margin">
                                            <a href="">Tri ân khách hàng giảm giá dịch vụ in thẻ nhựa</a><br>
                                            <time class="text-secondary">16/05/2017</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end new -->

        <div id="IntroMenu" style="right: 25px;">
            <a href="#"><span class="icon" title="Trang chủ"><i class="fas fa-home"></i></span></a>
            <a href="#thu-ngo"><span class="icon" title="Về chúng tôi"><i class="fas fa-info"></i></span></a>
            <a href="#menu-service"><span class="icon" title="Dịch vụ của chúng tôi"><i
                        class="fas fa-cogs"></i></span></a>
            <a href="#question"><span class="icon" title="Những điều bạn cần biết"><i
                        class="fas fa-tags"></i></span></a>
            <a href="#footer"><span class="icon" title="Thông tin liên hệ"><i
                        class="fas fa-map-marker-alt"></i></span></a>
        </div>
    </main>

    <!-- back to top -->
    <div class="back-to-top"><i class="fas fa-arrow-up" aria-hidden="true"></i></div>
@endsection
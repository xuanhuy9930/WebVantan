@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('css')
<link rel="stylesheet" href="css/lienhe.css">
@endsection
@section('content')
	<div class="wpb_map_wraper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8857.432683342697!2d105.77039925314543!3d21.029016716807146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe78cbe6d79b62959!2zQ8O0bmcgdHkgaW4gSOG7k25nIMSQxINuZw!5e0!3m2!1svi!2s!4v1468309811046" width="600" height="400" frameborder="0" style="border:0" ></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div style="width: 100%; margin-bottom: 15px;" class="dt-fancy-separator title-left">
                            <div class="dt-fancy-title">
                                <span class="separator-holder separator-left"></span>Thông tin liên hệ<span class="separator-holder separator-right"></span>
                            </div>
                        </div>
                        <div class="wpb_wrapper"><p>
                        
                            <strong>CÔNG TY CỔ PHẦN IN HỒNG ĐĂNG</strong></p><p><i style="color: #0AA4AB;" class="fas fa-map-marker-alt"></i>&nbsp; Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội (Đối diện cổng trường THCS Đoàn Thị Điểm )
                                <br>
                                <i style="color: #f35b5b;" class="fas fa-phone"></i>&nbsp; 0965 167 989<br>
                                <i style="color: #0AA4AB;" class="fas fa-phone"></i>&nbsp; (024) 22 655 666 - (024) 22 655 999<br>
                                <i style="color: #0AA4AB;" class="far fa-envelope"></i>
                                &nbsp;
                            
                                <a href="mailto:baogia@inhongdang.vn">baogia@inhongdang.vn</a>
                                <br>
                                <i style="color: #0AA4AB;" class="fab fa-skype"></i>
                                &nbsp;&nbsp;
                                <a href="skype:hongdangjsc?chat">hongdangjsc</a></p>
                                <p><strong>XƯỞNG SẢN XUẤT</strong></p>
                                <p>
                                    <i style="color: #0AA4AB;" class="fas fa-map-marker-alt"></i>&nbsp; Kho Xưởng Kinh Tây 5, Mỹ Đình, Hà Nội<br> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="width: 100%; margin-bottom: 15px;" class="dt-fancy-separator title-left">
                            <div class="dt-fancy-title">
                                <span class="separator-holder separator-left"></span>Gửi liên hệ<span class="separator-holder separator-right"></span>
                            </div>
                            </div>
                            <form  name="aspnetForm" >
                                <div class="form-group">
                                    <div class="col-md-12 inputGroupContainer clear-padding">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fas fa-user"></i></span>
                                                <input name="ctl00$contents$txtName" type="text" id="ctl00_contents_txtName" class="form-control" placeholder="Họ và Tên *">
                                            </div>
                                            </div>
                                        </div>
                                <div class="form-group">
                                                    <div class="col-md-12 inputGroupContainer clear-padding">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fas fa-phone"></i></span>
                                                                <input name="ctl00$contents$txtPhone" type="text" id="ctl00_contents_txtPhone" class="form-control" placeholder="Số điện thoại*">
                                                            </div>
                                                            </div>
                                                        </div>
                                <div class="form-group">
                                                            <div class="col-md-12 inputGroupContainer clear-padding">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="far fa-envelope"></i></span>
                                                                        <input name="ctl00$contents$txtEmail" type="text" id="ctl00_contents_txtEmail" class="form-control" placeholder="Địa chỉ email *"></div>
                                                                    </div>
                                                                </div>
                                <div class="form-group">
                                                                    <div class="col-md-12 inputGroupContainer clear-padding">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
                                                                            <input name="ctl00$contents$txtAdd" type="text" id="ctl00_contents_txtAdd" class="form-control" placeholder="Tiêu đề"></div>
                                                                        </div>
                                                                    </div>
                                <div class="form-group">
                                                                        <div class="col-md-12 inputGroupContainer clear-padding">
                                                                            <textarea name="ctl00$contents$txtGhichu" rows="2" cols="20" id="ctl00_contents_txtGhichu" class="form-control" placeholder="Quý khách vui lòng nhập nội dung liên hệ chi tiết"></textarea>
                                                                        </div>
                                                                    </div>
                                <div class="form-group">
                                                                        <div class="col-md-3 fl  clear-padding">
                                                                            <input type="submit" name="ctl00$contents$btnSubmit" value="Gửi đi" onclick="return validate();" id="ctl00_contents_btnSubmit" class="btn btn-primary">
                                                                        </div>
                                                                    </div>
    
                                            </div>
                                        
                            </form>
                                    <div class="col-md-4">
                        <div style="width: 100%; margin-bottom: 15px;" class="dt-fancy-separator title-left">
                            <div class="dt-fancy-title"><span class="separator-holder separator-left">
                            </span>Hỗ trợ trực tuyến
                                <span class="separator-holder separator-right"></span>
                            </div>
                        </div>
                        <div class="tuvan-baogia" style="border:none;">
                            <ul>
                                <li>
                                    <img src="https://inhongdang.com.vn/images/2018-07-20-08-45-09tran-thuong.jpg" alt="Trần Thương">
                                    <p class="name">Trần Thương</p>
                                    <p class="phonex">
                                        <i class="fas fa-phone" style="color: #f35b5b"></i>&nbsp;0961 587 989</p>
                                    <p class="other">
                                        <i class="far fa-envelope" style="color: #0AA4AB"></i>&nbsp;baogia@inhongdang.vn</p>
                                        <p class="other"><i class="fab fa-skype" style="color: #0AA4AB"></i>&nbsp;hongdangjsc</p></li>
                                        <li>
                                    <img src="https://inhongdang.com.vn/images/2018-07-20-08-45-09tran-thuong.jpg" alt="Trần Thương">
                                    <p class="name">Trần Thương</p>
                                    <p class="phonex">
                                        <i class="fas fa-phone" style="color: #f35b5b"></i>&nbsp;0961 587 989</p>
                                    <p class="other">
                                        <i class="far fa-envelope" style="color: #0AA4AB"></i>&nbsp;baogia@inhongdang.vn</p>
                                        <p class="other"><i class="fab fa-skype" style="color: #0AA4AB"></i>&nbsp;hongdangjsc</p></li>
                                                         <li>
                                        <img src="https://inhongdang.com.vn/images/2018-07-20-08-45-09tran-thuong.jpg" alt="Trần Thương">
                                        <p class="name">Trần Thương</p>
                                        <p class="phonex">
                                            <i class="fas fa-phone" style="color: #f35b5b"></i>&nbsp;0961 587 989</p>
                                        <p class="other">
                                            <i class="far fa-envelope" style="color: #0AA4AB"></i>&nbsp;baogia@inhongdang.vn</p>
                                            <p class="other"><i class="fab fa-skype" style="color: #0AA4AB"></i>&nbsp;hongdangjsc</p></li>
                                                                     <li>
                                    <img src="https://inhongdang.com.vn/images/2018-07-20-08-45-09tran-thuong.jpg" alt="Trần Thương">
                                    <p class="name">Trần Thương</p>
                                    <p class="phonex">
                                        <i class="fas fa-phone" style="color: #f35b5b"></i>&nbsp;0961 587 989</p>
                                    <p class="other">
                                        <i class="far fa-envelope" style="color: #0AA4AB"></i>&nbsp;baogia@inhongdang.vn</p>
                                        <p class="other"><i class="fab fa-skype" style="color: #0AA4AB"></i>&nbsp;hongdangjsc</p></li>
                                                                                </ul>
                                                                                </div>
                    </div>
                    </div>
    
                </div>
        </div>
    </div>
    <!-- back to top -->
    <div class="back-to-top"><i class="fas fa-arrow-up" aria-hidden="true"></i></div>
@endsection
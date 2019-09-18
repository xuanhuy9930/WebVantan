@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('css')
<link rel="stylesheet" href="css/huongdan.css">
@endsection
@section('content')
	<div id="main">
          <div class="container">
              <div class="row">
                  <img src="https://inhongdang.com.vn/images/banner-support.jpg" alt="">
                  <div id="home">
                    <ul>
                      <li><a href="trangchu.html"><span><i class="fas fa-home"></i> Home</span></a></li>
                    </ul>
                  </div>
                  <div class="col-md-9 help-motal" id="huong-dan-dat-hang" style="background: #fff">
                    <p class="help-title">HƯỚNG DẪN ĐẶT HÀNG</p>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseOne">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                          </a>
                          </div>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseTwo">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                            </a>
                          </div>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseThree">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                            </a>
                          </div>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 hidden-xs">
                      <div class="fix-scroll">
                        <h4>trung tâm trợ giúp</h4>
                        <div class="menu-right">
                          <ul>
                            <li><a href="#huong-dan-dat-hang"><i class="far fa-plus-square"></i> &nbsp;Hướng dẫn đặt hàng</a></li>
                            <li><a href="#huong-dan-thanh-toan"><i class="far fa-plus-square"></i> &nbsp;Hướng dẫn thanh toán</a></li>
                            <li><a href="#huong-dan-giao-hang"><i class="far fa-plus-square"></i> &nbsp;Hướng dẫn giao hàng</a></li>
                            <li><a href="#huong-dan-dat-hang"><i class="far fa-plus-square"></i> &nbsp;Tài liệu thiết kế</a></li>
                            <li><a href=""><i class="far fa-plus-square"></i> &nbsp;Tài liệu tham khảo</a></li>
                            <li><a href=""><i class="far fa-plus-square"></i> &nbsp;Quy định chung</a></li>
                            <li><a href=""><i class="far fa-plus-square"></i> &nbsp;Bạn cần biết</a></li>
                          </ul>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-9 help-motal" id="huong-dan-thanh-toan" style="background: #fff">
                    <p class="help-title">HƯỚNG DẪN THANH TOÁN</p>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseFour">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                          </a>
                          </div>
                        </div>
                        <div id="collapseFour" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseFive">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                            </a>
                          </div>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseSix">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                            </a>
                          </div>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-9 help-motal" id="huong-dan-giao-hang" style="background: #fff">
                    <p class="help-title">HƯỚNG DẪN GIAO HÀNG</p>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseSeven">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                          </a>
                          </div>
                        </div>
                        <div id="collapseSeven" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseEight">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                            </a>
                          </div>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <div class="faq-q">Q</div>
                          <div class="faq-card">
                            <a class="card-link faq-title" data-toggle="collapse" href="#collapseNine">
                              Đặt Hàng Trực Tiếp <i class="fas fa-angle-double-down" style="color: red"></i>
                            </a>
                          </div>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Quý khách vui lòng mang theo file hoặc mẫu thiết kế đến văn phòng giao dịch của <span style="color:#ce2851"></span></p>
                            <p>Địa chỉ văn phòng: &nbsp; <span style="color:#008080"><strong>Số 1 - B8 Khu đô thị Mỹ Đình 1 - Q. Nam Từ Liêm - Hà Nội</strong></span></p>
                            <p>Giờ làm việc:   Sáng:&nbsp; 8h00 – 12h00  &nbsp;/&nbsp; Chiều:&nbsp; 13h30 – 17h30&nbsp;</p>
                            <p>Điện thoại: &nbsp;<strong>(024) 22 655 666</strong> / Hotline: &nbsp;<strong>0965 167 989</strong></p>
                            <p>Email:&nbsp; baogia@inhongdang.vn</p>
                            <p>Website: <a href=""><span style="color:#3366ff">www.inhongdang.com.vn</span></a></p>
                            <p>Bản đồ đường đi</p>
                            <p>&nbsp;</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  
              </div>
          </div>
      </div>
    <!-- footer -->
 <!-- back to top -->
 <div class="back-to-top"><i class="fas fa-arrow-up" aria-hidden="true"></i></div>
@endsection
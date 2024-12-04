@extends('layouts.appfront')

@section('content')
    <div class="container">
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                <div class="post-content-body" style="overflow: hidden" itemprop="articleBody">
                    <h1 style="margin-left: 10px; margin-top: 5px">Dịch vụ chụp ảnh</h1>
                    <h6 style="margin-left: 10px;margin-top:10px">Ngày đăng: 20/08/2022</h6>
                    <h3 style="margin-left: 10px;margin-top: 20px">Tổng quan về dịch vụ</h3>
                    <img style="margin-top: 10px" width="750" height="450" src={{asset('img/chupanhh.jpg')}}> 
                    <p><strong>Dịt Dàng</strong> có một studio chụp ảnh chuyên nghiệp, với dàn trang thiết bị hiện đại, đội ngũ làm việc chuyên nghiệp dành cho những khách hàng có nhu cầu muốn có cho mình một bộ ảnh thật đẹp và mang dấu ấn cá nhân.</p>
                    <p>Chúng tôi sở hữu đội photographer chuyên nghiệp, được đào tạo, làm việc nhanh chóng, hiệu quả và biết giúp đỡ cho khách hàng có bộ ảnh ưng ý nhất.   </p>
                    <h3 style="margin-left: 10px;"> Bảng giá dịch vụ</h3>
                    <p><strong>Dịt Dàng cam kết</strong> cung cấp dịch vụ với giá cả tốt nhất!</p>
                    <p>Gói chụp ảnh chọn bộ:<strong> 2.990.000 VNĐ</strong></p>
                    <d>Chú ý: Giá trên đã bao gồm cả trang phục, makeup và cả chi phí chụp hình</d>
                    <p style="margin-top: -20px">Gói chỉ có chụp hình:<strong> 150.000 - 300.000 VNĐ</strong></p>
                    <p><strong>Mọi thông tin đặt lịch vui lòng liên hệ qua:</strong></p>
                    <div class="col">
                        <div  class="col-sm-6">
                            <p>Số điện thoại: 0934.888.888</p>
                            <p style="margin-top: -20px">Trực tiếp: Số 136, Đường Lê Văn Sỹ,Phường 10, Quận Phú Nhuận, Tp.Hồ Chí Minh</p>
                        </div>
                        <div class="col-sm-6 ">
                            <p>Nhắn tin qua</p>
                            <a style="margin-top: 10px" href="https://www.facebook.com/profile.php?id=100050533839593"><i class="fa fa-facebook fa-3x"></i></a>
                            <a href=""><i style="margin-left: 30px" class="fa fa-instagram fa-3x"></i></a>
                            <br>
                        </div>
                    </div>
                    <div style="margin-top: 150px"><h3 style="margin-left: 10px;">Hình ảnh khách hàng đã sử dụng dịch vụ</h3></div>
                    <div  class="col-sm-6">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/chupanh1.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/chupanh2.jpg')}}> 
                    </div>
                    <div  class="col-sm-6">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/chupanh3.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/chupanh4.jpg')}}> 
                    </div>
                    <img style="margin-top: 20px" width="750" height="500" src={{asset('img/chupanh5.jpg')}} >
                    <div class="col-sm-6">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/chupanh6.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/chupanh7.jpg')}}> 
                    </div> 
                </div>
            </div>
            <div class="col-sm-4">    
                <div style="" class="col-md-12">
                    <div class="sidebar-box search-form-wrap">
                        <form action="/" class="search-form">
                          <div class="form-group">
                            <span style="right: 20px; top: 1.5%; position: absolute" class="icon fa fa-search"></span>
                            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Tìm kiếm từ khóa...">
                          </div>
                        </form>
                    </div>
                    <div style="margin-top: 50px" class="sidebar-box">
                        <h3>Dịch vụ khác</h3>
                        <hr width="100%" noshade="noshade"/>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="/makeup">
                                        <div class="text">
                                            <img class="img-responsive" src={{asset('img/makebia.png')}} alt="">
                                            <h4>Dịch vụ trang điểm</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">ngày đăng &nbsp;:&nbsp;19/06/2022  </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/giat">
                                        <div class="text">
                                            <img class="img-responsive" src={{asset('img/giat.png')}} alt="">
                                            <h4>Dịch vụ giặt, dưỡng</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">ngày đăng &nbsp;:&nbsp;28/12/2022  </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>    
            </div>      
        </div>
    
        <!-- end perfect -->
       
@endsection
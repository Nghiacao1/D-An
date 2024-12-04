@extends('layouts.appfront')

@section('content')
    <div class="container">
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                <div class="post-content-body" style="overflow: hidden" itemprop="articleBody">
                    <h1 style="margin-left: 10px; margin-top: 5px">Dịch vụ trang điểm</h1>
                    <h6 style="margin-left: 10px;margin-top:10px">Ngày đăng: 19/06/2022</h6>
                    <h3 style="margin-left: 10px;margin-top: 20px">Tổng quan về dịch vụ</h3>
                    <img style="margin-top: 10px" width="750" height="450" src={{asset('img/makeup.jpg')}}> 
                    <p><strong>Dịt Dàng</strong> là một địa điểm trang điểm uy tín hàng đầu tại thành phố Hồ Chí Minh, cung cấp đa dạng các dịch vụ trang điểm cho các dịp khác nhau như dự tiệc, cô dâu, sự kiện, phim ảnh nghệ thuật và đặc biệt là các sự kiện Cosplay.</p>
                    <p>Với đội ngũ makeup artist có nhiều kinh nghiệm và tay nghề cao chúng tôi cam kết sẽ mang lại sự hài lòng cho khách hàng của mình.</p>
                    <h3 style="margin-left: 10px;"> Bảng giá dịch vụ</h3>
                    <p><strong>Dịt Dàng cam kết</strong> cung cấp dịch vụ với giá cả tốt nhất!</p>
                    <p>Giá makeup cơ bản:<strong> 350.000 VNĐ</strong></p>
                    <p style="margin-top: -20px">Giá makeup nâng cao:<strong> 500.000 - 1.000.000 VNĐ</strong></p>
                    <d>Chú ý: Liên hệ để biết giá chính xác</d>
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
                        <img style="margin-top: 10px" width="100%" height="550" src={{asset('img/make.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="550" src={{asset('img/make2.jpg')}}> 
                    </div>
                    <img style="margin-top: 20px" width="750" height="500" src={{asset('img/make6.jpg')}} >
                    <div class="col-sm-6">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/make3.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/make4.jpg')}}> 
                    </div> 
                    <div class="col-sm-6">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/make5.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/make7.jpg')}}> 
                    </div> 
                    <div class="col-sm-6">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/make8.jpg')}}> 
                    </div>
                    <div class="col-sm-6 ">
                        <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/make9.jpg')}}> 
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
                                    <a href="/chupanh">
                                        <div class="text">
                                            <img class="img-responsive" src={{asset('img/chupanh.jpg')}} alt="">
                                            <h4>Dịch vụ chụp ảnh</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">ngày đăng &nbsp;:&nbsp;20/08/2022  </span>
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
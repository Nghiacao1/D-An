@extends('layouts.appfront')

@section('content')
    <div class="banner">
        <div class="box-right">
        </div>
        <div class="to-bottom">
            <a href="">
                <img src={{asset('/img/to_bottom.png')}} alt="">
            </a>
        </div>
    </div>
    <section class="services" class="page-section colord">
        <div class="container">
        <div style="margin-top: 20px" class="row"> 
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"> <i class="circle"><img src="images/a1.jpg" alt="" /></i>
                <i class="fa fa-mobile fa-5x" aria-hidden="true">    
                </i>
            <h3>Modern</h3>
            <p>Quản lý bằng ứng dụng điện thoại thông qua Bluetooth 4.0</p>
            </div></div>
            <!-- end: --> 
            
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/a2.jpg" alt="" /></i>
                <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
            <h3>Convenient</h3>
            <p>Cấp mã PIN mở khóa từ xa theo thời gian.</p>
            </div></div>
            <!-- end: --> 
            
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/a3.jpg" alt="" /></i>
                <i class="fa fa-shield fa-5x" aria-hidden="true"></i>
            <h3>Security</h3>
            <p>Tự động khoá theo thời gian định sẵn, ngừng hoạt động sau 5 lần nhập sai mật khẩu.</p>
            </div></div>
            <!-- end: --> 
            
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/a4.jpg" alt="" /></i>
                <i class="fa fa-tasks fa-5x" aria-hidden="true"></i>
            <h3>Multifunction</h3>
            <p>Mở khoá ra vào và hỗ trợ vân, thẻ từ,....</p>
            </div></div>
            <!-- end:--> 
        </div>
        </div>
        <!--/.container--> 
    </section>
    <div class="wp-products">
        <h2>SẢN PHẨM HOT</h2>
        <ul class="list-products">
            <div class="item">
                <img src={{asset('/img/product_1.png')}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>
                <div class="name">Khoá điện tử điều khiển qua APP cửa kính, khoá xe máy chữ U vân tay POKU3</div>
                <div class="price">Giá 590.000 VNĐ</div>
            </div>


            <div class="item">
                <img height="174" width="174" src={{asset('/img/product_2.png')}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>
                <div class="name">Khóa cửa cao cấp neolock neoLUX3</div>
                <div class="price">Giá 7.650.000 VNĐ</div>
            </div>


            <div class="item">
                <img height="174" width="174" src={{asset('/img/product_3.png')}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>           
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>

                <div class="name">Khóa cửa cổng vân tay thông minh NeoA3S</div>
                <div class="price">Giá 3.950.000 VNĐ</div>
            </div>
            <div class="item">
                <img height="174" width="174" src={{asset('/img/product_4.png')}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>

                <div  class="name">Khóa cửa tay tròn vân tay thông minh neoA7S</div>
                <div class="price">Giá 3.851.000 VNĐ</div>
            </div>

            <div class="item">
                <img height="174" width="174" src={{asset('/img/product_5.png')}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>
                <div class="name">Khóa cửa nhôm vân tay, qua APP neoG7S</div>
                <div class="price">3.910.000 VNĐ</div>
            </div>

            <div class="item">
                <img height="174" width="174" src={{asset('/img/product_6.png')}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>
                <div class="name">Khoá cửa kính vân tay neoA6S</div>
                <div class="price">Giá 3.900.000 VNĐ</div>
            </div>
        </ul>
        <div class="list-page">
            <div class="item">
                <a href="">1</a>
            </div>
            <div class="item">
                <a href="">2</a>
            </div>
            <div class="item">
                <a href="">3</a>
            </div>
            <div class="item">
                <a href="">4</a>
            </div>
        </div>
    </div>

    <div id="saleoff">
        <div class="box-left">
            <h1>
                <span>GIẢM GIÁ LÊN ĐẾN</span>
                <span>45%</span>
            </h1>
        </div>
        <div class="box-right"></div>
    </div>

    <section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top: 20px" id="about" class="title text-center">TÍNH NĂNG KHÓA CỬA THÔNG MINH NEOLOCK</h1>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Mở khóa cửa bằng ứng dụng di động thông qua Bluetooh hoặc mạng Wifi (Gateway).</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-bandcamp fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Tự động khoá theo thời gian đã cài đặt, ngừng hoạt động sau 5 lần nhập sai mật khẩu.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-history fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Chia sẻ quyền quản lý khóa và theo dõi lịch sử ra vào trong ứng dụng di động.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-key fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Mở khóa nhanh chóng bằng mã PIN, mã PIN thay đổi động theo thời hạn theo cơ chế OTP.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-hand-o-right fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Hỗ trợ mở khóa qua vân tay, thẻ từ, nhận diện khuôn mặt và nhiều chức năng cao cấp khác.</h3>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img width="300" height="400" src={{asset('/img/featured-app.png')}} alt="">
                        </div>
                    <div class="space"></div>

    <!-- giải pháp khóa locker -->
    <section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="about" class="title text-center">CÁC GIẢI PHÁP KHÓA TỦ LOCKER THÔNG MINH</h1>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <img width="500" height="500" src={{asset('/img/tu_locker_thong_minh_neolock.jpg')}} alt="">
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Giải pháp cho thuê tủ locker thông minh qua APP.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-quote-right fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Giải pháp giặt ủi thông qua tủ locker thông minh.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-star-half-o fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Giải pháp bán hàng, điểm trung chuyển giao nhận hàng hóa cho thương mại điện tử.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-book fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Tủ locker cho phòng tập Gym, Spa, Golf, hồ bơi, khu mua sắm.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-caret-square-o-down fa-3x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Neolock cung cấp SDK, API cho đối tác tích hợp khóa cửa, khóa tủ locker thông minh.</h3>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="space"></div>






    <!-- logo đối tác -->

    <section class="clients">
        <div class="container">
            <div class="row">
                    <center><div style="margin-bottom: 20px" class="aligncenter"><h1 class="aligncenter">ĐỐI TÁC</h1>Các đối tác doanh nghiệp bất động sản và cổng thanh toán</div></center>
                    <br/>
                    </div>
                    <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img width="300" height="auto" src={{asset('/img/imgclient1.png')}}>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img width="300" height="auto" src={{asset('/img/fecredit_logo.png')}}>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img width="300" height="auto" src={{asset('/img/logo-neo-BG.png')}}>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img width="200" height="auto" src={{asset('/img/Note2Collect-logo-Negative-black.png')}}>
                    </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <center><div style="margin-bottom: 20px; margin-top:20px" class="aligncenter"><h1 class="aligncenter">TIN TỨC VÀ SỰ KIỆN</h1>Những tin tức và sự kiện mới nhất</div></center>
            @foreach($blogss as $row)
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="project">
                        <figure class="img-responsive">
                            <a href="/blog/{{$row->id}}"><img width="400" height="300" src={{$row->images}} alt=""></a>
                            <figcaption>                    
                                <a href="/blog/{{$row->id}}"><span class="project-details">{{$row->title}}</span></a>
                            </figcaption>
                        </figure>
                    </div>    
                </div>    
            @endforeach
            
@endsection
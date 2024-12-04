@extends('layouts.appfront')

@section('content')
    <center><div style="margin-top: -20px" id="slideshow">
        <div class="slide-wrapper">
            <div class="slide"><img src={{asset('/img/banner0.png')}}></div>
            <div class="slide"><img src={{asset('/img/banner2.jpg')}}></div>
            <div class="slide"><img src={{asset('/img/banner3.jpg')}}></div>
            <div class="slide"><img src={{asset('/img/banner7.jpg')}}></div>
            <div class="slide"><img src={{asset('/img/banner4.jpg')}}></div>
            <div class="slide"><img src={{asset('/img/banner5.jpeg')}}></div>
            <div class="slide"><img src={{asset('/img/banner6.png')}}></div>
            <div class="slide"><img src={{asset('/img/banner8.jpg')}}></div>
            <div class="slide"><img src={{asset('/img/banner9.jpg')}}></div>
            <div class="slide"><img src={{asset('/img/banner10.jpg')}}></div>
        </div>
      </div>
    </div></center>
  
        {{-- <div class="to-bottom">
            <a href="">
                <img src={{asset('/img/to_bottom.png')}} alt="">
            </a>
        </div>
    </div> --}}
    <div class="wp-products">
        <h2>SẢN PHẨM HOT</h2>
        <ul style="margin-left: -70px" class="list-products">
            @foreach($productss as $row)
            <a href="/product/{{$row->id}}"><div class="item">
                    <img width="174px" height="174px" src={{$row->images}} alt="">
                    <div style="margin-top: 15px" class="stars">
                        <div style="margin: auto" class="column">
                            <span>
                                <a style="color:yellow" class="fa fa-star" aria-hidden="true"></a>
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
                    <div class="name">{{$row->name_character}}</div>
                    <div class="price">Giá thuê {{number_format($row->price,0,",",'.')}} VNĐ</div>
                    <div class="sale_price">Giá bán {{number_format($row->sale_price,0,',','.')}} VNĐ</div>
            </div></a>
            @endforeach    
        </ul>    
    </div>
     <!-- SƠ LƯỢT -->
    <section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="about" class="title text-center">SƠ LƯỢC VỀ DỊT DÀNG</h1>
                    <div class="space"></div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-6">
                            <img width="500" height="500" src={{asset('/img/gioithieu.png')}} alt="">
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media" style="margin-top: 20px">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Dịt Dàng được thành lập vào cuối năm 2022!</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-item" style="margin:10px 0 ; padding : 8px;">
        
                                    <div class="media">
                                        <div class="pull-left icon" href="#">
                                            <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>

                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">Là đơn vị cho thuê trang phục Cosplay uy tín!</h3>
                                        </div>
                                    </div>
                                </div>

                            </ul>
                            <div class="col-sm-6">
                                <div class="list-intro">
                                    <center><div class="item">
                                        <div class="d_ico">
                                            <img style="margin-top: 10px" src={{asset('/img/icon-gradient-rank.svg')}} width="70px" height="70px">
                                        </div>
                                        <div class="name">
                                            <h5 class="mb-0">Dẫn đầu Việt Nam</h5>
                                            <span>Dẫn đầu xu hướng cosplay</span>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="list-intro">
                                    <center><div class="item">
                                        <div class="d_ico">
                                            <img style="margin-top: 10px" src={{asset('/img/icon-gradient-clothes.svg')}} width="70px" height="70px">
                                        </div>
                                        <div class="name">
                                            <h5 class="mb-0">Sản phẩm đa dạng</h5>
                                            <span>Luôn cập nhật xu hướng</span>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="list-intro">
                                    <center><div class="item">
                                        <div class="d_ico">
                                            <img style="margin-top: 10px" src={{asset('/img/camera.png')}} width="70px" height="70px">
                                        </div>
                                        <div class="name">
                                            <h5 class="mb-0">Studio chuyên nghiệp</h5>
                                            <span>Mang đến những album đẹp nhất</span>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="list-intro">
                                    <center><div class="item">
                                        <div class="d_ico">
                                            <img style="margin-top: 10px" src={{asset('/img/icon-gradient-laundry.svg')}} width="70px" height="70px">
                                        </div>
                                        <div class="name">
                                            <h5 class="mb-0">Giặt là sạch sẽ</h5>
                                            <span>Cung cấp dịch vụ làm sạch uy tín</span>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space"></div>
    </section>
    <!-- DỊCH VỤ -->

    <section class="clients" style="margin-top: 30px">
        <div class="container">
            <center><div class="row">
                    <center><div style="margin-bottom: 20px" class="aligncenter"><h1 class="aligncenter">NHỮNG DỊCH VỤ CỦA DỊT DÀNG</h1></div></center>
                    <br/>
                    </div>
                    <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i>
                        <h3>CHỤP ẢNH</h3>
                        <h4>Giá cả chỉ 2.990K/Người</h4>
                        <a>Note: Giá đã bao gồm mọi chi phí</a>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="70px" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0l12.6 0c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7 480 448c0 35.3-28.7 64-64 64l-192 0c-35.3 0-64-28.7-64-64l0-250.3-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0l12.6 0z"/></svg>
                        <h3>THUÊ ĐỒ</h3>
                        <h4>Trang phục đẹp, giá cả hợp lý</h4>
                        <a>Note: Giá thuê mỗi bộ sẽ khác nhau</a>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img width="80" height="70" src={{asset('/img/makeup.png')}}>
                        <h3>TRANG ĐIỂM</h3>
                        <h4>Makeup Artist chuyên nghiệp</h4>
                        <a>Note: Giá make tùy mỗi nhân vật</a>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img width="80" height="70" src={{asset('/img/washing-machine.png')}}>
                        <h3>GIẶT, DƯỠNG</h3>
                        <h4>Chăm sóc trang phục của bạn</h4>
                        <a>Note: Giá cả tùy theo trang phục</a>
                    </div>
            </div></center>
        </div>
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
@extends('layouts.appfront')

@section('content')
        <!-- banner -->
        <div class="full_bg">
            <div class="slider_main">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#banner1" data-slide-to="0" class="active"></li>
                    <li data-target="#banner1" data-slide-to="1"></li>
                    <li data-target="#banner1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- first slide -->
                    <div class="carousel-item active">
                        <div class="container">
                        <div class="carousel-caption relative">
                            <div class="row d_flex">
                                <div class="col-lg-5 offset-lg-7 col-md-7 offset-md-5">
                                    <div class="creative">
                                    <h1>Giải pháp bán hàng qua tủ locker </h1>
                                    <h3>Chào mừng các bạn đến với thế giới mua sắm tiện lợi và hiện đại ngay tại khách sạn với sự kết hợp của tủ locker mini và ứng dụng di động.</h3>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- second slide -->
                    <div class="carousel-item">
                        <div class="container">
                        <div class="carousel-caption relative">
                            <div class="row d_flex">
                                <div class="col-lg-5 offset-lg-7 col-md-7 offset-md-5">
                                <div class="creative">
                                    <h1>Giải pháp quản lý lịch phòng họp thông minh </h1>
                                    <h3>Sử dụng phần mềm quản lý việc đặt phòng đi kèm với hệ thống màn hình hoặc máy tinh bảng gắn tại mỗi phòng họp</h3>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- third slide-->
                    <div class="carousel-item">
                        <div class="container">
                        <div class="carousel-caption relative">
                            <div class="row d_flex">
                                <div class="col-lg-5 offset-lg-7 col-md-7 offset-md-5">
                                <div class="creative">
                                    <h1>Giải Pháp Giao Nhận Hàng Hiện Đại Cho Chung Cư </h1>
                                    <h3>Thời đại mua sắm và giao nhận hàng ngày càng phát triển, neolocker mang lại những lợi ích đặc biệt cho cư dân chung cư.</h3>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- controls -->
                <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
        <!-- body -->
        <!-- perfect -->
    <div class="container">
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                @foreach($blogss as $row) 
                    <div style="margin-top: 30px" class="col-md-12">
                        <div class="perfect_img">
                            <a href="/blog/{{$row->id}}"><figure><img width="750" height="400" src={{$row->images}} alt="#"/></figure></a>
                        </div>
                    </div>
                    <div style="margin-left:10px" class="col-md-12">
                        <div class="titlepage text_align_left">   
                            <h2 style="margin-top: 10px"><a href="/blog/{{$row->id}}">{{$row->title}}</a></h2>
                            <p>{{$row->synopsis}}</p>
                        </div>
                    </div>
                    <center style="margin-left:25px" ><hr width="100%" noshade="noshade"/></center>
                    @endforeach
            </div>
            <div class="col-sm-4">    
                <div style="" class="col-md-12">
                    <div class="sidebar-box search-form-wrap">
                        <form action="/blogs" class="search-form">
                          <div class="form-group">
                            <span style="right: 20px; top: 8.5%; position: absolute" class="icon fa fa-search"></span>
                            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Tìm kiếm từ khóa...">
                          </div>
                        </form>
                    </div>
                    <div style="margin-top: 50px" class="sidebar-box">
                        <h3>Nổi Bật</h3>
                        <hr width="100%" noshade="noshade"/>
                        <div class="post-entry-sidebar"></div>
                    </div>
                </div>    
            </div>      
        </div>
    
        <!-- end perfect -->
       
        <!-- contact -->
        <div class="contact">
            <div class="container">
            <div class="row">
                <div style="margin-bottom: 30px" class="col-md-12 ">
                    <div style="text-align: center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <form id="request" class="main_form">
                        <div class="row">
                        <div class="col-md-12 ">
                            <input class="form_control" placeholder="Name" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-12">
                            <input class="form_control" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                            <input class="form_control" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                            <input class="textarea" placeholder="Message" type="type" name="message">
                        </div>
                        <div class="col-md-12">
                            <button style="width: 150" class="send_btn">Send</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <!-- end contact -->
@endsection
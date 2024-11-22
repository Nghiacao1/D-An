@extends('layouts.appfront')

@section('content')
    <!-- perfect -->
    <div class="container">
        <h1>Bài viết của Neolock</h1>
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                @foreach($blogss as $row) 
                    <div class="post-content-body" style="overflow: hidden" itemprop="articleBody">
                        <a href="/blog/{{$row->id}}"><img style="margin-top: 20px" width="750" height="450" src={{$row->images}}> 
                    </div>
                    <div style="margin-left:10px" class="col-md-12">
                        <div class="titlepage text_align_left">   
                            <h2 style="margin-top: 10px"><a href="/blog/{{$row->id}}">{{$row->title}}</a></h2>
                            <h6>Ngày đăng: {{$row->created_at}}</h6>
                            <p>{{$row->synopsis}}</p>
                        </div>
                    </div>
                    <center><hr width="100%" noshade="noshade"/></center>
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
                        <div class="post-entry-sidebar">
                            @foreach($blogss as $row)
                            <ul>
                                <li>
                                    <a href="/blog/{{$row->id}}">
                                        <div class="text">
                                            <img class="img-responsive" src={{$row->images}} alt="">
                                            <h4>{{$row->title}}</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">ngay-dang &nbsp;-&nbsp; {{$row->created_at}} </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <ul class="tags">
                        <li><a title="smartlocker" href="/tin-tuc/tag/smartlocker">Anime Fes</a></li>
                        <li><a title=" rentalservice" href="/tin-tuc/tag/rentalservice">Hoyofest</a></li>
                        <li><a title="neolock" href="/tin-tuc/tag/neolock">Aeon Fes</a></li>
                        <li><a title=" lockerrental" href="/tin-tuc/tag/lockerrental"> Nippon Ơi</a></li>
                        <li><a title="mobileapp" href="/tin-tuc/tag/mobileapp">Suzukage Fes</a></li>
                        <li><a title="neolocker" href="/tin-tuc/tag/neolocker">Cosplay</a></li>
                      </ul>
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
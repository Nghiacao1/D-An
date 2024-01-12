@extends('layouts.appfront')

@section('content')
    <div class="container">
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                <div class="post-content-body" style="overflow: hidden" itemprop="articleBody">
                    <h1 style="margin-left: 10px">{{$blogs->title}}</h1>
                    <h6 style="margin-left: 10px;margin-top:10px">Ngày đăng: {{$blogs->created_at}}</h6>
                    <img style="margin-top: 20px" width="750" height="450" src={{$blogs->images}}> 
                    <p>{{$blogs->content}}</p>
                    <img style="margin-top: 20px" width="750" height="450" src={{$blogs->images_2}}> 
                </div>
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
                        <li><a title="smartlocker" href="/tin-tuc/tag/smartlocker">smartlocker</a></li>
                        <li><a title=" rentalservice" href="/tin-tuc/tag/rentalservice"> rentalservice</a></li>
                        <li><a title="neolock" href="/tin-tuc/tag/neolock">neolock</a></li>
                        <li><a title=" lockerrental" href="/tin-tuc/tag/lockerrental"> lockerrental</a></li>
                        <li><a title="mobileapp" href="/tin-tuc/tag/mobileapp">mobileapp</a></li>
                        <li><a title="neolocker" href="/tin-tuc/tag/neolocker">neolocker</a></li>
                        <li><a title="tủ cho thuê" href="/tin-tuc/tag/tu-cho-thue">tủ cho thuê</a></li>
                      </ul>
                    
                </div>    
            </div>      
        </div>
    
        <!-- end perfect -->
       
@endsection
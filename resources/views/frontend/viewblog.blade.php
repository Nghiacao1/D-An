@extends('layouts.appfront')

@section('content')
    <div class="container">
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                    <div style="margin-left:10px" class="col-md-12">
                        <div class="titlepage text_align_left">   
                            <h2 style="margin-top: 10px; margin-bottom:20px">{{$blogs->title}}</h2>
                            <img width="750" height="400" src={{$blogs->images_2}}>
                            <p>{{$blogs->content}}</p>
                        </div>
                    </div>
                    <center style="margin-left:25px" ><hr width="100%" noshade="noshade"/></center>
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
       
@endsection
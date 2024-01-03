@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail Blogs: {{$blogs->title}} </h2></div>
        <div class="panel-body-1">
            <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/blogs">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src={{$blogs->images}}>
                    
                    <ul class="col-sm-8">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">Content:</label>
                              <div class="col-sm-8">{{$blogs->content}}</div>
                              <div class="w-100"></div>
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-4">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">External Link:</label>
                              <div class="col">{{$blogs->external_link}}</div>
                              <div class="w-100"></div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
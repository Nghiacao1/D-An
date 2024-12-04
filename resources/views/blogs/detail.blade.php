@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div style="background-color: white" class="card-header"><h2><a style="background-color: white; border: none" class="btn btn-primary" href="/blogs"><i style="color: green" class="fa fa-angle-double-left fa-3x" aria-hidden="true"></i></a> Thông tin bài viết: {{$blogs->title}} </h2></div>
        <div class="panel-body-1">
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src={{$blogs->images}}>
                    
                    <ul  style="margin-left: 20px" class="col-sm-8">
                        <div class="container-1">
                            <div class="row">
                                <label style="flex: 0.2 0 0" class="col">Mô tả</label>
                                <textarea  style="height: 60px;white-space: nowrap;overflow: hidden;" class="col-sm-8">{{$blogs->synopsis}}</textarea>
                                <div class="w-100" style="margin-top: 20px"></div>
                                <label style="flex: 0.2 0 0" class="col">Nội dung:</label>
                                <textarea style="height: 100px;white-space: nowrap;overflow: hidden;" class="col-sm-8">{{$blogs->content}}</textarea>
                                <div class="w-100"></div>
                          </div>
                        </div>
                    </ul>
                    

                </div>

@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div style="background-color: white" class="card-header"><h2><a style="background-color: white; border: none" class="btn btn-primary" href="/products"><i style="color: green" class="fa fa-angle-double-left fa-3x" aria-hidden="true"></i></a> Thông tin chi tiết: {{$products->name_character}} </h2></div>
        <div class="panel-body-1">
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">                
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                                <label class="col">Tên {{$products->category}}:</label>
                                <div class="col">{{$products->name}}</div>
                                <div class="w-100"></div>
                                <label class="col">Thương hiệu: </label>
                                <div class="col">{{$products->brand}}</div>
                                <div class="w-100"></div>
                                <label class="col">Size đồ: </label>
                                <div class="col">{{$products->size}}</div>
                                <div class="w-100"></div>
                                <label class="col">Giá cho thuê:</label>
                                <div class="col">{{number_format($products->price,0,",",".")}} VNĐ</div>
                                <div class="w-100"></div>
                                <label class="col">Giá bán:</label>
                                <div class="col">{{number_format($products->sale_price,0,",",".")}} VNĐ</div>
                                <div class="w-100"></div>
                                <label class="col">Mô tả đồ:</label>
                                <div class="col">{{$products->description}}</div>
                                <div class="w-100"></div>
                                <label class="col"></label>
                                <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">Hình ảnh:</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img style="width: 150px; height:150px" src="{{$products->images}}">
                                    <img style="width: 150px;height:150px" src="{{$products->images2}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img style="width: 150px;height:150px" src="{{$products->images3}}">
                                    <img style="width: 150px;height:150px" src="{{$products->images4}}">
                                </div>
                            </div>
                        </div>
                    </ul>

                </div>

@endsection
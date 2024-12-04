@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div style="background-color: white" class="card-header"><h2><a style="background-color: white; border: none" class="btn btn-primary" href="/orders"><i style="color: green" class="fa fa-angle-double-left fa-3x" aria-hidden="true"></i></a> Chi tiết hóa đơn: {{$orders->id}} </h2></div>
        <div class="panel-body-1">
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">                
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">Tên người dùng:</label>
                              <div class="col">{{$orders->username}}</div>
                              <div class="w-100"></div>
                              <label class="col">Họ tên người mua:</label>
                              <div class="col">{{$orders->fullname}}</div>
                              <div class="w-100"></div>
                              <label class="col">Tên nhân vật:</label>
                              <div class="col">{{$orders->name_char}}</div>
                              <div class="w-100"></div>
                              <label class="col">Tên {{$orders->category}}:</label>
                              <div class="col">{{$orders->name}}</div>
                              <div class="w-100"></div>
                              <label class="col">Số lượng:</label>
                              <div class="col">{{$orders->quantity}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">Số diện thoại:</label>
                              <div class="col">{{$orders->phone_number}}</div>
                              <div class="w-100"></div>
                              <label class="col">Địa chỉ nhận hàng:</label>
                              <div class="col">{{$orders->address}}</div>
                              <div class="w-100"></div>
                              <label class="col">Trạng thái đơn hàng:</label>
                                @if($orders->trangthai == 1)
                                    <div class="col">Đang xác nhận</div>
                                @elseif($orders->trangthai == 2)
                                    <div class="col">Đang vận chuyển</div>
                                @elseif($orders->trangthai == 3)
                                    <div class="col">Giao hàng thành công</div> 
                                @elseif($orders->trangthai == 4)
                                    <div class="col">Đã hủy</div>  
                                @endif 
                              <div class="w-100"></div>
                              <label class="col">Thành tiền:</label>
                              <div class="col">{{number_format($orders->Total,0,",",".")}} VNĐ</div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
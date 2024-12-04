@extends('layouts.infoapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ><h4>{{ __('Thông tin cá nhân') }}</h4></div>

                <div class="card-body">
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tên người dùng') }}</label>

                            <div class="col-md-6">
                                <p>{{$cus->username}}</p>

                            </div>
                        </div>

                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Họ và Tên') }}</label>

                            <div class="col-md-6">
                                <p>{{$cus->fullname}}</p>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Số điện thoại') }}</label>

                            <div class="col-md-6">
                                <p>{{$cus->phone}}</p>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ') }}</label>

                            <div class="col-md-6">
                                <p>{{$cus->address}}, {{$cus->district}}, TP.{{$cus->city}}, {{$cus->country   }}</p>

                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" ><h4>{{ __('Mật khẩu và bảo mật') }}</h4></div>

                <div class="card-body">
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <p>{{$cus->email}}</p>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <p autocomplete="current-password">**************</p>

                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" ><h4>{{ __('Đơn hàng của bạn') }}</h4></div>

                <div class="card-body">
                @foreach ($order as $row)
                    <div class="col-sm-6">
                        <div class="list-intro">
                                    <center><div style="height: auto; color: black; background-color:aliceblue" class="item">
                                        <p> Mã đơn hàng</p>
                                        <a style="color: blue">{{$row->id}}</a>
                                        <p style="margin-top: -15px "> Tên sản phẩm</p>
                                        <a style="color: blue">{{$row->name_char}}</a>
                                        <p style="margin-top: -15px"> Thành tiền</p>
                                        <a style="color: blue">{{$row->Total}} VNĐ</a>
                                        <p style="margin-top: -15px"> Trạng thái</p>
                                        @if ($row->trangthai == 1)
                                            <a style="color: blue"> Đang xác nhận</a>
                                        @endif
                                </div></center>
                        </div>
                    </div>
                    @endforeach   
                </div>
            </div>
        </div>
    </div>
@endsection
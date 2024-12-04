@extends('layouts.infoapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ><h4>{{ __('Cập nhật thông tin cá nhân') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{route("info.changeinfo",['id' => $cus->id])}}">
                        @method("PUT")
                        @csrf
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tên người dùng') }}</label>

                            <div class="col-md-6">
                                <input placeholder={{$cus->username}}>

                            </div>
                        </div>

                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Họ và Tên') }}</label>

                            <div class="col-md-6">
                                <input placeholder={{$cus->fullname}}p>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Số điện thoại') }}</label>

                            <div class="col-md-6">
                                <input placeholder={{$cus->phone}}>

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
        </div>
    </div>
@endsection
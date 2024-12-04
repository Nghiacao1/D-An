@extends('layouts.infoapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ><h4>{{ __('Cập nhật thông tin cá nhân') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{route("info.changeinfo",['id' => $customer->id])}}">
                        @method("PUT")
                        @csrf
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tên người dùng') }}</label>

                            <div style="margin-top:10px" class="col-md-6">
                                <input class="form-control" name="username" style="height: 40px" value="{{$customer->username}}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Họ và Tên') }}</label>

                            <div style="margin-top:10px" class="col-md-6">
                                <input class="form-control" name="fullname" style="height: 40px" value="{{$customer->fullname}}">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Số điện thoại') }}</label>

                            <div style="margin-top:10px" class="col-md-6">
                                <input class="form-control" name="phone" style="height: 40px" value="{{$customer->phone}}">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label style="margin-top: 15px;" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ') }}</label>

                            <div style="margin-top:30px" class="col-md-6">
                                <div class="col-sm-6">
                                    <label>Số nhà, tên đường</label><input class="form-control" name="address" style="height: 40px; width: 150px" value= "{{$customer->address}}"> <label>Quận/Huyện</label><input class="form-control" name="district" style="height: 40px; width: 150px" value= "{{$customer->district}}">
                                </div>
                                <div class="col-sm-6">
                                    <label>Tỉnh/TP</label><input class="form-control" name="city" style="height: 40px; width: 150px" value= "{{$customer->city}}"> <label>Quốc gia</label> <input class="form-control" name="country" style="height: 40px; width: 150px" value= "{{$customer->country}}"></i>
                                </div>
                            </div>
                        </div>
                        <center><button type="submit" class="btn btn-primary">Cập nhật</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
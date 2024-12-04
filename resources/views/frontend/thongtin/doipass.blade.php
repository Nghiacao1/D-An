@extends('layouts.infoapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ><h4>{{ __('Thay đổi mật khẩu') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{route("info.changepass",['id' => $customer->id])}}">
                        @method("PUT")
                        @csrf
                        <div class="row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" placeholder="Mật Khẩu"  type="password" required="" name="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu mới') }}</label>

                            <div class="col-md-6">
                                <input class="form-control"  placeholder="Mật Khẩu Mới"  type="password" required="" name="Newpassword">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Xác nhận mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input  class="form-control"  placeholder="Nhập Lại Mật Khẩu"  type="password" required="" name="Repassword">
							
                            </div>
                        </div>
                        <center><button type="submit" class="btn btn-primary">Cập nhật</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
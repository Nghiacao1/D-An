@extends('layouts.appfront')
@section('content')

    <div class="container">
        <div class="sp-cart mt-5">
            <div class="viewcart">
                <center><h3>Thông Tin Đặt Hàng</h3><center>
                <div class="col-12">
                    <div class="cart-total">
                        <form action="{{ route("category.create") }}" method="POST">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="name">Họ và Tên</label>
                                        <input type="text" class="form-control" id="username"  name="username" placeholder="Tên khách hàng" maxlength="15" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" class="form-control" id="email"  name="email" placeholder="Email khách hàng" maxlength="255" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address"  name="address" placeholder="Địa chỉ" maxlength="255" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone"  name="phone" placeholder="Số điện thoại " maxlength="15" required />
                                    </div>
                                </div>
                                <div class="col-sm">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 80px">Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th style="width: 80px">Số lượng</th>
                                            <th style="width: 90px">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($viewcart as $row)
                                        <tr>
                                            <td><img width="80px" height="70px" src={{$row->images}} alt=""></td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->price}}</td>
                                            <td>{{$row->quantity}}</td>
                                            <td>{{$total=number_format((((float)$row->price)*($row->quantity)*1000000),0,',','.')}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 text-center" style="padding:16px;">
                                <button style="background-color: #B22222"><a style="margin-top: 10px" class="btn text-white" title="Mua ngay" type="submit" }}">Đặt hàng</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

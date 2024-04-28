@extends('layouts.appfront')
@section('content')

    <div class="container">
        <div class="sp-cart mt-5">
            <div class="viewcart">
                <center><h3>Thông Tin Đặt Hàng</h3><center>
                <div class="col-12">
                    <div class="cart-total">
                        <form action ="{{ route("order.add") }}" method="POST">
                            @method("POST")
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                    <div class="form-group">
                                        <label for="fullname">Họ và Tên</label>
                                        <input type="text" class="form-control" id="fullname"  name="fullname" placeholder="Tên khách hàng" maxlength="15" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email"  name="email" placeholder="Email khách hàng" maxlength="255" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address"  name="address" placeholder="Địa chỉ" maxlength="255" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone_number"  name="phone_number" placeholder="Số điện thoại " maxlength="15" required />
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

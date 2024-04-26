@extends('layouts.appfront')
@section('content')

    <div class="container">
        <div class="sp-cart mt-5">
            <div class="viewcart">
                <div class="col-9">
                    <div class="cart-right">
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="cart-total">
                    <div class="panel-body">
                    <div class="table-responsive">
                    @guest('customer')
                        <div class="col-12 col-lg-12 text-center" style="padding:16px;">
                            <center><td>Không có sản phẩm nào trong giỏ hàng</td></center>
                            <center><a><i class="fa fa-cart-plus fa-3x"></i></a></center>
                        </div>
                    @else
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 150px">Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th style="width: 50px">Số lượng</th>
                                    <th style="width: 50px"></th>   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($viewcart as $row)
                                <tr>
                                    <td><img width="150px" height="150px" src={{$row->images}} alt=""></td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->price}}</td>
                                    <form method="POST" action="{{route("cart.update",['id' => $row->id])}}">
                                        @method("PUT")
                                        @csrf
                                        <td><input type="text" submit class="form-control" style= "width: 80px " name="quantity" value="{{ $row->quantity }}">
                                    </form>
                                    <td>
                                    <form method="POST" style="display:inline-block" action="{{route("cart.destroy",['id' => $row->id])}}" onsubmit="return ConfirmDelete( this )">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                        <div class="col-12 col-lg-12 text-center" style="padding:16px;">
                                <button style="background-color: #B22222"><a style="margin-top: 10px" class="btn text-white" title="Mua ngay" href="{{ url('/carts/order') }}">Mua hàng</a></button>
                            </div>
                    @endguest
                    </div>
                </div>
                    </div>
                </div>
      

    </div>
@endsection
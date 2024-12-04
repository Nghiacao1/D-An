@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Quản lý đơn hàng </h2></div>
            <div class="panel-body">
                <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
                <div class=""><p>Trạng thái: <br>1.Đang xác nhận<br>2.Đang vận chuyển <br>3.Giao thành công<br>4.Đã hủy</p></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Tên sản phẩm</th>
                                <th>Địa chỉ</th>
                                <th>Thành tiền</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($orders as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->fullname}}</td>
                            <td>{{$row->name_char}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{number_format($row->Total,0,",",".")}} VNĐ</td>
                            <form method="POST" action="{{route("order.update",['id' => $row->id])}}">
                                        @method("PUT")
                                        @csrf
                                        <td><input type="text" submit class="form-control" style= "width: 80px " name="trangthai" value="{{ $row->trangthai }}">
                                    </form>
                            <td>
                            <a style="width: 40px" class="btn btn-primary" href="/orders/{{$row->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>  
                                <form method="POST" style="display: inline-block" action="orders/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                    @method('DELETE')
                                    @csrf
                                        <button style="width: 40px;background-color: red" class="btn btn-primary" type="submit"><i class="fa fa-trash"></i></button>
                            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
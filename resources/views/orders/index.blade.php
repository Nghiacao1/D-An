@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Quản lý đơn hàng </h2></div>
            <div class="panel-body">
                <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/blogs/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Tên sản phẩm</th>
                                <th>Địa chỉ</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($orders as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/blogs/{{$row->id}}">{{$row->fullname}}</a></td>
                            <td>{{$row->name_char}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->Total}}</td>
                            <td><a class="btn btn-primary" href="blogs/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display: inline-block" action="blogs/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                    @method('DELETE')
                                    @csrf
                                        <button class="btn btn-primary" type="submit">Delete</button>
                            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
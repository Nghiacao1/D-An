@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div style="margin-top: 10px" class="card-header"><h2>Quản lý thông tin sản phẩm</h2></div>
            <div class="panel-body">
                <div id="macs-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="macs-table"></label></div>
                <div class="d-flex flex-row-reverse"><a style="width: 100px; background-color: green" class="btn btn-primary" href="/products/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên nhân vật</th>
                                <th>Tên game/anime</th>
                                <th>Thương hiệu</th>
                                <th>Size đồ</th>
                                <th>Danh mục</th>
                                <th>Giá thuê</th>
                                <th>Giá bán</th>
                                <th>Tool</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($products as $row)
                        <tr>
                            <td><img width="150px" height="150px" src="{{$row->images}}" alt="image"></td>
                            <td>{{$row->name_character}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->brand}}</td>
                            <td>{{$row->size}}</td>
                            <td>{{$row->category}}</td>
                            <td>{{number_format($row->price,0,",",".")}}đ</td>
                            <td>{{number_format($row->sale_price,0,",",".")}}đ</td>
                            <td><a style="width: 40px" class="btn btn-primary" href="/products/{{$row->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a style="width: 40px; background-color: brown" class="btn btn-primary" href="products/edit/{{$row->id}}"><i class="fa fa-pencil"></i></a>  
                                <form method="POST" style="display: inline-block" action="products/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
        <center><nav aria-label="Page navigation example">
            {{ $products->links() }}</center>
    </div>
@endsection
 

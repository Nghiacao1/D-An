@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2>Quản lý thông tin sản phẩm</h2></div>
            <div class="panel-body">
                <div id="macs-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="macs-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/products/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Product id</th>
                                <th>Images</th>
                                <th>Introduce</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Tool</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($products as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/products/{{$row->id}}">{{$row->name}}</a></td>
                            <td>{{$row->product_id}}</td>
                            <td>{{$row->images}}</td>
                            <td>{{$row->introduce}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{$row->price}}</td>
                            <td><a class="btn btn-primary" href="products/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display: inline-block" action="products/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
        <center><nav aria-label="Page navigation example">
            {{ $products->links() }}</center>
    </div>
@endsection
 

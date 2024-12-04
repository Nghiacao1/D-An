@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Quản lý Blog </h2></div>
            <div class="panel-body">
                <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
                <div class="d-flex flex-row-reverse"><a style="width: 100px;background-color: green" class="btn btn-primary" href="/blogs/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th style="width: 350px" >title</th>
                                <th>images</th>
                                <th style="width: 350px" >synopsis</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($blogs as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td><img style="width: 150px" src="{{$row->images}}" alt=""></td>
                            <td>{{$row->synopsis}}</td>
                            <td><a style="width: 40px" class="btn btn-primary" href="/blogs/{{$row->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a style="width: 40px;background-color: brown" class="btn btn-primary" href="blogs/edit/{{$row->id}}"><i class="fa fa-pencil"></i></a>  
                                <form method="POST" style="display: inline-block" action="blogs/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                    @method('DELETE')
                                    @csrf
                                        <button style="width: 40px;background-color: red" style="width: 40px" class="btn btn-primary" type="submit"><i class="fa fa-trash"></i></button>
                            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <center><nav aria-label="Page navigation example">
            {{ $blogs->links() }}
            <center>
    </div>
@endsection
 

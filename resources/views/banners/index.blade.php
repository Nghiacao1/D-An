@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Quản lý Banner </h2></div>
            <div class="panel-body">
                <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/banners/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>title</th>
                                <th>path</th>
                                <th>sortOrder</th>
                                <th>status</th>
                                <th>type</th>
                                <th>datas</th>
                                <th>cateid</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($banners as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/banners/{{$row->id}}">{{$row->title}}</a></td>
                            <td>{{$row->path}}</td>
                            <td>{{$row->sortOrder}}</td>
                            <td>{{$row->status}}</td>
                            <td>{{$row->type}}</td>
                            <td>{{$row->datas}}</td>
                            <td>{{$row->cateid}}</td>
                            <td><a href="/banners/{{$row->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a class="btn btn-primary" href="banners/edit/{{$row->id}}"><i class="fa fa-pencil"></i></a>  
                                <form method="POST" style="display: inline-block" action="banners/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                    @method('DELETE')
                                    @csrf
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-trash fa-2x"></i></button>
                            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <center><nav aria-label="Page navigation example">
            {{ $banners->links() }}
            <center>
    </div>
@endsection
 

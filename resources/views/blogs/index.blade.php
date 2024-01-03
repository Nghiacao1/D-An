@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Manage Blogs </h2></div>
            <div class="panel-body">
                <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/blogs/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>title</th>
                                <th>images</th>
                                <th>synopsis</th>
                                <th>external_link</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($blogs as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/blogs/{{$row->id}}">{{$row->title}}</a></td>
                            <td>{{$row->images}}</td>
                            <td>{{$row->synopsis}}</td>
                            <td>{{$row->external_link}}</td>
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
        <center><nav aria-label="Page navigation example">
            {{ $blogs->links() }}
            <center>
    </div>
@endsection
 

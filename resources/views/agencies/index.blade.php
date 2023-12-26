@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Thông tin cơ quan </h2></div>
            <div class="panel-body">
                <div id="agencies-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="agencies-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/agencies/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Email</th>
                                <th>Cccd</th>
                                <th>Address	</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($agencies as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/agencies/{{$row->id}}">{{$row->name}}</a></td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->cccd}}</td>
                            <td>{{$row->address}}</td>
                            <td><a class="btn btn-primary" href="agencies/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display: inline-block" action="agencies/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
            {{ $agencies->links() }}</center>
    </div>
@endsection
 

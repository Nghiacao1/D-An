@extends('layouts.app')
    
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Quản lý Mails</h2></div>
            <div class="panel-body">
                <div id="orderdetails-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="orderdetails-table"></label></div>
                <div>
                    <a class="btn btn-primary"></a>
                </div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/mailmanager/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Tool</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($mails as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/mailmanager/{{$row->id}}">{{$row->name}}</a></td>
                            <td>{{$row->title}}</td>
                            <td><a class="btn btn-primary" href="mailmanager/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display: inline-block" action="orderdetails/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
            {{ $mails->links() }}</center>
    </div>
@endsection
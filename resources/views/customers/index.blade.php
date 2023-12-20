@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Manage Customers </h2></div>
        <div class="panel-body">
            <div id="buildings-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="customers-table"></label></div>
            <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/customers/create">Thêm</a></div>
            <p></p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
        
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Code</th>
                            <th>Email</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach($customers as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><a href="/customers/{{$row->id}}">{{$row->fullname}}</a></td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->email}}</td>
                        <td><a class="btn btn-primary" href="customers/edit/{{$row->id}}">Edit</a>  
                            <form method="POST" style="display: inline-block" action="customers/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
        {{ $customers->links() }}
        </center>
</div>
@endsection
 
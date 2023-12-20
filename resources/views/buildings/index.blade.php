@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Manage Buildings </h2></div>
            <div class="panel-body">
                <div id="buildings-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="buildings-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/buildings/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Hotel ID</th>
                                <th>Code</th>
                                <th>Tool</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($buildings as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/buildings/{{$row->id}}">{{$row->name}}</a></td>
                            <td>{{$row->hotelId}}</td>
                            <td>{{$row->code}}</td>
                            <td><a class="btn btn-primary" href="buildings/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display:inline-block" action="buildings/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
            {{ $buildings->links() }}
            </center>
    </div>
@endsection
 

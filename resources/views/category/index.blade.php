@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Manage Categoys </h2></div>
            <div class="panel-body">
                <div id="categoys-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="categoys-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/category/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>customer_id</th>
                                <th>title</th>
                                <th>image</th>
                                <th>description</th>
                                <th>created_date</th>
                                <th>modified</th>
                                <th>status</th>
                                <th>color_tag</th>
                                <th>locklist</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($category as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->customer_id}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->image}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{$row->created_date}}</td>
                            <td>{{$row->modified}}</td>
                            <td>{{$row->status}}</td>
                            <td>{{$row->color_tag}}</td>
                            <td>{{$row->locklist}}</td>
                            <td><a class="btn btn-primary" href="category/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display: inline-block" action="category/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
            {{ $category->links() }}
            <center>
    </div>
@endsection
 

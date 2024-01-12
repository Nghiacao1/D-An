@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h2> Quản lý Macs </h2></div>
            <div class="panel-body">
                <div id="macs-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="macs-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/macs/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>ID</th>
                                <th>fullname</th>
                                <th>email</th>
                                <th>address</th>
                                <th>purchaseDate</th>
                                <th>sellDate</th>
                                <th>saleMan</th>
                                <th>warrantyDate</th>
                                <th>provider</th>
                                <th>updatedDate</th>
                                <th>lockName</th>
                                <th>buyerName</th>
                                <th>buyerEmail</th>
                                <th>buyerPhone</th>
                                <th>buyerAddress</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($macs as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><a href="/macs/{{$row->id}}">{{$row->fullname}}</a></td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->purchaseDate}}</td>
                            <td>{{$row->sellDate}}</td>
                            <td>{{$row->saleMan}}</td>
                            <td>{{$row->warrantyDate}}</td>
                            <td>{{$row->provider}}</td>
                            <td>{{$row->updatedDate}}</td>
                            <td>{{$row->buyerName}}</td>
                            <td>{{$row->buyerEmail}}</td>
                            <td>{{$row->buyerPhone}}</td>
                            <td>{{$row->buyerAddress}}</td>
                            <td><a class="btn btn-primary" href="macs/edit/{{$row->id}}">Edit</a>  
                                <form method="POST" style="display: inline-block" action="macs/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
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
            {{ $macs->links() }}</center>
    </div>
@endsection
 

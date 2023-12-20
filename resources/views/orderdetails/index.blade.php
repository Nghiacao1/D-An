@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <center> <div class="card-header"><h2> Hóa đơn chi tiết </h2></div> </center>
            <div class="panel-body">
                <div id="orderdetails-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="orderdetails-table"></label></div>
                <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/orderdetails/create">Thêm</a></div>
                <p></p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
            
                            <tr>
                                <th>id</th>
                                <th>orderId</th>
                                <th>code</th>
                                <th>shopId</th>
                                <th>status</th>
                                <th>createdDate</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>descirption</th>
                                <th>macAddress</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($orderdetails as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->orderId}}</td>
                            <td>{{$row->code}}</td>
                            <td>{{$row->shopId}}</td>
                            <td>{{$row->status}}</td>
                            <td>{{$row->createdDate}}</td>
                            <td>{{$row->quantity}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{$row->macAddress}}</td>
                            <td><a class="btn btn-primary" href="orderdetails/edit/{{$row->id}}">Edit</a>  
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
            {{ $orderdetails->links() }}</center>
    </div>
@endsection
 

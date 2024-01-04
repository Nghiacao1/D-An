@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail orderdetails: {{$orderdetails->orderId}} </h2></div>
        <div class="panel-body-1">
            <div id="orderdetails-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="orderdetails-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/orderdetails">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                   
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">orderId:</label>
                              <div class="col">{{$orderdetails->orderId}}</div>
                              <div class="w-100"></div>
                              <label class="col">code:</label>
                              <div class="col">{{$orderdetails->code}}</div>
                              <div class="w-100"></div>
                              <label class="col">shopIdr:</label>
                              <div class="col">{{$orderdetails->shopId}}</div>
                              <div class="w-100"></div>
                              <label class="col">status:</label>
                              <div class="col">{{$orderdetails->status}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">createdDate:</label>
                              <div class="col">{{$orderdetails->createdDate}}</div>
                              <div class="w-100"></div>
                              <label class="col">quantity:</label>
                              <div class="col">{{$orderdetails->quantity}}</div>
                              <div class="w-100"></div>
                              <label class="col">price:</label>
                              <div class="col">{{$orderdetails->price}}</div>
                              <div class="w-100"></div>
                              <label class="col">description:</label>
                              <div class="col">{{$orderdetails->description}}</div>
                              <div class="w-100"></div>
                              <label class="col">macAddress:</label>
                              <div class="col">{{$orderdetails->macAddress}}</div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
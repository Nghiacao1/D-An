@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <div style="background-color: white" class="card-header"><h2><a style="background-color: white; border: none" class="btn btn-primary" href="/customers"><i style="color: green" class="fa fa-angle-double-left fa-3x" aria-hidden="true"></i></a> Thông tin chi tiết: {{$customers->fullname}} </h2></div>
        <div class="panel-body-1">
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">                
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">User Name:</label>
                              <div class="col">{{$customers->username}}</div>
                              <div class="w-100"></div>
                              <div class="w-100"></div>
                              <label class="col">Email:</label>
                              <div class="col">{{$customers->email}}</div>
                              <div class="w-100"></div>
                              <label class="col">Phone Number:</label>
                              <div class="col">{{$customers->phone}}</div>
                              <div class="w-100"></div>
                              <label class="col">CCCD:</label>
                              <div class="col">{{$customers->CCCD}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">Address:</label>
                              <div class="col">{{$customers->address}}</div>
                              <div class="w-100"></div>
                              <label class="col">Country:</label>
                              <div class="col">{{$customers->country}}</div>
                              <div class="w-100"></div>
                              <label class="col">City:</label>
                              <div class="col">{{$customers->city}}</div>
                              <div class="w-100"></div>
                              <label class="col">District:</label>
                              <div class="col">{{$customers->district}}</div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
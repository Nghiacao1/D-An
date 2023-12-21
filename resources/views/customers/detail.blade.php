@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail Customer: {{$customers->fullname}} </h2></div>
        <div class="panel-body">
            <div id="buildings-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="customers-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/customers">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src="{{ Avatar::create($customers->fullname)->toBase64() }}">
                    
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">User Name:</label>
                              <div class="col">{{$customers->username}}</div>
                              <div class="w-100"></div>
                              <label class="col">Neolock Username:</label>
                              <div class="col">{{$customers->neolock_username}}</div>
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
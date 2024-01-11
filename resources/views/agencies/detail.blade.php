@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail agencies: {{$agencies->name}} </h2></div>
        <div class="panel-body-1">
            <div id="agencies-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="agencies-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/agencies">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src="{{ Avatar::create($agencies->name)->toBase64() }}">
                    
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">id:</label>
                              <div class="col">{{$agencies->id}}</div>
                              <div class="w-100"></div>
                              <label class="col">name:</label>
                              <div class="col">{{$agencies->name}}</div>
                              <div class="w-100"></div>
                              <label class="col"><code></code>:</label>
                              <div class="col">{{$agencies->code}}</div>
                              <div class="w-100"></div>
                              <label class="col">email:</label>
                              <div class="col">{{$agencies->email}}</div>
                              <div class="w-100"></div>
                              <label class="col">Cccd:</label>
                              <div class="col">{{$agencies->Cccd}}</div>
                              <div class="w-100"></div>
                              <label class="col">Address:</label>
                              <div class="col">{{$agencies->Address}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">status:</label>
                              <div class="col">{{$agencies->status}}</div>
                              <div class="w-100"></div>
                              <label class="col">MST:</label>
                              <div class="col">{{$agencies->MST}}</div>
                              <div class="w-100"></div>
                              <label class="col">description:</label>
                              <div class="col">{{$agencies->description}}</div>
                              <div class="w-100"></div>
                              <label class="col">company_name:</label>
                              <div class="col">{{$agencies->company_name}}</div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
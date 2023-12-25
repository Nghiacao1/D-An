@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail building: {{$buildings->name}} </h2></div>
        <div class="panel-body-1">
            <div id="buildings-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="buildings-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/buildings">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src="{{ Avatar::create($buildings->name)->toBase64() }}">
                    
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">id:</label>
                              <div class="col">{{$buildings->id}}</div>
                              <div class="w-100"></div>
                              <label class="col">name:</label>
                              <div class="col">{{$buildings->name}}</div>
                              <div class="w-100"></div>
                              <label class="col">hotelId:</label>
                              <div class="col">{{$buildings->hotelId}}</div>
                              <div class="w-100"></div>
                              <label class="col">code:</label>
                              <div class="col">{{$buildings->code}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                </div>

@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail banners: {{$banners->title}} </h2></div>
        <div class="panel-body-1">
            <div id="banners-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="banners-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/banners">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src="{{ Avatar::create($banners->title)->toBase64() }}">
                    
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">title:</label>
                              <div class="col">{{$banners->title}}</div>
                              <div class="w-100"></div>
                              <label class="col">path:</label>
                              <div class="col">{{$banners->path}}</div>
                              <div class="w-100"></div>
                              <label class="col">sortOrder:</label>
                              <div class="col">{{$banners->sortOrder}}</div>
                              <div class="w-100"></div>
                              <label class="col">status:</label>
                              <div class="col">{{$banners->status}}</div>
                              <div class="w-100"></div>
                              <label class="col">type:</label>
                              <div class="col">{{$banners->type}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">datas:</label>
                              <div class="col">{{$banners->datas}}</div>
                              <div class="w-100"></div>
                              <label class="col">cateid:</label>
                              <div class="col">{{$banners->cateid}}</div>
                              <div class="w-100"></div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
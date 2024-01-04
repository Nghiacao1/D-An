@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail Category: {{$categorys->title}} </h2></div>
        <div class="panel-body-1">
            <div id="categorys-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="categorys-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/category">Về danh sách sản phẩm</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src="{{ Avatar::create($categorys->title)->toBase64() }}">
                    
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">customer_id:</label>
                              <div class="col">{{$categorys->customer_id}}</div>
                              <div class="w-100"></div>
                              <label class="col">title:</label>
                              <div class="col">{{$categorys->title}}</div>
                              <div class="w-100"></div>
                              <label class="col">image:</label>
                              <div class="col">{{$categorys->image}}</div>
                              <div class="w-100"></div>
                              <label class="col">description:</label>
                              <div class="col">{{$categorys->description}}</div>
                              <div class="w-100"></div>
                              <label class="col">created_date:</label>
                              <div class="col">{{$categorys->created_date}}</div>
                              <div class="w-100"></div>
                              <label class="col"></label>
                              <div class="col"></div
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">modified:</label>
                              <div class="col">{{$categorys->modified}}</div>
                              <div class="w-100"></div>
                              <label class="col">status:</label>
                              <div class="col">{{$categorys->status}}</div>
                              <div class="w-100"></div>
                              <label class="col">color_tag:</label>
                              <div class="col">{{$categorys->color_tag}}</div>
                              <div class="w-100"></div>
                              <label class="col">locklist:</label>
                              <div class="col">{{$categorys->locklist}}</div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
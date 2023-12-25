@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail macs: {{$macs->fullname}} </h2></div>
        <div class="panel-body-1">
            <div id="macs-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="macs-table"></label></div>
            <p class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/macs">Về danh sách</a></p>
                <div class="box_oldproduct box_oldproductV2"  style="display: flex;margin-top: 20px">   
                    
                    <img width="150" height="150" alt="hinhanh" src="{{ Avatar::create($macs->fullname)->toBase64() }}">
                    
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <div class="w-100"></div>
                              <label class="col">fullname:</label>
                              <div class="col">{{$macs->fullname}}</div>
                              <div class="w-100"></div>
                              <label class="col">address:</label>
                              <div class="col">{{$macs->address}}</div>
                              <div class="w-100"></div>
                              <label class="col">purchaseDate:</label>
                              <div class="col">{{$macs->purchaseDate}}</div>
                              <div class="w-100"></div>
                              <label class="col">sellDate:</label>
                              <div class="col">{{$macs->sellDate}}</div>
                              <div class="w-100"></div>
                              <label class="col">sellMan:</label>
                              <div class="col">{{$macs->saleMan}}</div>
                              <div class="w-100"></div>
                              <label class="col">warrantyDate:</label>
                              <div class="col">{{$macs->warrantyDate}}</di>
                          </div>
                        </div>
                    </ul>
                    <ul class="col-sm-22">
                        <div class="container-1">
                            <div class="row">
                              <label class="col">updatedDate:</label>
                              <div class="col">{{$macs->updatedDate}}</div>
                              <div class="w-100"></div>
                              <label class="col">lockName:</label>
                              <div class="col">{{$macs->lockName}}</div>
                              <div class="w-100"></div>
                              <label class="col">buyerName:</label>
                              <div class="col">{{$macs->buyerName}}</div>
                              <div class="w-100"></div>
                              <label class="col">buyerEmail:</label>
                              <div class="col">{{$macs->buyerEmail}}</div>
                              <div class="w-100"></div>
                              <label class="col">buyerPhone:</label>
                              <div class="col">{{$macs->buyerPhone}}</div>
                              <div class="w-100"></div>
                              <label class="col">buyerAddress:</label>
                              <div class="col">{{$macs->buyerAddress}}</div>
                          </div>
                        </div>
                    </ul>

                </div>

@endsection
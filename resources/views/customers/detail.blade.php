@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Detail Customer: {{$customers->fullname}} </h2></div>
        <div class="panel-body">
            <div id="buildings-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="customers-table"></label></div>
            <div class="d-flex flex-row-reverse"><a class="btn btn-primary" href="/customers/create">Thêm</a></div>
            <p></p>
            <div class="table-responsive">
                <div class="box_oldproduct box_oldproductV2"  style="display: flex">   
                    
                    <img width="100" height="100" alt="hinhanh" src="{{ Avatar::create($customers->fullname)->toBase64() }}">
                    
                    <div class="col-sm">
                        <div>Code: {{$customers->code}}</div>
                        <div>Email: {{$customers->email}}</div>
                        <div>Password: {{ $customers->password }}</div>
                    </div>
                    <div class="col-sm" >
                        <div style="display: flex"><label>Country: {{$customers->country}}</label></div>
                        <div style="display: flex"><label>City: {{$customers->city}}</label></div>
                </div>

@endsection
@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Chỉnh sửa dữ liệu Macs</h4></div>
    <form method="POST" action="{{route("mac.update",['id' => $macs->id])}}">
        <div class="row">
            @method("PUT")
            @csrf
            <div class="col-sm">
                <input type="hidden" name="id" value="{{ $macs->id }}">
                
                <div class="form-group">
                    <label for="fullname">fullname</label><br>
                    <input type="text" class="form-control" name="fullname" value="{{ $macs->fullname }}">
                </div>

                <div class="form-group">
                    <label for="customerId">Customer ID</label><br>
                    <input type="text" class="form-control" name="customerId" value="{{ $macs->customerId }}">
                </div>

                <div class="form-group">
                    <label for="email">email</label><br>
                    <input type="text" class="form-control" name="email" value="{{ $macs->email }}">
                </div>

                <div class="form-group">
                    <label for="address">address</label><br>
                    <input type="text" class="form-control" name="address" value="{{ $macs->address }}">
                </div>

                <div class="form-group">
                    <label for="purchaseDate">purchaseDate</label><br>
                    <input type="text" class="form-control" name="purchaseDate" value="{{ $macs->purchaseDate }}">
                </div>

                <div class="form-group">
                    <label for="sellDate">sellDate</label><br>
                    <input type="text" class="form-control" name="sellDate" value="{{ $macs->sellDate }}">
                </div>

                <div class="form-group">
                    <label for="code">saleMan</label><br>
                    <input type="text" class="form-control" name="saleMan" value="{{ $macs->saleMan }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label><br>
                    <input type="text" class="form-control" name="status" value="{{ $macs->status }}">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="code">warrantyDate</label><br>
                    <input type="text" class="form-control" name="warrantyDate" value="{{ $macs->warrantyDate }}">
                </div>

                <div class="form-group">
                    <label for="provider">provider</label><br>
                    <input type="text" class="form-control" name="provider" value="{{ $macs->provider }}">
                </div>

                <div class="form-group">
                    <label for="updatedDate">updatedDate</label><br>
                    <input type="text" class="form-control" name="updatedDate" value="{{ $macs->updatedDate }}">
                </div>

                <div class="form-group">
                    <label for="lockName">lockName</label><br>
                    <input type="text" class="form-control" name="lockName" value="{{ $macs->lockName }}">
                </div>

                <div class="form-group">
                    <label for="buyerName">buyerName</label><br>
                    <input type="text" class="form-control" name="buyerName" value="{{ $macs->buyerName }}">
                </div>

                <div class="form-group">
                    <label for="buyerEmail">buyerEmail</label><br>
                    <input type="text" class="form-control" name="buyerEmail" value="{{ $macs->buyerEmail }}">
                </div>

                <div class="form-group">
                    <label for="buyerPhone">buyerPhone</label><br>
                    <input type="text" class="form-control" name="buyerPhone" value="{{ $macs->buyerPhone }}">
                </div>

                <div class="form-group">
                    <label for="buyerAddress">buyerAddress</label><br>
                    <input type="text" class="form-control" name="buyerAddress" value="{{ $macs->buyerAddress }}">
                </div>
            </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </div>
        </form>
    </div>
{{-- {{Form::close()}} --}}
@endsection
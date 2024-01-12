@extends('layouts.app')

@section('content')
    <center><div class="page-header"><h4>Chỉnh sửa chi tiết hóa đơn</h4></div></center>
        <div class="col-xs-4 col-xs-offset-44">
            <form method="POST" action="{{route("orderdetail.update",['id' => $orderdetails->id])}}">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("orderdetail.update",$orderdetail->id)",'method' => 'PUT')}} --}}
                <input type="hidden" name="id" value="{{ $orderdetails->id }}">

                <div class="form-group">
                    <label for="orderId">orderID</label><br>
                    <input type="text" class="form-control" name="orderId" value="{{ $orderdetails->orderId }}">
                </div>

                <div class="form-group">
                    <label for="code">Code</label><br>
                    <input type="text" class="form-control" name="code" value="{{ $orderdetails->code }}">
                </div>
                
                <div class="form-group">
                    <label for="shopId">shopId</label><br>
                    <input type="text" class="form-control" name="shopId" value="{{ $orderdetails->shopId }}">
                </div>

                <div class="form-group">
                    <label for="status">status</label><br>
                    <input type="text" class="form-control" name="status" value="{{ $orderdetails->status }}">
                </div>

                <div class="form-group">
                    <label for="createdDate">createdDate</label><br>
                    <input type="text" class="form-control" name="createdDate" value="{{ $orderdetails->createdDate }}">
                </div>

                <div class="form-group">
                    <label for="quantity">quantity</label><br>
                    <input type="text" class="form-control" name="quantity" value="{{ $orderdetails->quantity }}">
                </div>

                <div class="form-group">
                    <label for="price">price</label><br>
                    <input type="text" class="form-control" name="price" value="{{ $orderdetails->price }}">
                </div>

                <div class="form-group">
                    <label for="description">description</label><br>
                    <input type="text" class="form-control" name="description" value="{{ $orderdetails->description }}">
                </div>

                <div class="form-group">
                    <label for="macAddress">macAdrress</label><br>
                    <input type="text" class="form-control" name="macAddress" value="{{ $orderdetails->macAddress }}">
                </div>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
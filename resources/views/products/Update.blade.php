@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Chỉnh sửa thông tin sản phẩm</h4></div>
    <form method="POST" action="{{route("product.update",['id' => $products->id])}}">
        <div class="row">
                @method("PUT")
                @csrf
                <div class="col-sm">
                    <input type="hidden" name="id" value="{{ $products->id }}">
                    <div class="form-group">
                        <label for="name">Name</label><br>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                    </div>
                    <div class="form-group">
                        <label for="product_id">Product ID</label><br>
                        <input type="text" class="form-control" name="product_id" value="{{ $products->product_id }}">
                    </div>
                    <div class="form-group">
                        <label for="images">Images</label><br>
                        <input type="text" class="form-control" name="images" value="{{ $products->images }}">
                    </div>
                    <div class="form-group">
                        <label for="introduce">Introduce</label><br>
                        <textarea rows="5" class="form-control" name="introduce" >{{ $products->introduce}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea rows="7" class="form-control" name="description">{{ $products->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label><br>
                        <input type="text" class="form-control" name="price" value="{{ $products->price }}">
                    </div>
                    <div class="form-group">
                        <label for="salient_features">Salient Features</label><br>
                        <input type="text" class="form-control" name="salient_features" value="{{ $products->salient_features }}">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="connect">Connect</label><br>
                        <input type="text" class="form-control" name="connect" value="{{ $products->connect }}">
                    </div>
                    <div class="form-group">
                        <label for="access_mode">Access Mode</label><br>
                        <input type="text" class="form-control" name="access_mode" value="{{ $products->access_mode }}">
                    </div>
                    <div class="form-group">
                        <label for="support_system">Support system</label><br>
                        <input type="text" class="form-control" name="support_system" value="{{ $products->support_system }}">
                    </div>
                    <div class="form-group">
                        <label for="power">Power</label><br>
                        <input type="text" class="form-control" name="power" value="{{ $products->power }}">
                    </div>
                    <div class="form-group">
                        <label for="lowbattery_warning">Low battery warning</label><br>
                        <input type="text" class="form-control" name="lowbattery_warning" value="{{ $products->lowbattery_warning}}">
                    </div>
                    <div class="form-group">
                        <label for="security">Security</label><br>
                        <input type="text" class="form-control" name="security" value="{{ $products->security }}">
                    </div>
                    <div class="form-group">
                        <label for="img_description">Img Description</label><br>
                        <input type="text" class="form-control" name="img_description" value="{{ $products->img_description }}">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </div>
            </form>
{{-- {{Form::close()}} --}}
@endsection
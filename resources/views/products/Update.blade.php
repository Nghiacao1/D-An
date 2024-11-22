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
                        <label for="name">Tên game hoặc phim</label>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                    </div>
                    <div class="form-group">
                        <label for="product_id">Tên nhân vật</label>
                        <input type="text" class="form-control" name="name_character" value="{{ $products->name_character }}">
                    </div>
                    <div class="form-group">
                        <label for="product_id">Thương hiệu</label>
                        <input type="text" class="form-control" name="brand" value="{{ $products->brand }}">
                    </div>
                    <div class="form-group">
                        <label for="images">Hình 1</label>
                        <input type="text" class="form-control" name="images" value="{{ $products->images }}">
                    </div>
                    <div class="form-group">
                        <label for="images">Hình 2</label>
                        <input type="text" class="form-control" name="images2" value="{{ $products->images2 }}">
                    </div>
                    <div class="form-group">
                        <label for="images">Hình 3</label>
                        <input type="text" class="form-control" name="images3" value="{{ $products->images3 }}">
                    </div>
                    <div class="form-group">
                        <label for="images">Hình 4</label>
                        <input type="text" class="form-control" name="images4" value="{{ $products->images4 }}">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="introduce">Size đồ</label>
                        <input type="text" class="form-control" name="size" value="{{$products->size}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Danh mục</label>
                        <textarea  class="form-control" name="category">{{ $products->category}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea rows="7" class="form-control" name="description">{{ $products->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá thuê</label>
                        <input type="text" class="form-control" name="price" value="{{ $products->price }}">
                    </div>
                    <div class="form-group">
                        <label for="salient_features">Giá bán</label>
                        <input type="text" class="form-control" name="sale_price" value="{{ $products->sale_price }}">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </div>
            </form>
{{-- {{Form::close()}} --}}
@endsection
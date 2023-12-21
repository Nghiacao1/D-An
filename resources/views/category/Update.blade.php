@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Quản lý sản phẩm</h4></div>
        <div class="col-xs-4 col-xs-offset-44">
            <form method="POST" action="{{route("category.update",['id'=> $categorys->id])}}">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("category.update",$category->id)",'method' => 'PUT')}} --}}
                <input type="hidden" name="id" value="{{ $categorys->id }}">
                <div class="form-group">
                    <label for="customer_id">ID khách hàng</title></label><br>
                    <input type="text" class="form-control" name="customer_id" value="{{ $categorys->customer_id }}">
                </div>

                <div class="form-group">
                    <label for="title">Title</label><br>
                    <input type="text" class="form-control" name="title" value="{{ $categorys->title }}">
                </div>

                <div class="form-group">
                    <label for="image">Image</label><br>
                    <input type="text" class="form-control" name="image" value="{{ $categorys->image }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label><br>
                    <input type="text" class="form-control" name="description" value="{{ $categorys->description }}">
                </div>

                <div class="form-group">
                    <label for="created_date">Created date</label><br>
                    <input type="text" class="form-control" name="created_date" value="{{ $categorys->created_date }}">
                </div>

                <div class="form-group">
                    <label for="modified">Modified</label><br>
                    <input type="text" class="form-control" name="modified" value="{{ $categorys->modified }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label><br>
                    <input type="text" class="form-control" name="status" value="{{ $categorys->status }}">
                </div>

                <div class="form-group">
                    <label for="color_tag">Color tag</label><br>
                    <input type="text" class="form-control" name="color_tag" value="{{ $categorys->color_tag }}">
                </div>

                <div class="form-group">
                    <label for="locklist">Locklist</label><br>
                    <input type="text" class="form-control" name="locklist" value="{{ $categorys->locklist }}">
                </div>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
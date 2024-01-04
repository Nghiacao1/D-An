@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Chỉnh sửa dữ liệu Blog</h4></div>
        <div class="col-xs-4 col-xs-offset-44">
            <form method="POST" action="{{route("blog.update",['id' => $blogs->id])}}">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("banner.update",$banner->id)",'method' => 'PUT')}} --}}
                <input type="hidden" name="id" value="{{ $blogs->id }}">
                <div class="form-group">
                    <label for="title">Title</title></label><br>
                    <input type="text" class="form-control" name="title" value="{{ $blogs->title }}">
                </div>

                <div class="form-group">
                    <label for="images">Images</label><br>
                    <input type="text" class="form-control" name="images" value="{{ $blogs->images }}">
                </div>

                <div class="form-group">
                    <label for="images_2">Images 2</label><br>
                    <input type="text" class="form-control" name="images_2" value="{{ $blogs->images_2 }}">
                </div>

                <div class="form-group">
                    <label for="synopsis">Synopsis</label><br>
                    <textarea type="text" rows="5" class="form-control" name="synopsis">{{ $blogs->synopsis }}</textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label><br>
                    <textarea type="text" rows="7" class="form-control" name="content">{{ $blogs->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="external_link">External Link</label><br>
                    <input type="text" class="form-control" name="external_link" value="{{ $blogs->external_link }}">
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
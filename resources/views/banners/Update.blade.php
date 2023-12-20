@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Quản lý Banner</h4></div>
        <div class="col-xs-4 col-xs-offset-4">
            <form method="POST" action="{{route("banner.update",['id' => $banners->id])}}">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("banner.update",$banner->id)",'method' => 'PUT')}} --}}
                <input type="hidden" name="id" value="{{ $banners->id }}">
                <div class="form-group">
                    <label for="title">Title</title></label><br>
                    <input type="text" class="form-control" name="title" value="{{ $banners->title }}">
                </div>

                <div class="form-group">
                    <label for="path">Path</label><br>
                    <input type="text" class="form-control" name="path" value="{{ $banners->path }}">
                </div>

                <div class="form-group">
                    <label for="sortOrder">Sort order</label><br>
                    <input type="text" class="form-control" name="sortOrder" value="{{ $banners->sortOrder }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label><br>
                    <input type="text" class="form-control" name="status" value="{{ $banners->status }}">
                </div>

                <div class="form-group">
                    <label for="cateid">Cate ID</label><br>
                    <input type="text" class="form-control" name="cateid" value="{{ $banners->cateid }}">
                </div>

                <div class="form-group">
                    <label for="type">Type</label><br>
                    <input type="text" class="form-control" name="type" value="{{ $banners->type }}">
                </div>

                <div class="form-group">
                    <label for="datas">Datas</label><br>
                    <input type="text" class="form-control" name="datas" value="{{ $banners->datas }}">
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
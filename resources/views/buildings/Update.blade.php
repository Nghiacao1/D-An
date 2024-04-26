@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Chỉnh sửa dữ liệu toà nhà</h4></div>
        <div class="col-xs-4 col-xs-offset-44">
            <form method="POST" action="{{route("building.update",['id' => $buildings->id])}}">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" value="{{ $buildings->id }}">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" name="name" value="{{ $buildings->name }}">
                </div>

                <div class="form-group">
                    <label for="hotelId">Hotel ID</label><br>
                    <input type="text" class="form-control" name="hotelId" value="{{ $buildings->hotelId }}">
                </div>

                <div class="form-group">
                    <label for="code">Code</label><br>
                    <input type="text" class="form-control" name="code" value="{{ $buildings->code }}">
                </div>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
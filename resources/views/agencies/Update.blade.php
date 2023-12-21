@extends('layouts.app')

@section('content')
    <center><div class="page-header"><h4>Agencies</h4></div></center>
        <div class="col-xs-4 col-xs-offset-4">
            <form method="POST" action="{{route("agencie.update",['id' => $agencies->id])}}">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("agencie.update",$agencie->id)",'method' => 'PUT')}} --}}
                <input type="hidden" name="id" value="{{ $agencies->id }}">
                <div class="form-group">
                    <label for="name">name</label><br>
                    <input type="text" class="form-control" name="name" value="{{ $agencies->name }}">
                </div>

                <div class="form-group">
                    <label for="email">email</label><br>
                    <input type="text" class="form-control" name="email" value="{{ $agencies->email }}">
                </div>

                <div class="form-group">
                    <label for="cccd">cccd</label><br>
                    <input type="text" class="form-control" name="cccd" value="{{ $agencies->cccd }}">
                </div>

                <div class="form-group">
                    <label for="address">address</label><br>
                    <input type="text" class="form-control" name="address" value="{{ $agencies->address }}">
                </div>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
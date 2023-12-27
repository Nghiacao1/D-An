@extends('layouts.app')

@section('content')
    <center><div class="page-header"><h4>Mail Manager</h4></div></center>
        <div class="col-xs-4 col-xs-offset-44">
            <form method="POST" action="{{route("mailmanager.update",['id' => $mailmanager->id])}}">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("orderdetail.update",$orderdetail->id)",'method' => 'PUT')}} --}}
                <input type="hidden" name="id" value="{{ $mailmanager->id }}">

                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" name="name" value="{{ $mailmanager->name }}">
                </div>

                <div class="form-group">
                    <label for="title">Title</label><br>
                    <input type="text" class="form-control" name="title" value="{{ $mailmanager->title}}">
                </div>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </form>
        </div>
{{-- {{Form::close()}} --}}
@endsection
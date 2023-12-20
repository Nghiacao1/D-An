@extends('layouts.app')

@section('content')
    <div class="page-header"><h4>Quản lý khách hàng</h4></div>
    <form method="POST" action="{{route("customer.update",['id' => $customers->id])}}">
        <div class="row">
                @method("PUT")
                @csrf
                {{-- {{Form::open("route" => "route("building.update",$building->id)",'method' => 'PUT')}} --}}
                <div class="col-sm">
                    <input type="hidden" name="id" value="{{ $customers->id }}">
                    <div class="form-group">
                        <label for="code">Code</label><br>
                        <input type="text" class="form-control" name="code" value="{{ $customers->code }}">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Full Name</label><br>
                        <input type="text" class="form-control" name="fullname" value="{{ $customers->fullname }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" class="form-control" name="email" value="{{ $customers->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">PassWord</label><br>
                        <input type="text" class="form-control" name="password" value="{{ $customers->password }}">
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label><br>
                        <input type="text" class="form-control" name="username" value="{{ $customers->username }}">
                    </div>
                    <div class="form-group">
                        <label for="neolock_username">Neolock Username</label><br>
                        <input type="text" class="form-control" name="neolock_username" value="{{ $customers->neolock_username }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label><br>
                        <input type="text" class="form-control" name="phone" value="{{ $customers->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label><br>
                        <input type="text" class="form-control" name="address" value="{{ $customers->address }}">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="country">Country</label><br>
                        <input type="text" class="form-control" name="country" value="{{ $customers->country }}">
                    </div>
                    <div class="form-group">
                        <label for="district">District</label><br>
                        <input type="text" class="form-control" name="district" value="{{ $customers->district }}">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label><br>
                        <input type="text" class="form-control" name="city" value="{{ $customers->city }}">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label><br>
                        <input type="text" class="form-control" name="avatar" value="{{ $customers->avatar }}">
                    </div>
                    <div class="form-group">
                        <label for="balance">Balance</label><br>
                        <input type="text" class="form-control" name="balance" value="{{ $customers->balance }}">
                    </div>
                    <div class="form-group">
                        <label for="roles">Roles</label><br>
                        <input type="text" class="form-control" name="roles" value="{{ $customers->roles }}">
                    </div>
                    <div class="form-group">
                        <label for="CCCD">CCCD</label><br>
                        <input type="text" class="form-control" name="CCCD" value="{{ $customers->CCCD }}">
                    </div>
                    <div class="form-group">
                        <label for="product_type">Product Type</label><br>
                        <input type="text" class="form-control" name="product_type" value="{{ $customers->product_type }}">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>

            </div>
            </form>
{{-- {{Form::close()}} --}}
@endsection
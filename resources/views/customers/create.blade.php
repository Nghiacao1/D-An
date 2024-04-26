@extends ('layouts.app')
@section('title', 'add customer')

@section('content')
    <div class="page-header"><h4>Quản lý khách hàng</h4></div>

    <?php //Hiển thị thông báo thành công?>
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Form thêm mới học sinh?>
    <p><a class="btn btn-primary" href="/customers">Về danh sách</a></p>
    <center><h4>Thêm khách hàng mới</h4></center>
    <div class="col-xs-4 col-xs-offset-4">
        <form action="{{ route("customer.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code"  name="code" placeholder="Mã Code" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname"  name="fullname" placeholder="Tên khách hàng" maxlength="50" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email"  name="email" placeholder="Email khách hàng" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="password">PassWord</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username"  name="username" placeholder="Tên người dùng" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="neolock_username">Neolock Username</label>
                            <input type="text" class="form-control" id="neolock_username"  name="neolock_username" placeholder="Tên người dùng Neolock" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone"  name="phone" placeholder="Số điện thoại" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" maxlength="255" required />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country"  name="country" placeholder="Quốc gia" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" id="district"  name="district" placeholder="Quận " maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city"  name="city" placeholder="Thành phố" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="text" class="form-control" id="avatar"  name="avatar" placeholder="Ảnh đại diện" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="balance">Balance</label>
                            <input type="text" class="form-control" id="balance"  name="balance" placeholder="Balance" maxlength="255" required />
                        </div>                  
                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <input type="text" class="form-control" id="roles"  name="roles" placeholder="Roles" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="CCCD">CCCD</label>
                            <input type="text" class="form-control" id="CCCD"  name="CCCD" placeholder="CCCD" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="product_type">Product_Type</label>
                            <input type="text" class="form-control" id="product_type"  name="product_type" placeholder="Product Type" maxlength="255" required />
                        </div>
                    </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
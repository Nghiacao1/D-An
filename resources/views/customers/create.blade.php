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
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="ID" maxlength="15" required />
                        </div>
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
                            <label for="neolock_username">Neolock_Username</label>
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
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status"  name="status" placeholder="Trạng thái" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="created_date">Created_date</label>
                            <input type="text" class="form-control" id="created_date" name="created_date" placeholder="Ngày tạo" maxlength="255" required />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="text" class="form-control" id="avatar"  name="avatar" placeholder="Ảnh đại diện" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="token">Token</label>
                            <input type="text" class="form-control" id="token"  name="token" placeholder="Mã thông báo" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="point">Point</label>
                            <input type="text" class="form-control" id="point"  name="point" placeholder="Điểm" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="webcloud_enable">Webcloud_enable</label>
                            <input type="text" class="form-control" id="webcloud_enable"  name="webcloud_enable" placeholder="Kích hoạt Clound" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="security_key">Security_key</label>
                            <input type="text" class="form-control" id="security_key"  name="security_key" placeholder="Khóa bảo mật" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="fcm">FCM</label>
                            <input type="text" class="form-control" id="fcm"  name="fcm" placeholder="FCM" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="social_id">Social_id</label>
                            <input type="text" class="form-control" id="social_id" name="social_id" placeholder="Social ID" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="last_login">Last_login</label>
                            <input type="text" class="form-control" id="last_login"  name="last_login" placeholder="Lần đăng nhập cuối" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="access_token">Access_token</label>
                            <input type="text" class="form-control" id="access_token"  name="access_token" placeholder="Access Token" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="refresh_token">Refresh_token</label>
                            <input type="text" class="form-control" id="refresh_token"  name="refresh_token" placeholder="Refresh Token" maxlength="255" required />
                        </div>    <div class="form-group">
                            <label for="open_id">Open_id</label>
                            <input type="text" class="form-control" id="open_id"  name="open_id" placeholder="Open ID" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="scope">Scope</label>
                            <input type="text" class="form-control" id="scope"  name="scope" placeholder="Phạm vi" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="expires_in">Expires_in</label>
                            <input type="text" class="form-control" id="expires_in"  name="expires_in" placeholder="Expires In" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="identification_number">Identification_Number</label>
                            <input type="text" class="form-control" id="identification_number" name="identification_number" placeholder="Identification Number" maxlength="255" required />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="identification_img_1">Identification_img_1</label>
                            <input type="text" class="form-control" id="identification_img_1"  name="identification_img_1" placeholder="img 1" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="identification_img_2">Identification_img_2</label>
                            <input type="text" class="form-control" id="identification_img_2"  name="identification_img_2" placeholder="img 2" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="balance">Balance</label>
                            <input type="text" class="form-control" id="balance"  name="balance" placeholder="Balance" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="receiveFcm">ReceiveFcm</label>
                            <input type="text" class="form-control" id="receiveFcm"  name="receiveFcm" placeholder="Receive Fcm" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <input type="text" class="form-control" id="roles"  name="roles" placeholder="Roles" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="emailVerify">Email Verify</label>
                            <input type="text" class="form-control" id="emailVerify"  name="emailVerify" placeholder="Email Verify" maxlength="255" required />
                        </div>    <div class="form-group">
                            <label for="mobileVerify">Mobile Verify</label>
                            <input type="text" class="form-control" id="mobileVerify"  name="mobileVerify" placeholder="Mobile Verify" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="remark">Remark</label>
                            <input type="text" class="form-control" id="remark"  name="remark" placeholder="Remark" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="is_deleted">Is_Deleted</label>
                            <input type="text" class="form-control" id="is_deleted"  name="is_deleted" placeholder="Is Deleted" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="commission">Commission</label>
                            <input type="text" class="form-control" id="commission" name="commission" placeholder="Commission" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="parent">Parent</label>
                            <input type="text" class="form-control" id="parent"  name="parent" placeholder="Parent" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="CCCD">CCCD</label>
                            <input type="text" class="form-control" id="CCCD"  name="CCCD" placeholder="CCCD" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="product_type">Product_Type</label>
                            <input type="text" class="form-control" id="product_type"  name="product_type" placeholder="Product Type" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="is_receive_email">Is_Receive_Email</label>
                            <input type="text" class="form-control" id="is_receive_email"  name="is_receive_email" placeholder="Is Receive Email" maxlength="255" required />
                        </div>
                    </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
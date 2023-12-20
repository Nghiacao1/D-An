@extends ('layouts.app')
@section('title', 'add orderdetail')

@section('content')
    <center><div class="page-header"><h4>Chi tiết hóa đơn</h4></div></center>

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
    <?php //Form thêm mới ?>
    <p><a class="btn btn-primary" href="/orderdetails">Về chi tiết hóa đơn</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <center><h4>Thêm hóa đơn</h4></center>
        <form action="{{ route("orderdetail.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="id">id</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="id" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">orderId</label>
                <input type="text" class="form-control" id="orderId"  name="orderId" placeholder="orderId" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">code</label>
                <input type="text" class="form-control" id="code"  name="code" placeholder="code" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">shopId</label>
                <input type="text" class="form-control" id="shopId"  name="shopId" placeholder="shopId" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">status</label>
                <input type="text" class="form-control" id="status"  name="status" placeholder="status" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">createdDate</label>
                <input type="text" class="form-control" id="createdDate"  name="createdDate" placeholder="createdDate" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">quantity</label>
                <input type="text" class="form-control" id="quantity"  name="quantity" placeholder="quantity" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">price</label>
                <input type="text" class="form-control" id="price"  name="price" placeholder="price" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="description">descirption</label>
                <input type="text" class="form-control" id="description"  name="description" placeholder="Descirption" maxlength="500" required />
            </div>
            <div class="form-group">
                <label for="name">macAddress</label>
                <input type="text" class="form-control" id="macAddress"  name="macAddress" placeholder="macAddress" maxlength="15" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
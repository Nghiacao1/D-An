@extends ('layouts.app')
@section('title', 'add mac')

@section('content')
    <div class="page-header"><h4>Quản lý Macs</h4></div>

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
    <p><a class="btn btn-primary" href="/macs">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-44">
        <center><h4>Thêm Macs</h4></center>
        <form action="{{ route("mac.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="name">fullname</label>
                <input type="text" class="form-control" id="fullname"  name="fullname" placeholder="fullname" maxlength="100" required />
            </div>
            <div class="form-group">
                <label for="name">email</label>
                <input type="text" class="form-control" id="email"  name="email" placeholder="email" maxlength="200" required />
            </div>
            <div class="form-group">
                <label for="name">address</label>
                <input type="text" class="form-control" id="address"  name="address" placeholder="address" maxlength="350" required />
            </div>
            <div class="form-group">
                <label for="name">purchaseDate</label>
                <input type="text" class="form-control" id="purchaseDate"  name="purchaseDate" placeholder="purchaseDate" maxlength="50" required />
            </div>
            <div class="form-group">
                <label for="name">sellDate</label>
                <input type="text" class="form-control" id="sellDate"  name="sellDate" placeholder="sellDate" maxlength="50" required />
            </div>
            <div class="form-group">
                <label for="name">saleMan</label>
                <input type="text" class="form-control" id="saleMan"  name="saleMan" placeholder="saleMane" maxlength="200" required />
            </div>
            <div class="form-group">
                <label for="name">provider</label>
                <input type="text" class="form-control" id="provider"  name="provider" placeholder="provider" maxlength="350" required />
            </div>
            <div class="form-group">
                <label for="name">updatedDate</label>
                <input type="text" class="form-control" id="updatedDate"  name="updatedDate" placeholder="updatedDate" maxlength="50" required />
            </div>
            <div class="form-group">
                <label for="name">lockName</label>
                <input type="text" class="form-control" id="lockName"  name="lockName" placeholder="lockName" maxlength="150" required />
            </div>
            <div class="form-group">
                <label for="name">buyerName</label>
                <input type="text" class="form-control" id="buyerName"  name="buyerName" placeholder="buyerName" maxlength="150" required />
            </div>
            <div class="form-group">
                <label for="name">buyerEmail</label>
                <input type="text" class="form-control" id="buyerEmail"  name="buyerEmail" placeholder="buyerEmail" maxlength="45" required />
            </div>
            <div class="form-group">
                <label for="name">buyerPhone</label>
                <input type="text" class="form-control" id="buyerPhone"  name="buyerPhone" placeholder="buyerPhone  " maxlength="45" required />
            </div>
            <div class="form-group">
                <label for="name">buyerAddress</label>
                <input type="text" class="form-control" id="buyerAddress"  name="buyerAddress" placeholder="buyerAddress" maxlength="250" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
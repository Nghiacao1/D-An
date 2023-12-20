@extends ('layouts.app')
@section('title', 'add building')

@section('content')
    <div class="page-header"><h4>Quản lý Toà Nhà</h4></div>

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
    <p><a class="btn btn-primary" href="/buildings">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-44">
        <center><h4>Thêm tòa nhà</h4></center>
        <form action="{{ route("building.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="name">Tên tòa nhà</label>
                <input type="text" class="form-control" id="name"  name="name" placeholder="Tên tòa nhà" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Mã khách sạn</label>
                <input type="text" class="form-control" id="hotelId"  name="hotelId" placeholder="Mã  khách sạn" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Mã code</label>
                <input type="text" class="form-control" id="code"  name="code" placeholder="Mã code" maxlength="15" required />
            </div>		
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
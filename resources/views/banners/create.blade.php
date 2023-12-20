@extends ('layouts.app')
@section('title', 'add banner')

@section('content')
    <div class="page-header"><h4>Quản lý Banner</h4></div>

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
    <p><a class="btn btn-primary" href="/banners">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <center><h4>Thêm banner</h4></center>
        <form action="{{ route("banner.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="ID" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="title"  name="title" placeholder="Title" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Path</label>
                <input type="text" class="form-control" id="path"  name="path" placeholder="Path" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Sort order</label>
                <input type="text" class="form-control" id="sortOrder"  name="sortOrder" placeholder="Sort order" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Status</label>
                <input type="text" class="form-control" id="status"  name="status" placeholder="Status" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Type</label>
                <input type="text" class="form-control" id="type"  name="type" placeholder="Type" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Datas</label>
                <input type="text" class="form-control" id="datas"  name="datas" placeholder="Datas" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Cate ID</label>
                <input type="text" class="form-control" id="cateid"  name="cateid" placeholder="Cate ID" maxlength="15" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
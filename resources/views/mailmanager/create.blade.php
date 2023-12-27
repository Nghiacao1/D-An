@extends ('layouts.app')
@section('title', 'add orderdetail')

@section('content')
    <center><div class="page-header"><h4>Add New Temple Email</h4></div></center>

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
    <p><a class="btn btn-primary" href="/mailmanager">Về Mail Manager</a></p>
    <center><h4>Thêm mẫu email</h4></center>
    <div class="col-xs-4 col-xs-offset-44">
        <form action="{{ route("mailmanager.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                <div class="row">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Tên email" maxlength="255" required />
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title"  name="title" placeholder="Tiêu đề email" maxlength="255" required />
                    </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
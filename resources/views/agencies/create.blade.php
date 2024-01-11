@extends ('layouts.app')
@section('title', 'add agencie')

@section('content')
    <div class="page-header"><h4>Quản lý Cơ Quan</h4></div>

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
    <p><a class="btn btn-primary" href="/agencies">Về cơ quan</a></p>
    <div class="col-xs-4 col-xs-offset-44">
        <center><h4>Thêm cơ quan</h4></center>
        <form action="{{ route("agencies.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name"  name="name" placeholder="name" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name"><code></code></label>
                <input type="text" class="form-control" id="code"  name="code" placeholder="code" maxlength="45" required />
            </div>
            <div class="form-group">
                <label for="name">email</label>
                <input type="text" class="form-control" id="email"  name="email" placeholder="email" maxlength="45" required />
            </div>
            <div class="form-group">
                <label for="name">cccd</label>
                <input type="text" class="form-control" id="cccd"  name="cccd" placeholder="cccd" maxlength="12" required />
            </div>
            <div class="form-group">
                <label for="name">address</label>
                <input type="text" class="form-control" id="address"  name="address" placeholder="address" maxlength="255" required />
            </div>		
            <center><button type="submit" class="btn btn-primary">Thêm thông tin</button></center>
        </form>
    </div>
@endsection
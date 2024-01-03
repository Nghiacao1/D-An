@extends ('layouts.app')
@section('title', 'add blogs')

@section('content')
    <div class="page-header"><h4>Quản lý Blogs</h4></div>

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
    <p><a class="btn btn-primary" href="/blogs">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-44">
        <center><h4>Thêm Blogs</h4></center>
        <form action="{{ route("blog.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title"  name="title" placeholder="Title" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="images">Images</label>
                <input type="text" class="form-control" id="images"  name="images" placeholder="Images" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="images_2">Images 2</label>
                <input type="text" class="form-control" id="images_2"  name="images_2" placeholder="Images 2" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="synopsis">Synopsis</label>
                <textarea type="text" rows="5" class="form-control" id="synopsis"  name="synopsis" placeholder="Synopsis" maxlength="255" required ></textarea>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" id="content"  rows="7" name="content" placeholder="Content" maxlength="1000" required></textarea>
            </div>
            <div class="form-group">
                <label for="external_link">External Link</label>
                <input type="text" class="form-control" id="external_link"  name="external_link" placeholder="External Link" maxlength="255" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
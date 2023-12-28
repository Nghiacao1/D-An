@extends ('layouts.app')
@section('title', 'add category')

@section('content')
    <center><div class="page-header"><h4>Quản lý sản phẩm</h4></div></center>

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
    <p><a class="btn btn-primary" href="/category">Về chi tiết sản phẩm</a></p>
    <div class="col-xs-4 col-xs-offset-44">
        <center><h4>Thêm sản phẩm</h4></center>
        <form action="{{ route("category.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="name">ID khách hàng</label>
                <input type="text" class="form-control" id="customer_id"  name="customer_id" placeholder="ID khách hàng" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="title"  name="title" placeholder="Title" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Image</label>
                <input type="text" class="form-control" id="image"  name="image" placeholder="Image" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <input type="text" class="form-control" id="description"  name="description" placeholder="Description" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Created date</label>
                <input type="text" class="form-control" id="created_date"  name="created_date" placeholder="Created date" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Modified</label>
                <input type="text" class="form-control" id="modified"  name="modified" placeholder="Modified" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Status</label>
                <input type="text" class="form-control" id="status"  name="status" placeholder="Status" maxlength="255" required />
            </div>
            <div class="form-group">
                <label for="name">Color tag</label>
                <input type="text" class="form-control" id="color_tag"  name="color_tag" placeholder="Color tag" maxlength="15" required />
            </div>
            <div class="form-group">
                <label for="name">Locklist</label>
                <input type="text" class="form-control" id="locklist"  name="locklist" placeholder="Locklist" maxlength="15" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
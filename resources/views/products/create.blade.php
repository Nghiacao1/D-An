@extends ('layouts.app')
@section('title', 'add product')

@section('content')
    <div class="page-header"><h4>Quản lý thông tin sản phẩm</h4></div>

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

    <?php?>
    <p><a class="btn btn-primary" href="/products">Về danh sách</a></p>
    <center><h4>Thêm sản phẩm mới</h4></center>
    <div class="col-xs-4 col-xs-offset-4">
        <form action="{{ route("product.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="name">Tên game hoặc phim</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Product name" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="product_id">Tên nhân vật</label>
                            <input type="text" class="form-control" id="name_character"  name="name_character" placeholder="VD:Spider Man" maxlength="50" required />
                        </div>
                        <div class="form-group">
                            <label for="connect">Thương hiệu</label>
                            <input type="text" class="form-control" id="brand"  name="brand" placeholder="Hãng đồ" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="images">Hình 1</label>
                            <input type="text" class="form-control" id="images"  name="images" placeholder="Hình ảnh đồ 1" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="images">Hình 2</label>
                            <input type="text" class="form-control" id="images2"  name="images2" placeholder="Hình ảnh đồ 2" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="images">Hình 3</label>
                            <input type="text" class="form-control" id="images3"  name="images3" placeholder="Hình ảnh đồ 3" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="images">Hình 4</label>
                            <input type="text" class="form-control" id="images4"  name="images4" placeholder="Hình ảnh đồ 4 " maxlength="255" required />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="introduce">Size đồ</label>
                            <input type='text' class="form-control" id="size" name="size" placeholder="bảng size" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="introduce">Danh mục</label>
                            <textarea class="form-control" id="category" name="category" placeholder="VD: game hoặc phim" maxlength="255" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea rows="7" class="form-control" id="description"  name="description" placeholder="Mô tả sản phẩm" maxlength="1000" required ></textarea>
                        </div>       
                        <div class="form-group">
                            <label for="price">Giá thuê</label>
                            <input type="text" class="form-control" id="price"  name="price" placeholder="Giá cho thuê" maxlength="255" required />
                        </div> 
                        <div class="form-group">
                            <label for="salient_features">Giá bán</label>
                            <input type="text" class="form-control" id="sale_price"  name="sale_price" placeholder="Giá bán sản phẩm" maxlength="255" required />
                        </div>
                    </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
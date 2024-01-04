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

    <?php //Form thêm mới học sinh?>
    <p><a class="btn btn-primary" href="/products">Về danh sách</a></p>
    <center><h4>Thêm sản phẩm mới</h4></center>
    <div class="col-xs-4 col-xs-offset-4">
        <form action="{{ route("product.create") }}" method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Product name" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="product_id">Product ID</label>
                            <input type="text" class="form-control" id="product_id"  name="product_id" placeholder="Product_id" maxlength="50" required />
                        </div>
                        <div class="form-group">
                            <label for="images">Images</label>
                            <input type="text" class="form-control" id="images"  name="images" placeholder="Product image" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="introduce">Introduce</label>
                            <textarea class="form-control" rows="5" id="introduce" name="introduce" placeholder="Introduce product" maxlength="255" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="7" class="form-control" id="description"  name="description" placeholder="Description" maxlength="1000" required ></textarea>
                        </div>       
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price"  name="price" placeholder="Product price" maxlength="255" required />
                        </div> 
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="salient_features">Salient features</label>
                            <input type="text" class="form-control" id="salient_features"  name="salient_features" placeholder="Salient Features" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="connect">Connect</label>
                            <input type="text" class="form-control" id="connect"  name="connect" placeholder="Connection type" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="access_mode">Access mode</label>
                            <input type="text" class="form-control" id="access_mode"  name="access_mode" placeholder="Access mode" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="support_system">Support system</label>
                            <input type="text" class="form-control" id="support_system"  name="support_system" placeholder="OS support" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="power">Power</label>
                            <input type="text" class="form-control" id="power"  name="power" placeholder="Power source support" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="lowbattery_warning">Low battery warning</label>
                            <input type="text" class="form-control" id="lowbattery_warning"  name="lowbattery_warning" placeholder="Low battery alarm" maxlength="255" required />
                        </div>                  
                        <div class="form-group">
                            <label for="security">Security</label>
                            <input type="text" class="form-control" id="security"  name="security" placeholder="Security" maxlength="255" required />
                        </div>
                        <div class="form-group">
                            <label for="img_description">Img description</label>
                            <input type="text" class="form-control" id="img_description"  name="img_description" placeholder="image Description" maxlength="255" required />
                        </div>
                    </div>
            <center><button type="submit" class="btn btn-primary">Thêm</button></center>
        </form>
    </div>
@endsection
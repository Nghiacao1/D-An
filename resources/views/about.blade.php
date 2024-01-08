@extends('layouts.appfront')

@section('content')
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://127.0.0.1:8000/home/">NeoTech</a>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/customers">Quản lý khách hàng<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/buildings">Quản lý tòa nhà</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/category">Quản lý sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/agencies">Quản lý thông tin agencies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/macs">Quản lý thông tin macs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/orderdetails">Chi tiết hóa đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/banners">Quản lý Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" action="search.html">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                        name="keyword_tensanpham">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="cart.html">Giỏ hàng</a>
                </li>
                <li class="nav-item text-nowrap">
                    <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                    <a class="nav-link" href="login.html">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end header -->

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-2">
            <h1 class="text-center">Về Chúng tôi</h1>
            <div class="row">
                <div class="col col-md-12">
                    <h5 class="text-center">Cung cấp kiến thức nền tảng về Lập trình, Thiết kế Web, Cơ sở dữ liệu</h5>
                    <h5 class="text-center">Giúp các bạn có niềm tin, hành trang kiến thức vững vàng trên con đường trở
                        thành
                        Nhà phát triển Phần mềm</h5>
                    <div class="text-center">
                        <a href="http://127.0.0.1:8000/home/" class="btn btn-primary btn-lg">Ghé thăm NeoTech <i
                                class="fa fa-forward" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col col-md-12">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.94922324549034!2d106.69120010272786!3d10.796941482465929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cef71da905%3A0x319ddefa8be75e74!2zMzAgSG9hIExhbiwgUGjGsOG7nW5nIDcsIFBow7ogTmh14bqtbiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1703749613911!5m2!1svi!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="http://127.0.0.1:8000/home">NeoTech</a> - <script>document.write(new Date().getFullYear());</script>.</span>
            <span class="text-muted">Hành trang tới Tương lai</span>

            <p class="float-right">
                <a href="#">Về đầu trang</a>
            </p>
        </div>
@endsection
@extends('layouts.appfront')

@section('content')
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-2">
            <h1 class="text-center">Liên hệ với Dịt Dàng</h1>
            <div style="margin-top: 30px" class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <img width="250" height="250" src={{asset('/img/logo.png')}}>
                </div>
                <div class="col-xs-4 col-xs-offset-4" style="margin-left: 30px">
                    <form method="post" action="http://127.0.0.1:8000/home">
                        <div class="form-group">
                            <label for="title">Tên của bạn</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Tên của bạn">
                        </div>
                        <div class="form-group">
                            <label for="email">Email của bạn</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email của bạn">
                        </div>
                        <div class="form-group">
                            <label for="title">Vấn đề của bạn?</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="VD: Quy tắc thuê đồ">
                        </div>
                        <div class="form-group">
                            <label for="message">Lời nhắn của bạn</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary" name="btnGoiLoiNhan">Gửi lời nhắn</button>
                    </form>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col col-md-12">
                    <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5542.6717572694415!2d106.66769092702286!3d10.791327543334546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292b41ff1f39%3A0xb913b3239c4b39c7!2zMTM2IMSQLiBMw6ogVsSDbiBT4bu5LCBQaMaw4budbmcgMTAsIFBow7ogTmh14bqtbiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1731322523870!5m2!1svi!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>
@endsection
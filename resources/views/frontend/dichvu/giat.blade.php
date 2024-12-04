@extends('layouts.appfront')

@section('content')
    <div class="container">
        <div style="margin-top: 30px" class="row">
            <div class="col-sm-8">
                <div class="post-content-body" style="overflow: hidden" itemprop="articleBody">
                    <h1 style="margin-left: 10px; margin-top: 5px">Dịch vụ Giặt dưỡng</h1>
                    <h6 style="margin-left: 10px;margin-top:10px">Ngày đăng: 28/12/2022</h6>
                    <h3 style="margin-left: 10px;margin-top: 20px">Tổng quan về dịch vụ</h3>
                    <img style="margin-top: 10px" width="750" height="450" src={{asset('img/giat.jpeg')}}> 
                    <p><strong>Dịt Dàng</strong> là nơi để cho mọi khách hàng có thể tin tưởng trao cho chúng tôi những bộ trang phục yêu thích của mình. Bởi vì chúng tôi có một hệ thống giặt sấy chuyên nghiệp và hiệu quả, mọi quá trình giặt, dưỡng đều được thực hiện cẩn thận và kỹ lưỡng.</p>
                    <p>Chúng tôi cam kết chất lượng tốt nhất cho khách hàng, trang phục được đảm bảo không bị bất kì lỗi hỏng hóc trong quá trình giặt, dưỡng và chỉ cần sau 2 tiếng thì khách hàng đã có thể đến mang bộ trang phục của mình về.</p>
                    <h3 style="margin-left: 10px;"> Bảng giá dịch vụ</h3>
                    <p><strong>Dịt Dàng cam kết</strong> cung cấp dịch vụ với giá cả tốt nhất!</p>
                    <p>Giá giặt dưỡng cơ bản:<strong> 40.000 VNĐ</strong></p>
                    <p style="margin-top: -20px">Giá giặt dưỡng nâng cao:<strong> 70.000 - 300.000 VNĐ</strong></p>
                    <d>Chú ý: Liên hệ để biết giá chính xác</d>
                    <p><strong>Mọi thông tin đặt lịch vui lòng liên hệ qua:</strong></p>
                    <div class="col">
                        <div  class="col-sm-6">
                            <p>Số điện thoại: 0934.888.888</p>
                            <p style="margin-top: -20px">Trực tiếp: Số 136, Đường Lê Văn Sỹ,Phường 10, Quận Phú Nhuận, Tp.Hồ Chí Minh</p>
                        </div>
                        <div class="col-sm-6 ">
                            <p>Nhắn tin qua</p>
                            <a style="margin-top: 10px" href="https://www.facebook.com/profile.php?id=100050533839593"><i class="fa fa-facebook fa-3x"></i></a>
                            <a href=""><i style="margin-left: 30px" class="fa fa-instagram fa-3x"></i></a>
                            <br>
                        </div>
                    </div>
                    <div style="margin-top: 150px"><h3 style="margin-left: 10px;">Quy trình giặt dưỡng tại Dịt Dàng</h3></div>
                    <h4>Bước 1: Phân loại trang phục</h4>
                    <img style="margin-top: 10px" width="100%" height="550" src={{asset('img/phanloai.jpg')}}> 
                    <h4>Bước 2: Tiến hành giặt</h4>
                    <img style="margin-top: 20px" width="750" height="100%" src={{asset('img/giatmay.jpg')}} >
                    <p>Những chất liệu cần được giặt bằng tay để tăng tính thẩm mỹ và kéo dài tuổi thọ cho sợi vải: nanh, lụa, len, satanh, nỉ. </p>
                    <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/giattay.jpeg')}}> 
                    <p>Đối với tóc giả sẽ có quy trình riêng như sau: </p>
                    <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/duongwig.jpg')}}> 
                    <h4>Bước 3: Sấy trang phục</h4>
                    <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/say.jpg')}}>
                    <h4>Bước 4: Xếp trang phục gọn gàng</h4>
                    <img style="margin-top: 10px" width="100%" height="500" src={{asset('img/gapdo.jpg')}}> 
                    <h4>Bước 5: Liên hệ khách hàng và trả đồ</h4>
                </div>
            </div>
            <div class="col-sm-4">    
                <div style="" class="col-md-12">
                    <div class="sidebar-box search-form-wrap">
                        <form action="/" class="search-form">
                          <div class="form-group">
                            <span style="right: 20px; top: 1.5%; position: absolute" class="icon fa fa-search"></span>
                            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Tìm kiếm từ khóa...">
                          </div>
                        </form>
                    </div>
                    <div style="margin-top: 50px" class="sidebar-box">
                        <h3>Dịch vụ khác</h3>
                        <hr width="100%" noshade="noshade"/>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="/makeup">
                                        <div class="text">
                                            <img class="img-responsive" src={{asset('img/makebia.png')}} alt="">
                                            <h4>Dịch vụ trang điểm</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">ngày đăng &nbsp;:&nbsp;19/06/2022  </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/chupanh">
                                        <div class="text">
                                            <img class="img-responsive" src={{asset('img/chupanh.jpg')}} alt="">
                                            <h4>Dịch vụ chụp ảnh</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">ngày đăng &nbsp;:&nbsp;20/08/2022  </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>    
            </div>      
        </div>
    
        <!-- end perfect -->
       
@endsection
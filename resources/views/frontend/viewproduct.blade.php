@extends('layouts.appfront')

@section('content')
    <div class="form-control-1" >
        <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center"></div>
            </div>
        </div>
        </div>
    </div>
    <div class="container" typeof="schema:Product" itemscope="" itemtype="https://schema.org/Product">
        <div class="define">
          <div class="product-detail">
            <div class="product-list-wrap container pt-3 pb-3">
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="heading-title-small">
                    <div style="margin-bottom: 10px; margin-top:10px" class="text-left">
                      <h1 property="schema:name" itemprop="name">{{$products->name}}</h1>
                    </div>
                    <p class="text-left">Mã sản phẩm:  {{$products->product_id}}</p>
                    <p style="margin-top: -20px" class="text-left">Bảo hành:  12 tháng</p>
                  </div>
                  <div itemprop="description" class="excerpt">
                    <p>{{$products->introduce}}</p>
                  </div>
                  <div class="text-right">
                    <span class="text-left price" style="margin-right: 15px" itemprop="price">Giá
                      <span class="price">{{$products->price}} VNĐ</span>
                      <span class="old-price"></span>
                    </span>
                    <button style="background-color: #B22222"><a style="margin-top: 10px" class="btn btn-sub text-white" title="Mua ngay" href = "/carts/addcart/{{$products->id}}">Thêm vào giỏ</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="define">
          <div class="product-list-wrap container">
            <div class="row">
              <div class="col-12 col-lg-12">
                <div itemprop="bodydetail" class="detail-content"><p>&nbsp;</p>
      
      <p style="text-align:center"><span style="color:#B22222"><strong><span style="font-size:26px">{{$products->name}}</span></strong></span></p>
      
      <p>{{$products->description}}</p>
      
      <p><span style="color:#B22222"><span style="font-size:20px"><strong>Tính năng đặc biệt</strong></span></span></p>
      
      <p>{{$products->salient_features}}</p>
      
      
      <p>&nbsp;</p>
      
      <center><p><img alt="" src={{$products->images}} style="height:900px; width:900px" class="img-responsive"></p></center>
      
      
      <p style="margin-bottom: 20px" ><span style="font-size:20px"><span style="color:#B22222"><strong>Tiện ích của khóa {{$products->product_id}}</strong></span></span></p>
      
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/app.png')}} style="height:56px; width:60px" class="img-responsive"></div>
                <div class="col-10">
                    <p><span style="color:#B22222"><strong>Quản lý ứng dụng di động</strong></span></p>
                    <p>Người dùng có thể ngẫu nhiên thêm hoặc xóa người dùng tạm thời và người dùng tạm thời. khóa hoặc mở khóa cửa, xem lịch sử ra vào của bạn bằng một nút nhấn trên ứng dụng điện thoại thông minh của bạn</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/pincode.png')}} style="height:62px; width:60px" class="img-responsive"></div>
                <div class="col-10">
                    <p><span style="color:#B22222"><strong>Bàn phím màn hình cảm ứng thông minh&ZeroWidthSpace;</strong></span></p>
                    <p>Màn hình cảm ứng điện trở rất nhanh để mở khóa, tính năng bảo mật tuyệt đối dữ liệu giao tiếp được mã hóa 128bit và công nghệ OTP.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/ds-uer.png')}} style="height:61px; width:60px" class="img-responsive"></div>
                <div class="col-10">
                    <p><span style="color:#B22222"><strong>Quản lý dữ liệu người dùng&ZeroWidthSpace;</strong></span></p>
                    <p>Ghi lại mọi mục của người dùng. Nhật ký cung cấp cho người dùng truy cập dữ liệu mở khóa</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/zues.png')}} style="height:59px; width:60px" class="img-responsive"></div>
                <div class="col-10">
                    <p><span style="color:#B22222"><strong>Chìa khóa dự trữ khẩn cấp</strong></span></p>
                    <p>Khóa vật lý sẽ được cung cấp trong trường hợp có bất kỳ trường hợp khẩn cấp nào xảy ra.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/pin.png')}} style="height:63px; width:62px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Chỉ số pin thời gian thực</span></strong></p>
                    <p>Chỉ số pin yếu khóa sẽ hiện thị thông báo trước 1 tuần, đồng thời khóa còn có cổng sạc dự phòng USB cung cấp điện tạm thời khi chưa kịp thay pin.</p>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/clock.png')}} style="height:60px; width:62px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Ghi chép lịch sử</span></strong></p>
                    <p>Ghi lại mọi hành động của người dùng. Nhật ký hoạt động cấp cho người dùng truy cập dữ liệu thời gian thực, xem lịch sử ra vào.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/mail.png')}} style="height:62px; width:60px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Tạo và gửi mã PIN từ xa</span></strong></p>
                    <p>Chức năng này cho phép người dùng thay đổi hoặc tạo thêm mã PIN mới từ xa.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/lock.png')}} style="height:61px; width:62px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Tự động khóa trong 5 giây</span></strong></p>
                    <p>Tính năng khóa tự động sẽ giúp bạn tự động khóa cửa trong 5 giây.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/admin.png')}} style="height:62px; width:62px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Chia sẽ quyền quản lý ekey</span></strong></p>
                    <p>Chức năng cho phép chủ nhà chia sẽ quyền quản lí đến các tải khoản khác thuận tiện cho việc thêm, xóa tài khoản mới.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/bluetooth.png')}} style="height:60px; width:62px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Công nghệ Bluetooth</span></strong></p>
                    <p>Công nghệ BLE 4.0 cho phép người dùng truy cập khóa và liên lạc với điện thoại thông minh được ủy quyền.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2"><img alt="" src={{asset('/img/led.png')}} style="height:58px; width:60px" class="img-responsive"></div>
                <div class="col-10">
                    <p><strong><span style="color:#B22222">Đèn nền LED</span></strong></p>
                    <p>Cho biết trạng thái khóa cửa của bạn (bị khóa / mở khóa), giúp bạn mở khóa dễ dàng trong điều kiện ánh sáng yếu.</p>
                </div>
            </div>
        </div>
      </div>
      </div>
      
      <p style="text-align:center"><img alt="" src={{asset('/img/a0cdee3a3c63d83d8172.jpg')}} style="margin:0 auto; width:100%" class="img-responsive"></p>
      
      <p><span style="font-size:20px"><span style="color:#B22222"><strong>Chia sẽ quyền quản lý khóa (ekey).</strong></span></span></p>
      
      <p>Chỉ với chiếc smartphone và truy cập vào ứng dụng neolock, chủ nhà có thể cấp mã PIN cho một ai đó vào nhà trong khoảng thời gian nhất định như một giờ, một ngày hoặc một tháng và tất cả lịch sử ra vào được sẽ được lưu lại. Đây chính là “quyền năng” của kỷ nguyên công nghệ mới, kỷ nguyên di động (mobile). Đặc biệt, smartphone cũng trở thành “chìa khoá” mở cửa thông qua kết nối Bluetooth. Tương tự như mã PIN, “chìa khoá” Bluetooth cũng có thể được chia sẻ cho người khác qua các ứng dụng nhắn tin như Viber, Skype, Email hoặc thông qua QR Code; và mỗi “chìa khoá” Bluetooth cũng có khoảng thời gian hiệu lực nhất định để đảm bảo an ninh theo ý muốn của chủ nhà. Nếu một người khác đã cài đặt ứng dụng neoLock, chủ nhà có thể chia sẻ “chìa khoá” Bluetooth ngay trực tiếp trong ứng dụng.</p>
      
      <p><span style="color:#B22222"><span style="font-size:20px"><strong>Thông số kỹ thuật</strong></span></span></p>
      
      <table border="0" cellpadding="0" cellspacing="0">
          <tbody>
              <tr>
                  <td>
                  <p>Phương thức kết nối</p>
                  </td>
                  <td>
                  <p>{{$products->connect}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                  <p>Chế độ truy cập</p>
                  </td>
                  <td>
                  <p>{{$products->access_mode}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                  <p>Hệ thống hỗ trợ</p>
                  </td>
                  <td>
                  <p>{{$products->support_system}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                  <p>Nguồn điện sử dụng</p>
                  </td>
                  <td>
                  <p>{{$products->power}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                  <p>Cảnh báo pin yếu</p>
                  </td>
                  <td>
                  <p>{{$products->lowbattery_warning}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                  <p>Chức năng bảo mật&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                  </td>
                  <td>
                  <p>{{$products->security}}</p>
                  </td>
              </tr>
          </tbody>
      </table>
      
      <center><p style="text-align:center"><img alt="" src={{$products->img_description}} style="height:400px; width:1000px" class="img-responsive"></p></center>
      </div>
              </div>
      
              <div class="col-12 col-lg-12 text-center" style="padding:16px;">
              <button style="background-color: #B22222"><a style="margin-top: 10px" class="btn text-white" title="Mua ngay" href = "/carts/addcart/{{$products->id}}">Thêm vào giỏ</a></button>
              </div>
      
            </div>
          </div>
        </div>
      </div>
@endsection
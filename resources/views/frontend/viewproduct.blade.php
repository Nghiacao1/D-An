@extends('layouts.appfront')

@section('content')
    <div class="container" typeof="schema:Product" itemscope="" itemtype="https://schema.org/Product">
        <section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space"></div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-6">
                                <div class="col-sm-6">
                                    <div class="list-intro">
                                        <center><div class="item2">
                                            <div class="d_ico">
                                                <img src={{$products->images}} width="250px" height="250px">
                                            </div>
                                        </div></center>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="list-intro">
                                        <center><div class="item2">
                                            <div class="d_ico">
                                                <img src={{$products->images2}} width="250px" height="250px">
                                            </div>
                                        </div></center>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="list-intro">
                                        <center><div class="item2">
                                            <div class="d_ico">
                                                <img src={{$products->images3}} width="250px" height="250px">
                                            </div>
                                        </div></center>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="list-intro">
                                        <center><div class="item2">
                                            <div class="d_ico">
                                                <img src={{$products->images4}} width="250px" height="250px">
                                            </div>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2>{{$products->name_character}}</h2>
                                <br>
                                <h3>{{$products->description}}</h3>
                                <br>
                                <div class="stars">
                                    <div style="margin: auto" class="column">
                                        <span>
                                            <a style="color:yellow" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: yellow" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: yellow" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: yellow" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: yellow" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                    </div>
                                </div>
                                <h4>Giá cho Thuê: {{number_format($products->price,0,",",".")}} VNĐ</h4>
                                <h4>Giá bán trang phục: </h4>
                                <h4><s>3.000.000 VNĐ</s><a style="margin-left:20px"></a>{{number_format($products->sale_price,0,",",".")}} VNĐ</h4>
                                <div class="col-12 col-lg-12 text-center" style="padding:16px;">
                                    <div class="col-sm-6">
                                        <div class="list-intro">
                                            <center><div >
                                                <div class="d_ico">
                                                    <form action="/carts/addcart/{{$products->id}}" method="get" id="form1"></form>
                                                    <button style="width: 20rem; height:5rem" type="submit" form="form1" value="submit" >Thuê Ngay!!!</button>
                                                </div>
                                            </div></center>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="list-intro">
                                            <center><div>
                                                <div class="d_ico">
                                                    <form action="/carts/addcartsale/{{$products->id}}" method="get" id="form3"></form>
                                                    <button style="width: 20rem; height:5rem" type="submit" form="form3" value="submit" >Mua Ngay!!!</button>
                                                </div>
                                            </div></center>
                                        </div>
                                    </div>
                                    <form action="/wishlists/addwishlist/{{$products->id}}" method="get" id="form2"></form>
                                    <div style="display: inline-block">
                                        <button style="margin-top: 20px; width:20rem; height:5rem; background-color:red; color:white" type="submit" form="form2" value="submit" >Thêm yêu thích</button><button style="width: 5rem; height:5rem; color:black" >2.78K</button>
                                    </div>
                                </div>
                                <div style="display: inline-block">
                                    <h4 style="text-transform: none;margin-top:15px">Available Payment Methods&gt;&gt;&gt;</h4>
                                        <div class="col-sm-9">
                                            <img src={{asset('/img/mastercard.jpg')}} width="70px" height="70px">
                                        </div>
                                        <div class="col-sm-9">
                                            <img style="margin-top: 15px" src={{asset('/img/visa.jpg')}} width="70px" height="35px">
                                        </div>
                                        <div class="col-sm-9">
                                            <img src={{asset('/img/jcb.png')}} width="70px" height="70px">
                                        </div>
                                        <div class="col-sm-9">
                                            <img src={{asset('/img/cash-on-delivery.png')}} width="70px" height="70px">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"></div>
        </section>
        <div class="define">
          <div class="product-list-wrap container">
            <div class="row">
                <div class="col-md-12">
                    <div class="space"></div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-6">
                            <details id="Details-collapsible-row-2-template--14675231342673__main" open="">
                                <summary role="button" aria-expanded="true" aria-controls="ProductAccordion-collapsible-row-2-template--14675231342673__main">
                                    <div class="summary__title">
                                        <svg class="icon icon-accordion color-foreground-accent-1" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M18.9836 5.32852L14.6715 1.01638L1.01638 14.6715L5.32852 18.9836L18.9836 5.32852ZM15.3902 0.297691C14.9933 -0.0992303 14.3497 -0.0992303 13.9528 0.297691L0.297691 13.9528C-0.0992301 14.3497 -0.0992305 14.9932 0.297691 15.3902L4.60983 19.7023C5.00675 20.0992 5.65029 20.0992 6.04721 19.7023L19.7023 6.04721C20.0992 5.65029 20.0992 5.00675 19.7023 4.60983L15.3902 0.297691Z" fill-rule="evenodd"></path>
                                            <path d="M11.7863 2.67056C11.9848 2.4721 12.3065 2.4721 12.505 2.67056L14.4237 4.58927C14.6222 4.78774 14.6222 5.1095 14.4237 5.30796C14.2252 5.50642 13.9035 5.50642 13.705 5.30796L11.7863 3.38925C11.5878 3.19079 11.5878 2.86902 11.7863 2.67056Z"></path>
                                            <path d="M8.93891 5.36331C9.13737 5.16485 9.45914 5.16485 9.6576 5.36331L11.5763 7.28202C11.7748 7.48048 11.7748 7.80225 11.5763 8.00071C11.3779 8.19917 11.0561 8.19917 10.8576 8.00071L8.93891 6.082C8.74045 5.88354 8.74045 5.56177 8.93891 5.36331Z"></path>
                                            <path d="M6.24307 8.20742C6.44153 8.00896 6.76329 8.00896 6.96175 8.20742L8.88047 10.1261C9.07893 10.3246 9.07893 10.6464 8.88047 10.8448C8.68201 11.0433 8.36024 11.0433 8.16178 10.8448L6.24307 8.92611C6.0446 8.72765 6.0446 8.40588 6.24307 8.20742Z"></path>
                                            <path d="M3.37296 10.8776C3.57142 10.6791 3.89319 10.6791 4.09165 10.8776L6.01036 12.7963C6.20882 12.9948 6.20882 13.3165 6.01036 13.515C5.8119 13.7134 5.49013 13.7134 5.29167 13.515L3.37296 11.5963C3.1745 11.3978 3.1745 11.076 3.37296 10.8776Z"></path></svg>
                                            <a class="h4 accordion__title"><strong>Chú ý về size</strong></a>
                                    </div>
    
                                </summary>
                                <div class="accordion__content rte" id="ProductAccordion-collapsible-row-2-template--14675231342673__main">
                                    <p>Kích thước sẽ khác nhau cho những trang phục khác nhau. Xin vui lòng kiểm tra bảng kích thước trong mô tả và đo cẩn thận. Hầu hết trang phục của chúng tôi đều có kích cỡ châu Á, vui lòng tăng một cỡ nếu không chắc chắn về kích cỡ.&nbsp;</p>
                                    <p>Hình ảnh mẫu của size M.</p>
                                    <div style="text-align: left;"><img src="https://cdn.shopify.com/s/files/1/1789/1993/files/uwowo_model_size_45f72955-1c3e-4215-be1a-30fd7461c6cc_480x480.png?v=1666766794" alt="uwowo model size" style="float: none;"></div>
                                </div>
                            </details>
                                  <h3 style="text-align: justify;"><span style="font-size: 13pt;"><strong>Thủ tục thuê:</strong></span></h3> <p style="text-align: justify;">Khi thuê đồ tại shop Dịt Dàng, Quý khách vui lòng thanh toán tiền thuê và giấy tờ thế chân. Những giấy tờ thế chân được chấp nhận: Giấy CMND, Hộ Chiếu (Passport), Cavet xe</p> <p style="padding-left: 30px;">1. Trường hợp Giấy tờ thế chân hợp lệ: “Thanh toán 2 lần tiền thuê + Giấy tờ thế chân”.</p> <p style="padding-left: 30px;">2. Quý khách không có giấy tờ thế chân: “Đặt cọc 100% giá trị của từng sản phẩm thuê”</p> <p style="text-align: justify;">Trường hợp Quý khách muốn đặt đồ trước ngày lấy, Quý khách vui lòng đặt cọc trước 30% hóa đơn thuê, và thanh toán phần tiền thuê còn lại khi nhận đồ.</p> <p style="text-align: justify;">Shop chỉ hỗ trợ đổi size (nếu không vừa) , không hoàn tiền lại khi quý khách đã mang đồ về hoặc hủy đặt hàng.</p> <p style="text-align: justify;">Khi hoàn tất trả đồ sẽ được hoàn trả giấy tờ thế chân hoặc tiền cọc.</p> 
                                  <h3 style="text-align: justify;"><span style="font-size: 13pt;"><strong>Thời gian thuê:</strong></span></h3> <p style="text-align: justify;">Thời gian thuê được tính theo “<strong>gói 3 ngày tính tiền 1 ngày</strong>” kể từ ngày nhận đồ, không kể sáng hay chiều.</p> <p style="text-align: justify;">Nếu quá thời gian thuê, chúng tôi sẽ tính thêm phí phụ thuê 20%/ngày trễ</p> <p style="text-align: justify;">Ví dụ: Quý khách lấy đồ trong ngày 05-10-2017, thì thời gian trả đồ sẽ trước 18h ngày 07-10-2017.</p> <p style="text-align: justify;">Thời gian làm việc: Thứ 2 – Thứ 7: 9h00 – 18h00, Chủ nhật: Nghỉ</p> 
                                </div>
                        <div class="col-md-6">
                            <div class="col-inner"><h3 style="text-align: justify;"><span style="font-size: 13pt;"><strong>Trách nhiệm của cửa hàng:</strong></span></h3> <p style="text-align: justify;">– Tư vấn khách hàng về giá cả và cách sử dụng sản phẩm thuê</p> <p style="text-align: justify;">– Trang phục cho thuê tại shop Dịt Dàng luôn trong tình trạng sử dụng tốt, đã được giặt ủi sạch sẽ, đầy đủ số lượng, và đúng với phiếu đặt hàng của khách.</p> <h3 style="text-align: justify;"><span style="font-size: 13pt;"><strong>Trách nhiệm của khách hàng:</strong></span></h3> <p style="text-align: justify;">– Quý khách vui lòng kiểm tra kỹ trang phục, đạo cụ, hoặc phụ kiện đính kèm theo trang phục trước khi nhận sản phẩm. shop Dịt Dàng không chịu trách nhiệm như: thiếu số lượng, hư hỏng… sau khi đã bàn giao.</p> <p style="text-align: justify;">– Trong thời gian sử dụng, Quý khách có trách nhiệm bảo quản tốt sản phẩm trong thời gian thuê.</p> <p style="text-align: justify;">– Sản phẩm khi giao trả phải ở trong tình trạng tốt như khi được giao. Mọi vấn đề phát sinh: hư hỏng, rách, sờn vải, lem màu, sai khác kiểu dáng ban đầu, thiếu số lượng, trường hợp dính bẩn nhiều khó giặt (quần, váy dài …) do khách hàng mà không thể khắc phục. Quý khách phải bồi hoàn giá trị của sản phẩm đó, tùy theo tình trạng lúc thuê (xem tại bảng giá thuê). Riêng những sản phẩm bị dính bẩn nhiều, shop Dịt Dàng sẽ tính phí phụ thu giặt đồ. Hoặc Quý khách tự giặt rồi trả cho shop.</p> <h3 style="text-align: justify;"><span style="font-size: 13pt;"><strong>Ưu đãi:</strong></span></h3> <p style="text-align: justify;">– shop Dịt Dàng cho thuê tặng thêm ưu đãi về thời gian cho Quý khách thuê trang phục với gói “<strong>Gói dịch vụ 3 ngày tính tiền 1 ngày</strong>” nhằm tạo cho Quý khách có điều kiện chuẩn bị tốt tiết mục biểu diễn hoặc sự kiện …</p> <p style="text-align: justify;">– Giảm giá cho số lượng nhiều, khách hàng thân thiết.</p> <p style="text-align: justify;">– Có nhận giao hàng tận nơi cho khách.</p></div>
                            <details id="Details-collapsible-row-1-template--14675231342673__main" open="">
                                    <summary role="button" aria-expanded="true" aria-controls="ProductAccordion-collapsible-row-1-template--14675231342673__main">
                                        <div class="summary__title">
                                        <svg class="icon icon-accordion color-foreground-accent-1" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0 3.75156C0 3.47454 0.224196 3.24997 0.500755 3.24997H10.647C10.9235 3.24997 11.1477 3.47454 11.1477 3.75156V5.07505V5.63362V6.10938V13.6616C10.9427 14.0067 10.8813 14.1101 10.5516 14.6648L7.22339 14.6646V13.6614H10.1462V4.25316H1.00151V13.6614H2.6842V14.6646H0.500755C0.224196 14.6646 0 14.44 0 14.163V3.75156Z"></path>
                                            <path d="M18.9985 8.08376L11.1477 6.10938V5.07505L19.6212 7.20603C19.8439 7.26203 20 7.46255 20 7.69253V14.1631C20 14.4401 19.7758 14.6647 19.4992 14.6647H17.3071V13.6615H18.9985V8.08376ZM11.1477 13.6616L13.3442 13.6615L13.3443 14.6647L10.5516 14.6648L11.1477 13.6616Z"></path>
                                            <path d="M7.71269 14.1854C7.71269 15.6018 6.56643 16.75 5.15245 16.75C3.73847 16.75 2.59221 15.6018 2.59221 14.1854C2.59221 12.7691 3.73847 11.6209 5.15245 11.6209C6.56643 11.6209 7.71269 12.7691 7.71269 14.1854ZM5.15245 15.7468C6.01331 15.7468 6.71118 15.0478 6.71118 14.1854C6.71118 13.3231 6.01331 12.6241 5.15245 12.6241C4.29159 12.6241 3.59372 13.3231 3.59372 14.1854C3.59372 15.0478 4.29159 15.7468 5.15245 15.7468Z"></path>
                                            <path d="M17.5196 14.1854C17.5196 15.6018 16.3733 16.75 14.9593 16.75C13.5454 16.75 12.3991 15.6018 12.3991 14.1854C12.3991 12.7691 13.5454 11.6209 14.9593 11.6209C16.3733 11.6209 17.5196 12.7691 17.5196 14.1854ZM14.9593 15.7468C15.8202 15.7468 16.5181 15.0478 16.5181 14.1854C16.5181 13.3231 15.8202 12.6241 14.9593 12.6241C14.0985 12.6241 13.4006 13.3231 13.4006 14.1854C13.4006 15.0478 14.0985 15.7468 14.9593 15.7468Z"></path></svg>
                                        <a class="h4 accordion__title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Thông tin vận chuyển
                                        </font></font></a>
                                        </div>
              
                                    </summary>
                                    <div class="accordion__content rte" id="ProductAccordion-collapsible-row-1-template--14675231342673__main">
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thời gian giao hàng bắt đầu sau khi đơn hàng của bạn được giao tùy thuộc vào phương thức giao hàng bạn chọn tại trang thanh toán. Sau khi gói hàng của bạn được giao, xác nhận giao hàng sẽ được gửi đến email của bạn.</font></font><br></p><p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VẬN CHUYỂN QUỐC TẾ</font></font></strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> *Vận chuyển thương mại: 7-15 ngày làm việc&nbsp;</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*Giao hàng nhanh: 3-7 ngày làm việc</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*ePacket/China Post: </font></font><br>
                                </details>
                                  <p><br><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thời gian giao hàng chậm trễ</font></font></strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> từ 15-40 ngày làm việc Do sự chậm trễ của đại dịch, do thiếu nhân viên và phải xử lý khối lượng lớn bưu kiện trong mùa lễ, việc vận chuyển quốc tế và giao hàng nội địa có thể bị chậm trễ.</font></font></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color:aliceblue">
            <center><div style="display: inline-block; width: 100%">
                <h3 style="text-transform: none;margin-top:15px; margin-bottom: 5px">Đánh giá của khách hàng</h3>
                <div class="col-md-9">
                    <div class="item2">
                        <h2>{{$totalstar}}/5 <i style="color: yellow" class="fa fa-star"></i></h2>
                        <p>{{$num}} Đánh giá</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="col-sm-6">
                        <div class="stars">
                            <div style="margin: auto" class="column">
                                <span>
                                    <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: yellow" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="rate-list">
                            <div class="timeline-star">
                                <a class="timing" style="width: 28%"></a>
                            </div>
                            <div class="timeline-star" style="margin-top: 15px">
                                <a class="timing" style="width: 8%"></a>
                            </div>
                            <div class="timeline-star" style="margin-top: 15px">
                                <a class="timing" style="width: 22%"></a>
                            </div>
                            <div class="timeline-star" style="margin-top: 15px">
                                <a class="timing" style="width: 8%"></a>
                            </div>
                            <div class="timeline-star" style="margin-top: 15px">
                                <a class="timing" style="width: 34%"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    
                </div>
            </div></center>
                <center><ul class="navbar-nav ms-auto" style="float: none" >
                    <!-- Authentication Links -->
                    @guest('customer')
                        <div style="display: inline-block">
                            <h4 style="text-transform: none;margin-top:15px">Đánh giá của khách hàng</h4>
                                @foreach ($review as $row)
                                    <div class="col-md-9">
                                        <p>{{$row->username}}</p>
                                        <img src={{$row->images}} width="150px" height="150px">
                                        <p>@for ($i = 1;$i<= $row->star; $i++)
                                            <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                        @endfor | Đã thuê tại shop</p><br>
                                        <a><strong>{{$row->description}}</strong></a>    
                                    </div>
                                @endforeach
                        </div>
                    @else
                        <div style="display: inline-block">
                            <h4 style="text-transform: none;margin-top:15px">Đánh giá của khách hàng</h4>
                            @foreach ($review as $row)
                                        <div class="col-md-9">
                                            <p><a class="fa fa-user fa-2x" aria-hidden="true"></a> {{$row->username}}</p>
                                            <img src={{$row->images}} width="150px" height="150px">
                                            <p>@for ($i = 1;$i<= $row->star; $i++)
                                                <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                            @endfor | Đã thuê tại shop</p><br>
                                            <a><strong>{{$row->description}}</strong></a>    
                                        </div>
                            
                            @endforeach
                        </div>
                        <form action="/reviews/addreview/{{$products->id}}" method="get" enctype="multipart/form-data">
                                    @method("PUT")
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="stars">
                                                    <form action="">
                                                      <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                                                      <label class="star star-5" for="star-5"></label>
                                                      <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                                                      <label class="star star-4" for="star-4"></label>
                                                      <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                                                      <label class="star star-3" for="star-3"></label>
                                                      <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                                                      <label class="star star-2" for="star-2"></label>
                                                      <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                                                      <label class="star star-1" for="star-1"></label>
                                                    </form>
                                                  </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input style="width:300px; height: 40px" class="form_control" placeholder="Đánh giá" id="description" name="description"> 
                                            </div>
                                            <div style="margin-top: 10px" class="col-md-12"> 
                                                <input type="file" id="images" name="images" accept=".png, .jpg, .jpeg" multiple/>
                                            </div>
                                            <div style="margin-top: 10px" class="col-md-12">
                                                <button style="width: 15rem; height: 5rem" class="send_btn">Gửi đánh giá</button>
                                            </div>
                                            </div>
                                    </form>
                        <!-- @foreach($reviewss as $re)
                            @if ($re->name_character == $products->name_character)
                                <div style="display: inline-block; width: 100%">
                                    <h3 style="margin-bottom: 5px; margin-top: 5px"> Đánh giá của bạn </h3>
                                    <a >@for ($i = 1;$i<= $re->star; $i++)
                                        <a style="color:yellow" class="fa fa-star " aria-hidden="true"></a>
                                    @endfor | Đã thuê tại shop</a><br>
                                        <a>{{$re->description}}</a>         
                                </div>  
                            @else                -->
                            
                            <!-- @endif -->
                        <!-- @endforeach -->
                    @endguest
                </ul></center>
            </div> 
        </div>
    </div>
    </div>
@endsection
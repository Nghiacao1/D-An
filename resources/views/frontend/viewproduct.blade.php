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
                                            <a style="color:brown" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: brown" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: brown" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: brown" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                        <span>
                                            <a style="color: brown" class="fa fa-star fa-2x" aria-hidden="true"></a>
                                        </span>
                                    </div>
                                </div>
                                <h4>Giá cho Thuê: {{$products->price}} VNĐ</h4>
                                <h4>Giá bán trang phục: </h4>
                                <h4><s>3.000.000 VNĐ</s><a style="margin-left:20px"></a>{{$products->sale_price}} VNĐ</h4>
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
                                        <button style="margin-top: 20px; width:20rem; height:5rem; background-color:brown; color:white" type="submit" form="form2" value="submit" >Thêm yêu thích</button><button style="width: 5rem; height:5rem; color:black" >2.78K</button>
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
                                            <a class="h4 accordion__title">Costume Size</a>
                                    </div>
    
                                </summary>
                                <div class="accordion__content rte" id="ProductAccordion-collapsible-row-2-template--14675231342673__main">
                                    <p>Kích thước sẽ khác nhau cho những trang phục khác nhau. Xin vui lòng kiểm tra bảng kích thước trong mô tả và đo cẩn thận. Hầu hết trang phục của chúng tôi đều có kích cỡ châu Á, vui lòng tăng một cỡ nếu không chắc chắn về kích cỡ.&nbsp;</p>
                                    <p>Hình ảnh mẫu của size M.</p>
                                    <div style="text-align: left;"><img src="https://cdn.shopify.com/s/files/1/1789/1993/files/uwowo_model_size_45f72955-1c3e-4215-be1a-30fd7461c6cc_480x480.png?v=1666766794" alt="uwowo model size" style="float: none;"></div>
                                </div>
                            </details>
                        </div>
                        <div class="col-md-6">
                            <details id="Details-collapsible-row-0-template--14675231342673__main" open="">
                                <summary role="button" aria-expanded="true" aria-controls="ProductAccordion-collapsible-row-0-template--14675231342673__main">
                                  <div class="summary__title">
                                    <svg class="icon icon-accordion color-foreground-accent-1" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M10 2.62639L8.54072 7.33639C8.34848 7.95687 7.79714 8.37696 7.17504 8.37696H2.45272L6.27316 11.2879C6.77645 11.6714 6.98704 12.3511 6.7948 12.9716L5.33552 17.6816L9.15596 14.7706C9.65925 14.3872 10.3408 14.3872 10.844 14.7706L14.6645 17.6816L13.2052 12.9716C13.013 12.3511 13.2236 11.6714 13.7268 11.2879L17.5473 8.37696H12.825C12.2029 8.37696 11.6515 7.95687 11.4593 7.33639L10 2.62639ZM10.4552 0.846855C10.3119 0.384382 9.68806 0.384382 9.54477 0.846855L7.63027 7.02616C7.56619 7.23298 7.38241 7.37301 7.17504 7.37301H0.979572C0.515888 7.37301 0.323098 7.99527 0.698226 8.28109L5.71047 12.1001C5.87823 12.2279 5.94843 12.4545 5.88435 12.6613L3.96984 18.8406C3.82656 19.3031 4.33129 19.6877 4.70642 19.4019L9.71865 15.5828C9.88642 15.455 10.1136 15.455 10.2813 15.5828L15.2936 19.4019C15.6687 19.6877 16.1734 19.3031 16.0302 18.8406L14.1157 12.6613C14.0516 12.4545 14.1218 12.2279 14.2895 12.1001L19.3018 8.28109C19.6769 7.99527 19.4841 7.37301 19.0204 7.37301H12.825C12.6176 7.37301 12.4338 7.23298 12.3697 7.02616L10.4552 0.846855Z" fill-rule="evenodd"></path></svg>
                                    <a class="h4 accordion__title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                      Đặt mua + Còn hàng
                                    </font></font></a>
                                  </div>
                
                                </summary>
                                <div class="accordion__content rte" id="ProductAccordion-collapsible-row-0-template--14675231342673__main">
                                  <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bất kỳ mặt hàng nào được đặt hàng + còn hàng trong đơn hàng sẽ được vận chuyển khi mặt hàng được đặt hàng đến nơi.</font></font></strong></p><p><strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Còn hàng</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> : *Được dán nhãn&nbsp; </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【Còn hàng】</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> trên tiêu đề hoặc trong phần mô tả&nbsp;</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn hàng của bạn sẽ được xử lý và giao trong vòng 48 giờ.&nbsp;</font></font></p><p></p><p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các mặt hàng đặt hàng trước</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> : *Được dán nhãn&nbsp; </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">【Đặt trước】</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> trên tiêu đề hoặc trong mô tả </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thường mất vài tháng để sản xuất hàng loạt. Đơn hàng của bạn sẽ được xử lý ngay khi trang phục có trong kho. Thời gian dự kiến &ZeroWidthSpace;&ZeroWidthSpace;đến có thể được tìm thấy trong mô tả bên dưới. ETA có thể bị chậm trễ.</font></font><br></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hãy liên hệ với chúng tôi sớm nhất có thể nếu bạn cần bất kỳ thay đổi nào đối với đơn đặt hàng trước của mình.</font></font></p>
                                  
                                </div>
                              </details>
                        </div>
                        <div class="product__accordion accordion quick-add-hidden" style="margin-top: 30px">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
                    
                                    <p><br><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thời gian giao hàng chậm trễ</font></font></strong><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> từ 15-40 ngày làm việc Do sự chậm trễ của đại dịch, do thiếu nhân viên và phải xử lý khối lượng lớn bưu kiện trong mùa lễ, việc vận chuyển quốc tế và giao hàng nội địa có thể bị chậm trễ.</font></font></p>
                        
                            </div>
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
                        <img src={{asset('/img/mastercard.jpg')}} width="70px" height="70px">
                            
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="col-sm-6">
                        <div class="stars">
                            <div style="margin: auto" class="column">
                                <span>
                                    <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                                <span>
                                    <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                </span>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="stars">
                                <div style="margin: auto" class="column">
                                    <span>
                                        <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
                                    </span>
                                    <span>
                                        <a style="color: brown" class="fa fa-star-o " aria-hidden="true"></a>
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
                    <img src={{asset('/img/jcb.png')}} width="70px" height="70px">
                </div>
            </div></center>
                <center><ul class="navbar-nav ms-auto" style="float: none" >
                    <!-- Authentication Links -->
                    @guest('customer')
                    @foreach ($review as $row)
                    <div style="display: inline-block">
                        <h4 style="text-transform: none;margin-top:15px">Đánh giá của khách hàng</h4>
                            <div class="col-md-9">
                                <p><img width="20" height="20" alt="hinhanh" src="{{Avatar::create($row->username)->toBase64() }}">{{$row->username}}</p>
                                <img src={{$row->images}} width="150px" height="150px">
                                <p>@for ($i = 1;$i<= $row->star; $i++)
                                    <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                @endfor | Đã thuê tại shop</p><br>
                                <a>{{$row->description}}</a>    
                            </div>
                    </div>
                    @endforeach
                    @else
                    <div style="display: inline-block">
                        <h4 style="text-transform: none;margin-top:15px">Đánh giá của khách hàng</h4>
                        @foreach ($review as $row)
                                    <div class="col-md-9">
                                        <p><img width="20" height="20" alt="hinhanh" src="{{Avatar::create($row->username)}}">{{$row->username}}</p>
                                        <img src={{$row->images}} width="150px" height="150px">
                                        <p>@for ($i = 1;$i<= $row->star; $i++)
                                            <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                        @endfor | Đã thuê tại shop</p><br>
                                        <a>{{$row->description}}</a>    
                                    </div>
                        
                        @endforeach
                    </div>
                        @foreach($reviewss as $re)
                            @if ($re->name_character == $products->name_character)
                                <div style="display: inline-block; width: 100%">
                                    <h3 style="margin-bottom: 5px; margin-top: 5px"> Đánh giá của bạn </h3>
                                    <a >@for ($i = 1;$i<= $re->star; $i++)
                                        <a style="color:brown" class="fa fa-star " aria-hidden="true"></a>
                                    @endfor | Đã thuê tại shop</a><br>
                                        <a>{{$re->description}}</a>         
                                </div>  
                            @else               
                                <form action="/reviews/addreview/{{$products->id}}" method="get">
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
                                                <input class="form_control" placeholder="Đánh giá" id="description" name="description"> 
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form_control" placeholder="ảnh" id="images" name="images">                          
                                            </div>
                                            <div class="col-md-12">
                                                <button style="width: 150" class="send_btn">Send</button>
                                            </div>
                                            </div>
                                    </form>
                            @endif
                        @endforeach
                    @endguest
                </ul></center>
            </div> 
        </div>
    </div>
    </div>
@endsection
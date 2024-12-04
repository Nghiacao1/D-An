@extends('layouts.appfront')

@section('content')
<center><div style="margin-top: -20px" id="slideshow">
    <div class="slide-wrapper">
        <div class="slide"><img src={{asset('/img/banner0.png')}}></div>
        <div class="slide"><img src={{asset('/img/banner2.jpg')}}></div>
        <div class="slide"><img src={{asset('/img/banner3.jpg')}}></div>
        <div class="slide"><img src={{asset('/img/banner7.jpg')}}></div>
        <div class="slide"><img src={{asset('/img/banner4.jpg')}}></div>
        <div class="slide"><img src={{asset('/img/banner5.jpeg')}}></div>
        <div class="slide"><img src={{asset('/img/banner6.png')}}></div>
        <div class="slide"><img src={{asset('/img/banner8.jpg')}}></div>
        <div class="slide"><img src={{asset('/img/banner9.jpg')}}></div>
        <div class="slide"><img src={{asset('/img/banner10.jpg')}}></div>
    </div>
  </div>
</div></center>
    <div class="wp-products">
        <ul style="margin-left: -70px" class="list-products">
            @foreach($sanpham as $row)
            <a href="/product/{{$row->id}}"><div style="margin-bottom: 150px" style="background-color:black" class="item">
                <img width="290px" height="300px" src={{$row->images}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: brown" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: brown" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: brown" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: brown" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: brown" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>
                <a href="/product/{{$row->id}}"><div style="margin-top:20px;color: black" class="name">{{$row->name_character}}</div></a>
                <div class="price">Giá thuê {{$row->price}} VNĐ</div>
                <div class="price">Giá bán {{$row->sale_price}} VNĐ</div>
            </div>
            </a>
            @endforeach    
        </ul>    
    </div>
@endsection
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
    <div class="wp-products">
        <ul style="margin-left: -70px" class="list-products">
            @foreach($productsShow as $row)
            <a href="/product/{{$row->id}}"><div style="background-color:black" class="item">
                <img width="290px" height="300px" src={{$row->images}} alt="">
                <div style="margin-top: 15px" class="stars">
                    <div style="margin: auto" class="column">
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                        <span>
                            <a style="color: yellow" class="fa fa-star" aria-hidden="true"></a>
                        </span>
                    </div>
                </div>
                <a href="/product/{{$row->id}}"><div style="margin-top:40px;color: black" class="name">{{$row->name}}</div></a>
                <div class="price">Giá {{$row->price}} VNĐ</div>
            </div>
            </a>
            @endforeach    
        </ul>    
    </div>
@endsection
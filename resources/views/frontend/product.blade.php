@extends('layouts.appfront')

@section('content')
    <div class="form-control-1" style="margin-top: -30px">
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
                <div class="price">Giá thuê {{number_format($row->price,0,",",".")}} VNĐ</div>
                <div class="price">Giá bán {{number_format($row->sale_price,0,",",".")}} VNĐ</div>
            </div>
            </a>
            @endforeach    
        </ul>  
        <nav style="margin-right: 600px" aria-label="Page navigation example">
            {{ $productsShow->links() }}
    </div>
@endsection
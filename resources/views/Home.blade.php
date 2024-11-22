@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Tổng Quan<small><img src="{{asset('img/ditdang-footer.png')}}"></small>
            </h1>
        </div>
    </div>
    <!-- /. ROW  -->

    <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-users fa-5x"></i>
                        <h3>
                            {{$cuscount}}
                        </h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        Khách Hàng 

                    </div>
                </div>
            </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-blue">
                <div class="panel-body">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                    <h3> </h3>
                </div>
                <div class="panel-footer back-footer-blue">
                    Số lượng đồ đã bán

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-red">
                <div class="panel-body">
                    <i class="fa fa fa-building fa-5x"></i>
                    <h3></h3>
                </div>
                <div class="panel-footer back-footer-red">
                    Số lượng đồ đã cho thuê
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-brown">
                <div class="panel-body">
                    <i class="fa fa-money fa-5x"></i>
                    <h3>  VNĐ</h3>
                </div>
                <div class="panel-footer back-footer-brown">
                    Thu nhập    
                </div>
            </div>
        </div>
    </div>


    <div style="margin-left: -16.5px" class="row">
        <div class="col-sm">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="piechart" style="width: 500px; height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="columnchart_material" style="width: 500px; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tasks Panel
                </div>
                <div class="panel-body">
                    <div class="list-group">

                        <a href="#" class="list-group-item">
                            <span class="badge">7 minutes ago</span>
                            <i class="fa fa-fw fa-comment"></i> Commented on a post
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">16 minutes ago</span>
                            <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">36 minutes ago</span>
                            <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">1 hour ago</span>
                            <i class="fa fa-fw fa-user"></i> A new user has been added
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">1.23 hour ago</span>
                            <i class="fa fa-fw fa-user"></i> A new user has added
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">yesterday</span>
                            <i class="fa fa-fw fa-globe"></i> Saved the world
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Responsive Table Example
                </div> 
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Neolock UserName</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td><a href="/customers/{{$row->id}}">{{$row->fullname}}</a></td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->username}}</td>
                                        <td>{{$row->neolock_username}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
@endsection

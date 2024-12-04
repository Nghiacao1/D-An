@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h2> Quản lý thông tin khách hàng </h2></div>
        <div class="panel-body">
            <div id="buildings-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control-2 form-control-sm" placeholder="" aria-controls="customers-table"></label></div>
            <div class="d-flex flex-row-reverse"><a style="width: 100px;background-color: green" class="btn btn-primary" href="/customers/create">Thêm</a></div>
            <p></p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
        
                        <tr>
                            <th>Tên người dùng</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach($customers as $row)
                    <tr>
                        <td>{{$row->username}}</td>
                        <td>{{$row->fullname}}</td>
                       
                        <td>{{$row->email}}</td>
                        <td><a style="height: 30px;width: 40px" class="btn btn-primary" href="/customers/{{$row->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a style="width: 40px;height: 30px;background-color: darkorange" href="/customers/change-pass" class="btn btn-info btn-sm waves-effect waves-light btn-change" data-toggle="tooltip" data-placement="top" title="Đổi mật khẩu" data-title="{{ $row->username }}" data-id="{{ $row->id }}"><i class="fa fa-key"></i></a>
                            <a style="height: 30px;width: 40px;background-color: brown" class="btn btn-primary" href="customers/edit/{{$row->id}}"><i class="fa fa-pencil"></i></a>  
                            <form method="POST" style="display: inline-block" action="customers/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                                @method('DELETE')
                                @csrf
                                    <button style="height: 30px;width: 40px;background-color: red" class="btn btn-primary" type="submit"><i class="fa fa-trash"></i></button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="change-pass" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" >
                    <div class="modal-dialog modal-dialog-centered dialogExport">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0">Đổi mật khẩu</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="customers/changePass" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <input type="hidden" name="id" id="customer-id">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="new_pass" class="control-label">Mật khẩu mới <span style="color: red">*</span></label>
                                                        <input type="password" class="form-control" id="new_pass" name="new_pass" minlength="6" maxlength="20" required placeholder="Nhập mật khẩu mới">
                                                        <span toggle="#new_pass" class="fa fa-eye new_pass eyes"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="confirm_pass" class="control-label">Xác nhận mật khẩu <span style="color: red">*</span></label>
                                                        <input type="password" class="form-control" id="confirm_pass" required minlength="6" maxlength="20" placeholder="Nhập xác nhận mật khẩu">
                                                        <span toggle="#confirm_pass" class="fa fa-eye confirm_pass eyes"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12" style="margin-left: auto;">
                                                    <div class="row">
                                                        <div class="col-6 pr-0">
                                                            <a href="javascript:void(0);" class="btn btn-secondary waves-effect waves-light btn-block" data-dismiss="modal">Hủy</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="submit" class="btn btn-success waves-effect waves-light btn-block">Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <center><nav aria-label="Page navigation example">
        {{ $customers->links() }}
        </center>
</div>
@endsection
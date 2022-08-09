@extends('layouts.admin')

@section('title', 'Admin Order List')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Order List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Order List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <h4 class="mb-0">Order List</h4>
                <hr/>
                <div class="row gy-3">
                    <div class="col-md-10">

                        <div class="table-responsive">
                            <br>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <p></p>
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                               onclick="return !window.open(this.href, '', 'top=20 left=50 width=800 height=700')">

                                                {{$rs->user->name}}</a>
                                        </td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->address}}</td>
                                        <td>{{$rs->total}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>
                                            <a href="{{route('admin_order_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=20 left=50 width=1000 height=800')">
                                                <div class="font-22 text-primary"> <i class="fadeIn animated bx bx-edit"></i> </div>

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col-12">
                        <div id="todo-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection

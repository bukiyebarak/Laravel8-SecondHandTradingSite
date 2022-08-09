
@extends('layouts.home')

@section('title', 'My Orders')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">User Order</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start page content-->
            <section class="py-4">
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card shadow-none mb-3 mb-lg-0">
                                    <div class="card-body">
                                        @include('home.usermenu')
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">

                                        @include('home.message')
                                        <div class="table-responsive">
                                            <br>
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
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
                                                        <td>{{$rs->name}}</td>
                                                        <td>{{$rs->email}}</td>
                                                        <td>{{$rs->phone}}</td>
                                                        <td>{{$rs->address}}</td>
                                                        <td>{{$rs->total}}</td>
                                                        <td>{{$rs->created_at}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td><a href="{{route('user_order_show',['id'=>$rs->id])}}">
                                                                <i class="bx bx-edit fs-4"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>

                                        <div class="row gy-3">
                                            <div class="col-md-10">

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
                    </div>
                </div>
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

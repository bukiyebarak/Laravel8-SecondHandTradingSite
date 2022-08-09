@php
    $data=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', $data->title)
@section('description') {{$data->description}}
@endsection
@section('keywords',$data->keywords)

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">Review Detail</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Review Detail</li>
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
                    <h3 class="d-none"></h3>
                    <div class="card">
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
                                <div class="card shadow-none mb-0">
                                    <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product</th>
                                        <th>Subject</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th style="..." colspan="3">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @include('home.message')
                                    @foreach($datalist as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>
                                             <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}" target="_blank"> {{$rs->product->title}} </a>

                                         </td>
                                         <td>{{$rs->subject}}</td>
                                         <td>{{$rs->review}}</td>
                                         <td>{{$rs->rate}}</td>
                                         <td>{{$rs->status}}</td>
                                         <td>{{$rs->created_at}}</td>
                                         <td>
                                             <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you Sure')">
                                                 <div class="font-22 text-primary">  <i class="bx bx-trash fs-4"></i> </div>
                                             </a>
                                         </td>
                                     </tr>

                                    @endforeach
                                    </tbody>

                                </table>
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

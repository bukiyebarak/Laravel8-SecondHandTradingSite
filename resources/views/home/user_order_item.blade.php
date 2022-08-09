@extends('layouts.home')

@section('title', 'Order Item')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">User Order Items</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i
                                                class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Items</li>
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
                                        <!--one product-->
                                        @foreach($datalist as $rs)
                                            <div class="my-4 border-top"></div>
                                            <div class="row align-items-center g-3">
                                                <div class="col-12 col-lg-6">
                                                    <div class="d-lg-flex align-items-center gap-2">
                                                        <div class="cart-img text-center text-lg-start">
                                                            @if($rs->product->image!=null)
                                                                <img src="{{Storage::url($rs->product->image)}}"
                                                                     height="60" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="cart-detail text-center text-lg-start">
                                                            <h6 class="mb-2"><a
                                                                    href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"> {{$rs->product->title}}</a>
                                                            </h6>
                                                            <p class="mb-2">Price: <span>{{$rs->product->price}}₺</span>
                                                            </p>
                                                            <h5 class="mb-0">
                                                                Total:{{$rs->total}}₺</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <div class="cart-action text-center">
                                                        <h6 class="mb-2">Quantity</h6><hr>
                                                        {{$rs->quantity}}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <div class="cart-action text-center">
                                                        <h6 class="mb-2">Status</h6>
                                                        <hr>
                                                        {{$rs->status}}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <div class="cart-action text-center">
                                                        <h6 class="mb-2">Note</h6><hr>
                                                        {{$rs->note}}
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach

                                    <!-- end one product-->
                                        <br>
                                        <div class="checkout-form p-3 bg-dark-1">
                                            <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                                <div class="card-body">
                                                    <h5 class="mb-0">Subtotal: <span class="float-end">{{$rs->order->total}}₺</span></h5>

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
                    </div>
                </div>
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

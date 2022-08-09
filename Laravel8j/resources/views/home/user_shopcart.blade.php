@extends('layouts.home')

@section('title', 'My Shopcart')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">User Shopcart</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i
                                                class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Shopcart Detail</li>
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
                                        @php
                                        $total=0;
                                        @endphp
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
                                                                Total:{{$rs->product->price * $rs->quantity}}₺</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <div class="cart-action text-center">
                                                        <form
                                                            action="{{route('user_shopcart_update',['id'=>$rs->id])}}"
                                                            method="post">
                                                            @csrf
                                                            <input class="form-control rounded-0" name="quantity" type="number"
                                                                   value="{{$rs->quantity}}" min="1"
                                                                   max="{{$rs->product->quantity}}"
                                                                   onchange="this.form.submit()">
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <div class="text-center">
                                                        <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                                            <a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" class="btn btn-light rounded-0 btn-ecomm"  onclick="return confirm('Delete! Are you sure?')">
                                                                <i class='bx bx-trash'></i>
                                                                Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @php
                                        $total += $rs->product->price * $rs->quantity;
                                    @endphp

                                    @endforeach

                                    <!-- end one product-->
                                        <br>
                                    <div class="checkout-form p-3 bg-dark-1">
                                        <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                            <div class="card-body">
                                                <p class="mb-2">Subtotal: <span class="float-end">{{$total}}₺</span>
                                                </p>
                                                <p class="mb-2">Shipping: <span class="float-end">Free Shopping</span>
                                                </p>
                                                <p class="mb-0">Discount: <span class="float-end">--</span>
                                                </p>
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-0">Order Total: <span class="float-end">{{$total}}₺</span></h5>
                                                <div class="my-4"></div>

                                                <form action="{{route('user_order_add')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="total" value="{{$total}}">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-white btn-ecomm">
                                                            Proceed to Checkout
                                                        </button>
                                                    </div>
                                                </form>

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
                </div>

                </div>
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

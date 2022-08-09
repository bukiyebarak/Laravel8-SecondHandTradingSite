@extends('layouts.home')

@section('title', 'Order Products')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">Order</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Shipping Address</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Products</li>
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
                    <div class="my-5">
                        <section class="py-4">
                            <div class="container">
                                <div class="shop-cart">
                                    <form action="{{route('user_order_store')}}" method="post">
                                       @csrf
                                        <div class="row">
                                            <div class="col-12 col-xl-6">
                                                <div class="checkout-details">
                                                    <div class="card rounded-0">
                                                        <div class="card-body">
                                                            <div class="border p-3">
                                                                <h2 class="h5 mb-0">Order Details</h2>
                                                                <div class="my-3 border-bottom"></div>
                                                                <div class="form-body">
                                                                    <form class="row g-3">
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Name &
                                                                                Surname</label>
                                                                            <input type="text" name="name"
                                                                                   value="{{Auth::user()->name}}"
                                                                                   class="form-control rounded-0">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">E-mail</label>
                                                                            <input type="text" name="email"
                                                                                   value="{{Auth::user()->email}}"
                                                                                   class="form-control rounded-0">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Phone
                                                                                Number</label>
                                                                            <input type="text" name="phone"
                                                                                   value="{{Auth::user()->phone}}"
                                                                                   class="form-control rounded-0">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Address </label>
                                                                            <input type="text" name="address"
                                                                                   value="{{Auth::user()->address}}"
                                                                                   class="form-control rounded-0">
                                                                        </div>
                                                                        <br>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="checkout-payment">
                                                    <div class="card rounded-0 shadow-none">
                                                        <div class="card-body">
                                                            <div class="border p-3">
                                                                <h2 class="h5 mb-0">Payment Details Total ={{$total}}₺ </h2>
                                                                <div class="my-3 border-bottom"></div>
                                                                <div class="input">
                                                                    <input type="hidden" name="total" value="{{$total}}">

                                                                </div>
                                                                <div class="form-body">
                                                                        <div class="col-md-12">
                                                                            <label class="form-label"> Card Name & Surname</label>
                                                                            <input type="text" name="cardname" value="{{Auth::user()->name}}" class="form-control rounded-0">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Card Number</label>
                                                                            <input type="number" name="cardnumber" value="" class="form-control rounded-0">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label class="form-label"> Valid Date mm/yy</label>
                                                                            <input type="text" name="date"
                                                                                   value=""
                                                                                   class="form-control rounded-0">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Secret Number </label>
                                                                            <input type="text" name="key"
                                                                                   value=""
                                                                                   class="form-control rounded-0">
                                                                        </div>
                                                                    <br>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-white btn-ecomm">
                                                        Proceed to Checkout
                                                        <i class='bx bx-chevron-right'></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                    <!--end row-->
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

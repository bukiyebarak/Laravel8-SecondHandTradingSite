@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', $setting->title)
@section('description') {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')
    @include('home._slider')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start information-->
            <section class="py-3 border-top border-bottom">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                        <div class="col p-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-1 text-white"><i class='bx bx-taxi'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0">FREE SHIPPING &amp; RETURN</h6>
                                    <p class="mb-0">Free shipping on all orders over $49</p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-1 text-white"><i class='bx bx-dollar-circle'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0">MONEY BACK GUARANTEE</h6>
                                    <p class="mb-0">100% money back guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-1 text-white"><i class='bx bx-support'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0">ONLINE SUPPORT 24/7</h6>
                                    <p class="mb-0">Awesome Support for 24/7 Days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end information-->
            <!--start Featured product-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">DEALS OF THE DAY</h5>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                            <!--start single product -->
                            @foreach($daily as $rs)
                                <div class="col">
                                    <div class="card rounded-0 product-card">
                                        <div class="card-header bg-transparent border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-end gap-3">
                                                <a href="javascript:;">
                                                    <div class="product-compare"><span><i class='bx bx-git-compare'></i> Compare</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:;">
                                                    <div class="product-wishlist"><i class='bx bx-heart'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                            <img src="{{Storage::url($rs->image)}}"
                                                 class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body">
                                            <div class="product-info">
                                                <a href="javascript:;">
                                                    <p class="product-catergory font-13 mb-1">Like New</p>
                                                </a>
                                                <a href="javascript:;">
                                                    <h6 class="product-name mb-2">{{$rs->title}}</h6>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <div class="mb-1 product-price"><span
                                                            class="me-1 text-decoration-line-through">{{$rs->price * 1.2}}₺</span>
                                                        <span class="text-white fs-5">{{$rs->price}}₺</span>
                                                    </div>
                                                    @php
                                                        $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                        $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                                    @endphp
                                                    <div class="cursor-pointer ms-auto">

                                                        <div class="rates cursor-pointer font-13">
                                                            <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                            <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                            <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                            <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                            <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-action mt-2">
                                                    <div class="d-grid gap-2">

                                                        <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}"
                                                              method="post">
                                                            @csrf
                                                            <input class="input-group" type="hidden" name="quantity"
                                                                   type="number" value="1">
                                                            <button type="submit" class="btn btn-light btn-ecomm"><i
                                                                    class='bx bxs-cart-add'></i>Add to Cart
                                                            </button>
                                                        </form>
                                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                                           class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick
                                                            View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!--end single product -->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end Featured product-->
            <!--start New Arrivals-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">New Arrivals</h5>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="new-arrivals owl-carousel owl-theme">
                            <!--start last product-->
                            @foreach($last as $rs)
                                <div class="item">
                                    <div class="card rounded-0 product-card">
                                        <div class="card-header bg-transparent border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="javascript:;">
                                                    <div class="product-wishlist"><i class='bx bx-heart'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                            <img src="{{Storage::url($rs->image)}}"
                                                 class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body">
                                            <div class="product-info">
                                                <a href="javascript:;">
                                                    <p class="product-catergory font-13 mb-1"></p>
                                                </a>
                                                <a href="javascript:;">
                                                    <h6 class="product-name mb-2">{{$rs->title}}</h6>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <div class="mb-1 product-price"><span
                                                            class="me-1 text-decoration-line-through">{{$rs->price * 1.2}}₺</span>
                                                        <span class="text-white fs-5">{{$rs->price}}₺</span>
                                                    </div>
                                                    @php
                                                        $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                        $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                                    @endphp
                                                    <div class="cursor-pointer ms-auto"><span> {{$countreview}} Review(s)</span>
                                                        <div class="cursor-pointer ms-auto">
                                                            <div class="rates cursor-pointer font-13">
                                                                <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                                <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                                <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                                <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                                <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-action mt-2">
                                                    <div class="d-grid gap-2">
                                                        <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}"
                                                              method="post">
                                                            @csrf
                                                            <input class="input-group" type="hidden" name="quantity"
                                                                   type="number" value="1">
                                                            <button type="submit" class="btn btn-light btn-ecomm"><i
                                                                    class='bx bxs-cart-add'></i>Add to Cart
                                                            </button>
                                                        </form>
                                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                                           class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick
                                                            View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!--end last product-->

                        </div>
                    </div>
                </div>
            </section>
            <!--end New Arrivals-->
            <!--start Advertise banners-->
            <section class="py-4">
                <div class="container">
                    <div class="add-banner">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <img src="{{asset('assets')}}/images/promo/04.png" class="card-img-top" alt="...">
                                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                            class="">-10%</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Sunglasses Sale</h5>
                                        <p class="card-text">See all Sunglasses and get 10% off at all Sunglasses</p> <a
                                            href="javascript:;" class="btn btn-light btn-ecomm">SHOP BY GLASSES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                            class="">-80%</span>
                                    </div>
                                    <div class="card-body text-center mt-5">
                                        <h5 class="card-title">Woman Clothes Sales</h5>
                                        <p class="card-text">Buy Woman Clothes products and get 30% off at all Woman
                                            Clothes</p>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm">SHOP BY CLOTHES</a>
                                    </div>
                                    <img src="{{asset('assets')}}/images/promo/02.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <img src="{{asset('assets')}}/images/promo/06.png" class="card-img h-100" alt="...">
                                    <div class="card-img-overlay text-center top-20">
                                        <div class="border border-white border-3 py-3 bg-dark-3">
                                            <h5 class="card-title">Fashion Summer Sale</h5>
                                            <p class="card-text text-uppercase fs-1 text-white lh-1 mt-3 mb-2">Up to 80%
                                                off</p>
                                            <p class="card-text fs-5">On top Fashion Brands</p>    <a
                                                href="javascript:;" class="btn btn-white btn-ecomm">SHOP BY FASHION</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                            class="">-50%</span>
                                    </div>
                                    <div class="card-body text-center">
                                        <img src="{{asset('assets')}}/images/promo/07.png" class="card-img-top"
                                             alt="...">
                                        <h5 class="card-title fs-1 text-uppercase">Super Sale</h5>
                                        <p class="card-text text-uppercase fs-4 text-white lh-1 mb-2">Up to 50% off</p>
                                        <p class="card-text">On All Electronic</p> <a href="javascript:;" class="btn btn-light btn-ecomm">
                                            HURRY UP!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end Advertise banners-->
            <!--picked for you-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">Picked For You</h5>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="browse-category owl-carousel owl-theme">
                            @foreach($picked as $rs)
                                <div class="item">
                                    <div class="card rounded-0 product-card border">
                                        <div class="card-body">
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px"
                                                 class="img-fluid" alt="...">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h6 class="mb-1 text-uppercase">{{$rs->title}}</h6>
                                            <p class="mb-0 font-12 text-uppercase">{{$rs->price}}₺</p>
                                            <div class="d-grid gap-2">
                                                <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                                   class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick
                                                    View</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <!--end categories-->
            <!--start support info-->
            <section class="py-4 bg-dark-1">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group">
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-cart'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">Free delivery</h2>
                                <p class="text-capitalize">Free delivery over $199</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                                    et dapib.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-credit-card'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">Secure payment</h2>
                                <p class="text-capitalize">We possess SSL / Secure сertificate</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                                    et dapib.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-dollar-circle'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">Free returns</h2>
                                <p class="text-capitalize">We return money within 30 days</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                                    et dapib.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-support'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">Customer Support</h2>
                                <p class="text-capitalize">Friendly 24/7 customer support</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                                    et dapib.</p>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end support info-->
            <!--start brands-->
            <section class="py-4">
                <div class="container">
                    <h3 class="d-none">Brands</h3>
                    <div class="brand-grid">
                        <div class="brands-shops owl-carousel owl-theme border">
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/01.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/02.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/03.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/04.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/05.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/06.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{asset('assets')}}/images/brands/07.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end brands-->
            <!--start bottom products section-->
            <section class="py-4 border-top">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <div class="col">
                            <div class="bestseller-list mb-3">
                                <h6 class="mb-3 text-uppercase">Best Selling Products</h6>
                                @foreach($slider as $rs)
                                <div class="d-flex align-items-center">
                                    <div class="bottom-product-img">
                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                            <img src="{{Storage::url($rs->image)}}"
                                                 width="100"  alt="...">
                                        </a>
                                    </div>
                                    <div class="ms-0">
                                        <h6 class="mb-0 fw-light mb-1">{{$rs->title}}</h6>
                                        @php
                                            $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                            $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                        @endphp
                                        <div class="cursor-pointer ms-auto">
                                            <div class="rates cursor-pointer font-13">
                                                <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-white"><strong>{{$rs->price}}₺</strong>
                                        </p>
                                    </div>
                                </div>
                                <hr/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-list mb-3">
                                <h6 class="mb-3 text-uppercase">Featured Products</h6>
                                @foreach($picked as $rs)
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-product-img">
                                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                                <img src="{{Storage::url($rs->image)}}"
                                                     width="100"  alt="...">
                                            </a>
                                        </div>
                                        <div class="ms-0">
                                            <h6 class="mb-0 fw-light mb-1">{{$rs->title}}</h6>
                                            @php
                                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                            @endphp
                                            <div class="cursor-pointer ms-auto">
                                                <div class="rates cursor-pointer font-13">
                                                    <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                    <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                    <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                    <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                    <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white"><strong>{{$rs->price}}₺</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="new-arrivals-list mb-3">
                                <h6 class="mb-3 text-uppercase">New arrivals</h6>
                                @foreach($last as $rs)
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-product-img">
                                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                                <img src="{{Storage::url($rs->image)}}"
                                                     width="100"  alt="...">
                                            </a>
                                        </div>
                                        <div class="ms-0">
                                            <h6 class="mb-0 fw-light mb-1">{{$rs->title}}</h6>
                                            @php
                                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                            @endphp
                                            <div class="cursor-pointer ms-auto">
                                                <div class="rates cursor-pointer font-13">
                                                    <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                    <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                    <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                    <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                    <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white"><strong>{{$rs->price}}₺</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="top-rated-products-list mb-3">
                                <h6 class="mb-3 text-uppercase">Top rated Products</h6>
                                @foreach($picked as $rs)
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-product-img">
                                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                                <img src="{{Storage::url($rs->image)}}"
                                                     width="100"  alt="...">
                                            </a>
                                        </div>
                                        <div class="ms-0">
                                            <h6 class="mb-0 fw-light mb-1">{{$rs->title}}</h6>
                                            @php
                                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                            @endphp
                                            <div class="cursor-pointer ms-auto">
                                                <div class="rates cursor-pointer font-13">
                                                    <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                    <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                    <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                    <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                    <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white"><strong>{{$rs->price}}₺</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end bottom products section-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

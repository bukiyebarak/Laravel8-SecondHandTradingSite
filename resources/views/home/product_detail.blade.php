@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $data->title)
@section('description') {{$data->description}}
@endsection
@section('keywords',$data->keywords)

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">Product Detail</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i
                                                class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="javascript:;">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
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
                        <!--start product detail-->
                        <section class="py-4">
                            <div class="container">
                                <div class="product-detail-card">
                                    <div class="product-detail-body">
                                        <div class="row g-0">
                                            <div class="col-12 col-lg-5">
                                                <div class="image-zoom-section">
                                                    <div class="product-gallery owl-carousel owl-theme border mb-3 p-3"
                                                         data-slider-id="1">
                                                        <div class="item">
                                                            <img src="{{Storage::url($data->image)}}" class="img-fluid"
                                                                 alt="">
                                                        </div>
                                                        @foreach($datalist as $rs)
                                                            <div class="item">
                                                                <img src="{{Storage::url($rs->image)}}"
                                                                     class="img-fluid" alt="">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="owl-thumbs d-flex justify-content-center"
                                                         data-slider-id="1">
                                                        <button class="owl-thumb-item">
                                                            <img src="{{Storage::url($data->image)}}" class="img-fluid"
                                                                 alt="">
                                                        </button>

                                                        @foreach($datalist as $rs)
                                                            <button class="owl-thumb-item">
                                                                <img src="{{Storage::url($rs->image)}}" class="" alt="">
                                                            </button>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="product-info-section p-3">
                                                    <h3 class="mt-3 mt-lg-0 mb-0">{{$data->title}}</h3>
                                                    @php
                                                        $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
                                                        $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                                                    @endphp

                                                    <div class="product-rating d-flex align-items-center mt-2">
                                                        <div class="rates cursor-pointer font-13">
                                                            <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                            <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                            <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                            <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                            <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                        </div>

                                                        <div class="ms-1">
                                                            <a href="#">{{$countreview}} Review(s) {{$avgrev}} / Add
                                                                Review </a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-3 gap-2">
                                                        <h5 class="mb-0 text-decoration-line-through text-light-3">{{$data->price *1.2}}
                                                            ₺</h5>
                                                        <h4 class="mb-0">{{$data->price}}₺</h4>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h6>Description :</h6>
                                                        <p class="mb-0">{{$data->description}} </p>
                                                    </div>
                                                    <dl class="row mt-3">
                                                        <dt class="col-sm-3">Product id</dt>
                                                        <dd class="col-sm-9">{{$data->product_id}}</dd>
                                                        <dt class="col-sm-3">Delivery</dt>
                                                        <dd class="col-sm-9">Turkey</dd>
                                                    </dl>
                                                    <form
                                                        action="{{route('user_shopcart_add',['id'=>$rs->product_id])}}"
                                                        method="post">
                                                        @csrf
                                                        <div class="row row-cols-auto align-items-center mt-3">
                                                            <div class="col">
                                                                <label class="form-label">Quantity</label>
                                                                <input class="form-control rounded-0" name="quantity"
                                                                       type="number" value="1" max="{{$data->stock}}">
                                                            </div>
                                                            <div class="col">
                                                                <label class="form-label">Colors</label>
                                                                <div
                                                                    class="color-indigators d-flex align-items-center gap-2">
                                                                    <div class="color-indigator-item bg-primary"></div>
                                                                    <div class="color-indigator-item bg-danger"></div>
                                                                    <div class="color-indigator-item bg-success"></div>
                                                                    <div class="color-indigator-item bg-warning"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end row-->
                                                        <div class="d-flex gap-2 mt-3">
                                                            <button type="submit" class="btn btn-light btn-ecomm"><i
                                                                    class="bx bxs-cart-add"></i>Add to Cart
                                                            </button>
                                                            <a href="javascript:;" class="btn btn-white btn-ecomm"><i
                                                                    class="bx bx-heart"></i>Add to Wishlist</a>
                                                        </div>
                                                    </form>
                                                    <hr/>
                                                    <div class="product-sharing">
                                                        <ul class="list-inline">
                                                            @if($setting->facebook!=null)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                                                href="{{$setting->facebook}}"><i
                                                                            class='bx bxl-facebook'></i></a></li>
                                                            @endif
                                                            @if($setting->instagram!=null)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                                                href="{{$setting->instagram}}"><i
                                                                            class='bx bxl-instagram'></i></a></li>
                                                            @endif
                                                            @if($setting->twitter!=null)
                                                                <li class="list-inline-item"><a target="_blank"
                                                                                                href="{{$setting->twitter}}"><i
                                                                            class='bx bxl-twitter'></i></a></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--end product detail-->
                        <!--start product more info-->
                        <section class="py-4">
                            <div class="container">
                                <div class="product-more-info">
                                    <ul class="nav nav-tabs mb-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#discription"
                                               role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-title text-uppercase fw-500">Description</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tags" role="tab"
                                               aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-title text-uppercase fw-500">Tags</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab"
                                               aria-selected="false">
                                                @php
                                                    $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                                                @endphp
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-title text-uppercase fw-500">({{$countreview}})
                                                        Reviews
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane fade show active" id="discription" role="tabpanel">
                                            {!! $data->detail !!}

                                        </div>

                                        <div class="tab-pane fade" id="tags" role="tabpanel">
                                            <div class="tags-box w-50">
                                                <a href="javascript:;" class="tag-link">Cloths</a>
                                                <a href="javascript:;" class="tag-link">Electronis</a>
                                                <a href="javascript:;" class="tag-link">Furniture</a>
                                                <a href="javascript:;" class="tag-link">Sports</a>
                                                <a href="javascript:;" class="tag-link">Men Wear</a>
                                                <a href="javascript:;" class="tag-link">Women Wear</a>
                                                <a href="javascript:;" class="tag-link">Laptops</a>
                                                <a href="javascript:;" class="tag-link">Formal Shirts</a>
                                                <a href="javascript:;" class="tag-link">Topwear</a>
                                                <a href="javascript:;" class="tag-link">Headphones</a>
                                                <a href="javascript:;" class="tag-link">Bottom Wear</a>
                                                <a href="javascript:;" class="tag-link">Bags</a>
                                                <a href="javascript:;" class="tag-link">Sofa</a>
                                                <a href="javascript:;" class="tag-link">Shoes</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div class="row">
                                                <div class="col col-lg-8">
                                                    <div class="product-review">
                                                        <h5 class="mb-4">{{$countreview}} Reviews For The Product</h5>
                                                        <div class="review-list">
                                                            <!--single review-->
                                                            @foreach($reviews as $rs)
                                                                <div class="d-flex align-items-start">
                                                                    <div class="review-user">
                                                                        <h2 class="bx bx-user"></h2>
                                                                    </div>
                                                                    <div class="review-content ms-3">
                                                                        <div class="rates">
                                                                            <i class="bx bxs-star @if($rs->rate>=1) text-warning @else text-light-4 @endif "></i>
                                                                            <i class="bx bxs-star @if($rs->rate>=2) text-warning @else text-light-4 @endif"></i>
                                                                            <i class="bx bxs-star  @if($rs->rate>=3) text-warning @else text-light-4 @endif"></i>
                                                                            <i class="bx bxs-star  @if($rs->rate>=4) text-warning @else text-light-4 @endif"></i>
                                                                            <i class="bx bxs-star  @if($rs->rate>=5) text-warning @else text-light-4 @endif"></i>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-2">
                                                                            <h6 class="mb-0">{{$rs->user->name}}</h6>
                                                                            &nbsp;&nbsp;<i class="bx bx-time"></i>
                                                                            <p class="mb-0 ms-auto">{{$rs->created_at}}</p>
                                                                        </div>
                                                                        <strong>{{$rs->subject}}</strong>
                                                                        <p>
                                                                            {{$rs->review}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                        @endforeach

                                                        <!--single review-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-lg-4">
                                                    <div class="add-review bg-dark-1">
                                                        @livewire('review',['id' => $data->id])
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--end product more info-->
                    </div>
                </div>
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

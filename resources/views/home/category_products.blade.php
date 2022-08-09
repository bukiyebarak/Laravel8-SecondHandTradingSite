@extends('layouts.home')

@section('title', $data->title. '  Products List')
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
                        <div class="breadcrumb-title pe-3">Products List</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;"> Products List</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
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
                        <div class="row">
                            <!--sidebar-->
                            <div class="col-12 col-xl-3">
                                <div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
                                </div>
                                <div class="filter-sidebar d-none d-xl-flex">
                                    <div class="card rounded-0 w-100">
                                        <div class="card-body">
                                            <div class="align-items-center d-flex d-xl-none">
                                                <h6 class="text-uppercase mb-0">Filter</h6>
                                                <div
                                                    class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
                                            </div>
                                            <hr class="d-flex d-xl-none"/>
                                            <div class="product-categories">
                                                <h6 class="text-uppercase mb-3">Categories</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    <li><a href="javascript:;">Clothings <span
                                                                class="float-end badge rounded-pill bg-light">42</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Sunglasses <span
                                                                class="float-end badge rounded-pill bg-light">32</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Bags <span
                                                                class="float-end badge rounded-pill bg-light">17</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Watches <span
                                                                class="float-end badge rounded-pill bg-light">217</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Furniture <span
                                                                class="float-end badge rounded-pill bg-light">28</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Shoes <span
                                                                class="float-end badge rounded-pill bg-light">145</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Accessories <span
                                                                class="float-end badge rounded-pill bg-light">15</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Headphones <span
                                                                class="float-end badge rounded-pill bg-light">8</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="price-range">
                                                <h6 class="text-uppercase mb-3">Price</h6>
                                                <div class="my-4" id="slider"></div>
                                                <div class="d-flex align-items-center">
                                                    <button type="button"
                                                            class="btn btn-white btn-sm text-uppercase rounded-0 font-13 fw-500">
                                                        Filter
                                                    </button>
                                                    <div class="ms-auto">
                                                        <p class="mb-0">Price: $200.00 - $900.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="size-range">
                                                <h6 class="text-uppercase mb-3">Size</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Small">
                                                            <label class="form-check-label" for="Small">Small</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Medium">
                                                            <label class="form-check-label" for="Medium">Medium</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Large">
                                                            <label class="form-check-label" for="Large">Large</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="ExtraLarge">
                                                            <label class="form-check-label" for="ExtraLarge">Extra
                                                                Large</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="product-brands">
                                                <h6 class="text-uppercase mb-3">Brands</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Adidas">
                                                            <label class="form-check-label" for="Adidas">Adidas
                                                                (15)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Armani">
                                                            <label class="form-check-label" for="Armani">Armani
                                                                (26)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="CalvinKlein">
                                                            <label class="form-check-label" for="CalvinKlein">Calvin
                                                                Klein (24)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Columbia">
                                                            <label class="form-check-label" for="Columbia">Columbia
                                                                (38)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="JhonPlayers">
                                                            <label class="form-check-label" for="JhonPlayers">Jhon
                                                                Players (48)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="Diesel">
                                                            <label class="form-check-label" for="Diesel">Diesel
                                                                (64)</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="product-wrapper">
                                    <div class="toolbox d-flex align-items-center mb-3 gap-2">
                                        <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                            <div class="d-flex align-items-center flex-nowrap">
                                                <p class="mb-0 font-13 text-nowrap text-white">Sort By:</p>
                                                <select class="form-select ms-3 rounded-0">
                                                    <option value="menu_order" selected="selected">Default sorting
                                                    </option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by newness</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex align-items-center flex-nowrap">
                                                <p class="mb-0 font-13 text-nowrap text-white">Show:</p>
                                                <select class="form-select ms-3 rounded-0">
                                                    <option>9</option>
                                                    <option>12</option>
                                                    <option>16</option>
                                                    <option>20</option>
                                                    <option>50</option>
                                                    <option>100</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-grid">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                            <!--single product-->
                                            @foreach($datalist as $rs)
                                            <div class="col">
                                                <div class="card rounded-0 product-card">
                                                    <div class="card-header bg-transparent border-bottom-0">
                                                        <div
                                                            class="d-flex align-items-center justify-content-end gap-3">
                                                            <a href="javascript:;">
                                                                <div class="product-compare"><span><i
                                                                            class="bx bx-git-compare"></i> Compare</span>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <div class="product-wishlist"><i
                                                                        class="bx bx-heart"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <img src="{{Storage::url($rs->image)}}"
                                                         class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="product-info">
                                                            <a href="javascript:;">
                                                                <p class="product-catergory font-13 mb-1">{{$data->title}}</p>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <h6 class="product-name mb-2">{{$rs->title}}</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <div class="mb-1 product-price"><span
                                                                        class="me-1 text-decoration-line-through">{{$rs->price* 1.2}}₺</span>
                                                                    <span class="text-white fs-5">{{$rs->price}}₺</span>
                                                                </div>

                                                                @php
                                                                    $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                                @endphp

                                                                <div class="rates cursor-pointer font-13">
                                                                    <i class="bx bxs-star @if($avgrev>=1) text-warning @else text-light-4 @endif"></i>
                                                                    <i class="bx bxs-star @if($avgrev>=2) text-warning @else text-light-4 @endif "></i>
                                                                    <i class="bx bxs-star @if($avgrev>=3) text-warning @else text-light-4 @endif "></i>
                                                                    <i class="bx bxs-star @if($avgrev>=4) text-warning @else text-light-4 @endif"></i>
                                                                    <i class="bx bxs-star @if($avgrev>=5) text-warning @else text-light-4 @endif"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-action mt-2">
                                                                <div class="d-grid gap-2">
                                                                    <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                                                        @csrf
                                                                        <input class="input-group" type="hidden" name="quantity" type="number" value="1">
                                                                        <button type="submit" class="btn btn-light btn-ecomm"> <i
                                                                                class='bx bxs-cart-add'></i>Add to Cart</button>
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
                                            <!--single product-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <hr>
                                    <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                        class='bx bx-chevron-left'></i> Prev</a>
                                            </li>
                                        </ul>
                                        <ul class="pagination">
                                            <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                                    class="page-link">1<span
                                                        class="visually-hidden">(current)</span></span>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                                                       href="javascript:;">2</a>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                                                       href="javascript:;">3</a>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                                                       href="javascript:;">4</a>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                                                       href="javascript:;">5</a>
                                            </li>
                                        </ul>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="javascript:;"
                                                                     aria-label="Next">Next <i
                                                        class='bx bx-chevron-right'></i></a>
                                            </li>
                                        </ul>
                                    </nav>
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

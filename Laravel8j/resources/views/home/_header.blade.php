@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<!--start top header wrapper-->
<div class="header-wrapper bg-dark-1">
    <div class="top-menu border-bottom">
        <div class="container">
            <nav class="navbar navbar-expand">
                <div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex">
                    Welcome to our eTrans store!
                </div> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; @include('home.message')
                <ul class="navbar-nav ms-auto d-none d-lg-flex">

                    <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">About</a>
                    </li>
                    <li cass="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">Help & FAQs</a>
                    </li>
                </ul>

                <ul class="navbar-nav social-link ms-lg-2 ms-auto">
                    @if($setting->facebook!=null)
                        <li class="nav-item"><a class="nav-link" target="_blank" href="{{$setting->facebook}}"><i
                                    class='bx bxl-facebook'></i></a></li>
                    @endif
                    @if($setting->instagram!=null)
                        <li class="nav-item"><a class="nav-link" target="_blank" href="{{$setting->instagram}}"><i
                                    class='bx bxl-instagram'></i></a></li>
                    @endif
                    @if($setting->twitter!=null)
                        <li class="nav-item"><a class="nav-link" target="_blank" href="{{$setting->twitter}}"><i
                                    class='bx bxl-twitter'></i></a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-content pb-3 pb-md-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-md-auto">
                    <div class="d-flex align-items-center">
                        <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i
                                class='bx bx-menu'></i>
                        </div>
                        <div class="logo d-none d-lg-flex">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets')}}/images/logo-icon.png" class="logo-icon" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md order-4 order-md-2">
                    <form class="input-group flex-nowrap px-xl-4" action="{{route('getproduct')}}" method="post">
                        @csrf
                        @livewire('search')
                        <button type="submit" class="input-group-text cursor-pointer">
                            <i class='bx bx-search'></i>
                        </button>
                    </form>
                    @section('footerjs')
                        @livewireScripts
                    @endsection
                </div>
                <div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
                    <div class="fs-1 text-white"><i class='bx bx-headphone'></i>
                    </div>
                    <div class="ms-2">
                        <p class="mb-0 font-13">CALL US NOW</p>
                        <h5 class="mb-0">{{$setting->phone}}</h5>
                    </div>
                </div>
                <div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
                    <div class="top-cart-icons fs-5 text-white">
                        <nav class="navbar navbar-expand">
                            <ul class="navbar-nav ms-auto">

                                <li class="nav-item dropdown note-dropdown-menu">
                                    @auth
                                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                           data-bs-toggle="dropdown"><i
                                                class='bx bx-user'>{{Auth::user()->name}}</i></a>
                                    @endauth
                                    @guest
                                        <a href="/login" class="text-uppercase">Login</a> / <a href="/register"
                                                                                               class="text-uppercase">Join</a>
                                    @endguest

                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('myprofile')}}"><i class="bx bx-user-circle fs-6"></i>&nbsp;
                                                My Account</a></li>
                                        <hr>
                                        <li><a href="#"> <i class="bx bx-heart-circle fs-6 "></i>&nbsp; My WishList</a>
                                        </li>
                                        <hr>
                                        <li><a href="{{route('myreviews')}}"> <i class="bx bx-comment-check fs-6 "></i>&nbsp;
                                                My Review</a></li>
                                        <hr>
                                        <li><a href="{{route('user_products')}}"> <i
                                                    class="bx bxs-shopping-bag-alt fs-6 "></i>&nbsp; My Product</a></li>
                                        <hr>
                                        <li><a href="#"><i class="bx bx-git-compare fs-6"></i>&nbsp; Compare</a></li>
                                        <hr>
                                        <li><a href="#"> <i class="bx bx-check-circle fs-6"></i> &nbsp; Checkout</a>
                                        </li>
                                        <hr>
                                        <li><a href="{{route('logout')}}"><i class="bx bx-log-out-circle fs-6"></i>&nbsp;
                                                Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col col-md-auto order-2 order-md-4">
                    <div class="top-cart-icons">
                        <nav class="navbar navbar-expand">
                            <ul class="navbar-nav ms-auto">

                                <li class="nav-item dropdown dropdown-large">
                                    <a href="{{route('user_shopcart')}}"
                                       class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link"> <span class="alert-count">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span>
                                        <i class='bx bx-shopping-bag'></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:;">
                                            <div class="cart-header">
                                                <p class="cart-header-title mb-0"></p>
                                            </div>
                                        </a>
                                        <div class="cart-list">

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end top header wrapper-->

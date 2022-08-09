@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
<div class="header-wrapper bg-dark-1">
    <div class="primary-menu border-top">
        <div class="container">
            <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
                <div class="offcanvas-header">
                    <button class="btn-close float-end"></button>
                    <h5 class="py-2 text-white">Navigation</h5>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Categories <i class='bx bx-chevron-down'></i></a>
                        <div class="dropdown-menu dropdown-large-menu">
                            <div class="row">

                                    @foreach($parentCategories as $rs)
                                    <div class="col-md-4">
                                    <h6 class="large-menu-title">{{$rs->title}}</h6>

                                    <ul class="">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                                    </ul></div>
                                    @endforeach
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- dropdown-large.// -->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">About Us </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('references')}}">References </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

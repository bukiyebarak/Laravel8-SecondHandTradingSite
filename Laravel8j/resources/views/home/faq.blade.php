
@extends('layouts.home')

@section('title', 'Frequently Asked Question' )

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">FAQS</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{'home'}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Frequently Asked Question</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start page content-->
            <section class="py-0 py-lg-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="p-3 bg-dark-1">
                            @foreach($datalist as $rs)

                                <h5>{{$rs->question}}</h5>
                                <div>
                                   <p>{!! $rs->answer !!}</p>
                                </div>
                                <hr>
                            @endforeach
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

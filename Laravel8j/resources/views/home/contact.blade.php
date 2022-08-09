@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','Contact-'. $setting->title)
@section('description') {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Contact</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i
                                                class="bx bx-home-alt"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                       <div class="col-md-8">
                           <div class="p-3 bg-dark-1">
                           <h6 class="mb-0 text-uppercase">İLETİŞİM BİLGİLERİ</h6>
                               <HR>
                           {!! $setting->contact !!}
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="p-3 bg-dark-1">
                               @include('home.message')
                               <form id="checkout-form" action="{{route('sendmessage')}}" method="post" >
                                   @csrf
                                   <div class="form-body">
                                       <h6 class="mb-0 text-uppercase">İLETİŞİM FORMU</h6>
                                       <div class="my-3 border-bottom"></div>
                                       <div class="mb-3">
                                           <label class="form-label">Name & Surname</label>
                                           <input type="text" name="name" class="form-control" />
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label">Enter Email</label>
                                           <input type="text" name="email" class="form-control" />
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label">Phone Number</label>
                                           <input type="text" name="phone" class="form-control" />
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label">Subject</label>
                                           <input type="text" name="subject" class="form-control" />
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label">Message</label>
                                           <textarea class="form-control" name="message" rows="4" cols="4"></textarea>
                                       </div>
                                       <div class="mb-3">
                                           <button type="submit" class="btn btn-light btn-ecomm">Send Message</button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
    <!--start footer section-->
@endsection

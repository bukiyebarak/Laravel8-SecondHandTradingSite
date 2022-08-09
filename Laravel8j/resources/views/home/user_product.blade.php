
@extends('layouts.home')

@section('title', 'My Products')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">User Product</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">User Product</li>
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
                                        <a class="btn btn-primary" href="{{route('user_product_add')}}">Add Product </a>
                                        <br>
                                        @include('home.message')
                                        <div class="table-responsive">
                                            <br>
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Stock</th>
                                                    <th>Price</th>
                                                    <th>Image</th>
                                                    <th>Image Gallery</th>
                                                    <th>Status</th>
                                                    <th style="..." colspan="2">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <p></p>
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>
                                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                                        </td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>{{$rs->stock}}</td>
                                                        <td>{{$rs->price}}</td>
                                                        <td>
                                                            @if($rs->image)
                                                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{route('user_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=20 left=50 width=800 height=700')">
                                                                <div class="font-22 text-primary">	 <i style="color: white" class="bx bx-images fs-4"></i>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td>{{$rs->status}}</td>
                                                        <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}">
                                                                <i class="bx bx-edit fs-4"></i>

                                                            </a></td>
                                                        <td><a href="{{route('user_product_delete',['id'=>$rs->id])}} "
                                                               onclick="return confirm('Delete! Are you sure?')">
                                                                <i class="bx bx-trash fs-4"></i>

                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
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
            </section>
            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection

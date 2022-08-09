@extends('layouts.home')

@section('title', 'Add Product')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">Product Add</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">My Product</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Add</li>
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
                    <h3 class="d-none"></h3>
                    <div class="card">
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
                                    <form class="row g-3 needs-validation" novalidate=""
                                          action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-10">
                                            <label>Category</label>

                                            <select class="form-select" name="category_id" required>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-10">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Keywords</label>
                                            <input type="text" name="keywords" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Price</label>
                                            <input type="number" value="0" name="price" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Stock</label>
                                            <input type="number" name="stock" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Minquantity</label>
                                            <input type="number" value="5" name="minquantity" class="form-control"
                                            >
                                        </div>
                                        <div class="col-md-10">
                                            <label>Tax</label>
                                            <input type="number" name="tax" value="18" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Detail</label>
                                            <textarea id="summernote" name="detail"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>

                                        </div>
                                        <div class="col-md-10">
                                            <label>Slug</label>
                                            <input type="text" name="slug" class="form-control">
                                        </div>
                                        <div class="col-md-10">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="col-md-10">
                                            <label>Status</label>
                                            <select class="form-select" name="status" required>
                                                <option selected="">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Add Product</button>
                                        </div>
                                    </form>

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

@extends('layouts.home')

@section('title', 'Edit Product')

@section('headerjs')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <div class="breadcrumb-title pe-3">Product Edit</div>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">My Product</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
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
                                      action="{{route('user_product_update',['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-10">
                                        <label>Category</label>
                                        <select class="form-select" name="category_id" >
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}"
                                                        @if($rs->id==$data->parent_id) selected="selected" @endif >
                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-10">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Price</label>
                                        <input type="number" name="price" value="{{$data->price}}"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Stock</label>
                                        <input type="number" name="stock" value="{{$data->stock}}" class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Minquantity</label>
                                        <input type="number" name="minquantity" value="{{$data->minquantity}}"
                                               class="form-control"
                                        >
                                    </div>
                                    <div class="col-md-10">
                                        <label>Tax</label>
                                        <input type="number" name="tax" value="{{$data->tax}}" class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Detail</label>
                                        <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                                        <script>
                                            $('#summernote').summernote({
                                                placeholder: 'Hello stand alone ui',
                                                tabsize: 2,
                                                height: 120,
                                                toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                ]
                                            });
                                        </script>
                                    </div>
                                    <div class="col-md-10">
                                        <label>Slug</label>
                                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">

                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" height="100" alt="">
                                        @endif
                                    </div>
                                    <div class="col-md-10">
                                        <label>Status</label>
                                        <select class="form-select" name="status" required>
                                            <option selected="">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Update Product</button>
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

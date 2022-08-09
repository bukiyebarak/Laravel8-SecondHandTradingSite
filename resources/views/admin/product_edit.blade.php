@extends('layouts.admin')

@section('title', 'Edit Product')

@section('javascript')

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
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">EDIT PRODUCT</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('adminhome')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">Edit Product</h4>
                    <hr/>
                    <div class="row gy-3">
                        <div class="col-md-12">
                            <form class="row g-3 needs-validation" novalidate=""
                                  action="{{route('admin_product_update',['id'=>$data->id])}}" method="post"
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
            <div class="form-row mt-3">
                <div class="col-12">
                    <div id="todo-container"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--end page wrapper -->
@endsection


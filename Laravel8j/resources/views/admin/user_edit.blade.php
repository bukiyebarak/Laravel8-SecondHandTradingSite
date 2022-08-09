@extends('layouts.admin')

@section('title', 'Edit User')

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
                <div class="breadcrumb-title pe-3">EDIT USER</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('adminhome')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">Edit User</h4>
                    <hr/>
                    <div class="row gy-3">
                        <div class="col-md-12">
                            <form class="row g-3 needs-validation" novalidate=""
                                  action="{{route('admin_user_update',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-10">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                </div>
                                <div class="col-md-10">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                </div>
                                <div class="col-md-10">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}"
                                           class="form-control">
                                </div>
                                <div class="col-md-10">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}"
                                           class="form-control">
                                </div>

                                <div class="col-md-10">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                    @endif
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update User</button>
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


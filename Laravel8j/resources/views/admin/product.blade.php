@extends('layouts.admin')

@section('title', 'Product List')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Products</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('adminhome')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('admin_product_add')}}">Add Product </a>
                    <hr/>
                    <div class="card-body">
                            <div class="table-responsive">
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
                                                <a href="{{route('admin_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=20 left=50 width=800 height=700')">
                                                    <div class="font-22 text-primary">	<i class="fadeIn animated bx bx-images"></i>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}">
                                                    <div class="font-22 text-primary">	<i class="fadeIn animated bx bx-edit"></i>
                                                    </div>
                                                </a></td>
                                            <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}} "
                                                   onclick="return confirm('Delete! Are you sure?')">
                                                    <div class="font-22 text-primary">	<i class="fadeIn animated bx bx-trash-alt"></i>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
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
    <!--end page wrapper -->
@endsection

@section('footer')

    <script src="{{asset('assets')}}/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>

@endsection

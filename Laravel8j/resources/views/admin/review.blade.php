@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Reviews</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('adminhome')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Reviews Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    @include('home.message')
                    <hr/>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th style="..." colspan="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                               onclick="return !window.open(this.href, '', 'top=20 left=50 width=800 height=700')">

                                                {{$rs->user->name}}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                               target="_blank"> {{$rs->product->title}} </a>
                                        </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>

                                        <td>
                                            <a href="{{route('admin_review_show',['id'=>$rs->id])}}"
                                               onclick="return !window.open(this.href, '', 'top=20 left=50 width=800 height=700')">
                                                <div class="font-22 text-primary"><i
                                                        class="fadeIn animated bx bx-edit"></i></div>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin_review_delete',['id'=>$rs->id])}}"
                                               onclick="return confirm('Delete! Are you Sure')">
                                                <div class="font-22 text-primary"><i
                                                        class="fadeIn animated bx bx-trash"></i></div>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>

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

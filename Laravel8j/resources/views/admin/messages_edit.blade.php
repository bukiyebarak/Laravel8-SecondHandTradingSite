<link rel="icon" href="{{asset('assets')}}/images/favicon-32x32.png" type="image/png"/>
<!--plugins-->
<link href="{{asset('assets')}}/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
<!-- loader-->
<link href="{{asset('assets')}}/css/pace.min.css" rel="stylesheet"/>
<script src="{{asset('assets')}}/js/pace.min.js"></script>
<!-- Bootstrap CSS -->
<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="{{asset('assets')}}/css/app.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/icons.css" rel="stylesheet">

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-0">Message Detail</h4>
            @include('home.message')
            <hr/>
            <div class="row gy-3">
                <div class="col-md-12">
                    <form class="row g-3 needs-validation" novalidate=""
                          action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-10">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{$data->message}}</td>
                                </tr>
                                <tr>
                                    <th>Admin Note</th>
                                    <td><textarea id="note" name="note">{{$data->note}}</textarea>
                                    </td>

                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Update Message</button>
                                        </div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!--end page wrapper -->



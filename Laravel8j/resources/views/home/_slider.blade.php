<!--start slider section-->
<section class="slider-section">
    <div class="first-slider">

        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @php
                    $i=0;
                @endphp
                @foreach($slider as $rs)
                        @php
                            $i=$i+1;
                        @endphp
                    <div class="carousel-item @if($i==1)active @endif">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">Center of Second Hand</h3>
                                    <h1 class="h1">{{$rs->title}}</h1>
                                    <p class="pb-3">{{$rs->price}}₺</p>
                                    <div class="">
                                        <a class="btn btn-white btn-ecomm" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Shop Now <i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="{{Storage::url($rs->image)}}" class="img-fluid" alt="..."
                                     style="height: 600px">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"> <span
                    class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>
<!--end slider section-->

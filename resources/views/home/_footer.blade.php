@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<!-- footer of the pagse -->
<hr>
<footer class="footer footer-v1">
    <div class="content-block footer-main">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="footer-section1 mb-3">
                        <h6 class="mb-3 text-uppercase">Contact Info</h6>
                        <div class="address mb-3">
                            <p class="mb-0 text-uppercase text-white">Company</p>
                            <p class="mb-0 font-12">{{$setting->company}}</p>
                        </div>
                        <div class="address mb-3">
                            <p class="mb-0 text-uppercase text-white">Address</p>
                            <p class="mb-0 font-12">{{$setting->address}}</p>
                        </div>
                        <div class="phone mb-3">
                            <p class="mb-0 text-uppercase text-white">Phone</p>
                            <p class="mb-0 font-13">{{$setting->phone}}</p>
                            <p class="mb-0 font-13">Fax :{{$setting->fax}}</p>
                        </div>
                        <div class="phone mb-3">
                            <p class="mb-0 text-uppercase text-white">Fax</p>
                            <p class="mb-0 font-13">Fax :{{$setting->fax}}</p>
                        </div>
                        <div class="email mb-3">
                            <p class="mb-0 text-uppercase text-white">Email</p>
                            <p class="mb-0 font-13">{{$setting->email}}</p>
                        </div>
                        <div class="working-days mb-3">
                            <p class="mb-0 text-uppercase text-white">WORKING DAYS</p>
                            <p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section2 mb-3">
                        <h6 class="mb-3 text-uppercase">Shop Categories</h6>
                        <ul class="list-unstyled">
                            @foreach($parentCategories as $rs)
                                <li class="mb-1">
                                    <a href="{{route('home')}}">{{$rs->title}}<i class='bx bx-chevron-right'></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section3 mb-3">
                        <h6 class="mb-3 text-uppercase">Popular Tags</h6>
                        <div class="tags-box"> <a href="javascript:;" class="tag-link">Cloths</a>
                            <a href="javascript:;" class="tag-link">Electronis</a>
                            <a href="javascript:;" class="tag-link">Furniture</a>
                            <a href="javascript:;" class="tag-link">Sports</a>
                            <a href="javascript:;" class="tag-link">Men Wear</a>
                            <a href="javascript:;" class="tag-link">Women Wear</a>
                            <a href="javascript:;" class="tag-link">Laptops</a>
                            <a href="javascript:;" class="tag-link">Formal Shirts</a>
                            <a href="javascript:;" class="tag-link">Topwear</a>
                            <a href="javascript:;" class="tag-link">Headphones</a>
                            <a href="javascript:;" class="tag-link">Bottom Wear</a>
                            <a href="javascript:;" class="tag-link">Bags</a>
                            <a href="javascript:;" class="tag-link">Sofa</a>
                            <a href="javascript:;" class="tag-link">Shoes</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section4 mb-3">
                        <h6 class="mb-3 text-uppercase">Stay informed</h6>
                        <div class="subscribe">
                            <input type="text" class="form-control radius-30" placeholder="Enter Your Email" />
                            <div class="mt-2 d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm radius-30">Subscribe</a>
                            </div>
                            <p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount offers, updates and new products info.</p>
                        </div>
                        <div class="download-app mt-3">
                            <h6 class="mb-3 text-uppercase">Download our app</h6>
                            <div class="d-flex align-items-center gap-2">
                                <a href="javascript:;">
                                    <img src="{{asset('assets')}}/images/icons/apple-store.png" class="" width="160" alt="" />
                                </a>
                                <a href="javascript:;">
                                    <img src="{{asset('assets')}}/images/icons/play-store.png" class="" width="160" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <hr/>
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col">
                    <p class="mb-0"> Copyright © 2021 | {{$setting->company}}</p>
                </div>
                <div class="col text-end">
                    <div class="payment-icon">
                        <div class="row row-cols-auto g-2 justify-content-end">
                            <div class="col">
                                <img src="{{asset('assets')}}/images/icons/visa.png" alt="" />
                            </div>
                            <div class="col">
                                <img src="{{asset('assets')}}/images/icons/paypal.png" alt="" />
                            </div>
                            <div class="col">
                                <img src="{{asset('assets')}}/images/icons/mastercard.png" alt="" />
                            </div>
                            <div class="col">
                                <img src="{{asset('assets')}}/images/icons/american-express.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</footer>
<!--end footer section-->
<!--start quick view product-->
<!-- Modal -->
<div class="modal fade" id="QuickViewProduct">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
        <div class="modal-content bg-dark-4 rounded-0 border-0">
            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/product-gallery/01.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/product-gallery/02.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/product-gallery/03.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/product-gallery/04.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                <button class="owl-thumb-item">
                                    <img src="{{asset('assets')}}/images/product-gallery/01.png" class="" alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="{{asset('assets')}}/images/product-gallery/02.png" class="" alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="{{asset('assets')}}/images/product-gallery/03.png" class="" alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="{{asset('assets')}}/images/product-gallery/04.png" class="" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                            <div class="product-rating d-flex align-items-center mt-2">
                                <div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-light-4"></i>
                                </div>
                                <div class="ms-1">
                                    <p class="mb-0">(24 Ratings)</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                <h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
                                <h4 class="mb-0">$49.00</h4>
                            </div>
                            <div class="mt-3">
                                <h6>Discription :</h6>
                                <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                            </div>
                            <dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9">#BHU5879</dd>	<dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">Russia, USA, and Europe</dd>
                            </dl>
                            <div class="row row-cols-auto align-items-center mt-3">
                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <select class="form-select form-select-sm">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Size</label>
                                    <select class="form-select form-select-sm">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XS</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Colors</label>
                                    <div class="color-indigators d-flex align-items-center gap-2">
                                        <div class="color-indigator-item bg-primary"></div>
                                        <div class="color-indigator-item bg-danger"></div>
                                        <div class="color-indigator-item bg-success"></div>
                                        <div class="color-indigator-item bg-warning"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="d-flex gap-2 mt-3">
                                <a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>
                                <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
<!--end quick view product-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<br>
<br>
<br>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <p class="mb-0">Gaussian Texture</p>
        <hr>
        <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
        </ul>
        <hr>
        <p class="mb-0">Gradient Background</p>
        <hr>
        <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
            <li id="theme13"></li>
            <li id="theme14"></li>
            <li id="theme15"></li>
        </ul>
    </div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('assets')}}/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
<script src="{{asset('assets')}}/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('assets')}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--app JS-->
<script src="{{asset('assets')}}/js/app.js"></script>
<script src="{{asset('assets')}}/js/index.js"></script>

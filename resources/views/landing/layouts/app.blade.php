<!doctype html>
<html lang="{{ config('app.locale') }}" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Everything - CMS platform for everything</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CMS platform for everything"/>
    <meta name="keywords" content="CMS, Software, multi-uses, HTML, Laravel, Clean, Modern"/>
    <meta name="author" content="qv"/>
    <meta name="email" content="qv@gmail.com"/>
    <meta name="website" content="https://qv.com"/>
    <meta name="Version" content="v1.0.0"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/landing/favicon.ico') }}"/>

    <!-- CSS -->
    <link href="{{ asset('storage/landing/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/landing/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('storage/landing/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS -->
    <link href="{{ asset('storage/landing/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('storage/landing/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Style CSS-->
    <link href="{{ asset('storage/landing/css/style.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home.index') }}">
            <img src="{{ asset('storage/landing/logo.png') }}" height="24" class="logo-light-mode" alt="">
        </a>
        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item ps-1 mb-0">
                <a href="{{ route('dashboard.index') }}" target="_blank">
                    <div class="btn btn-icon btn-pills btn-primary">
                        <i data-feather="play-circle" class="fea icon-sm"></i>
                    </div>
                </a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('home.index') }}" class="sub-menu-item">Home</a></li>
                <li><a href="{{ route('home.index') }}" class="sub-menu-item">About</a></li>
                <li><a href="{{ route('home.index') }}" class="sub-menu-item">Contact</a></li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">Documentation</a></li>
                        <li><a href="#" class="sub-menu-item">Changelog</a></li>
                        <li><a href="#" class="sub-menu-item">Widget</a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

<!-- Hero Start -->
<section class="bg-marketing d-table w-100" style="background: url('{{ asset('storage/landing/images/marketing/marketing-shape.png') }}')" id="home">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-7 col-md-7 text-center">
                <img src="{{ asset('storage/landing/images/marketing/marketing.png') }}" class="img-fluid" style="max-height: 400px" alt="">

                <div class="title-heading mt-0 mt-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h1 class="heading mb-3">CMS platform for everything</h1>
                    <p class="para-desc text-muted">Create your website very quickly with <strong>Everything</strong>.</p>
                    <div class="mt-4 pt-2">
                        <a href="{{ route('dashboard.index') }}" class="btn btn-primary mt-2 me-2">Get Started</a>
                        <a href="#" class="btn btn-outline-primary mt-2"><i class="mdi mdi-phone"></i> Contact us</a>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Feature Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Sample Features</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                            class="text-primary fw-bold">Everything</span> that can publish your website to everyone in the world.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="monitor" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Fully Responsive</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="heart" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Browser Compatibility</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="code" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Built With SASS</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="user-check" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">W3c Valid Code</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="settings" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">Easy to customize</h4>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex features feature-primary key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle me-3">
                        <i data-feather="heart" class="fea icon-ex-md"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title mb-0">SEO Friendly</h4>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <img src="{{ asset('storage/landing/images/illustrator/youtube-media.svg') }}" alt="">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Create your website with <strong>Everything</strong></h4>
                    <p class="text-muted">Build your own website in 3 easy steps</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1">
                            <span class="text-primary h5 me-2">
                                <i class="uil uil-check-circle align-middle"></i>
                            </span>
                            Choose a website type (affiliate, e-commerce, ...)
                        </li>
                        <li class="mb-1">
                            <span class="text-primary h5 me-2">
                                <i class="uil uil-check-circle align-middle"></i>
                            </span>
                            Manage your content, product, ...
                        </li>
                        <li class="mb-1">
                            <span class="text-primary h5 me-2">
                                <i class="uil uil-check-circle align-middle"></i>
                            </span>
                            Publish!
                        </li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Our Valuable Clients</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                            class="text-primary fw-bold">Everything</span> that can publish your website to everyone in the world.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="{{ asset('storage/landing/images/client/01.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">"Quá là tuyệt vời! 100 điểm!"</p>
                                <h6 class="text-primary">- Minh Thảo <small class="text-muted">Tiktoker</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="{{ asset('storage/landing/images/client/02.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">"Meo meo meo meo meo"</p>
                                <h6 class="text-primary">- Thomas <small class="text-muted">A Cat</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="{{ asset('storage/landing/images/client/03.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="card flex-1 content p-3 shadow rounded position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">"I have no idea what the fuck is going on ?"</p>
                                <h6 class="text-primary">- Unknown <small class="text-muted">Internet</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Feature End -->

<!-- Faq Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item rounded shadow">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                How does it work ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded shadow mt-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                Do I need a designer to use Everything ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded shadow mt-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What do I need to do to start selling ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded shadow mt-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What happens when I receive an order ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <img src="{{ asset('storage/landing/images/illustrator/faq.svg') }}" alt="">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Get Started !</h4>
                    <p class="text-muted para-desc mx-auto">Start working with <span
                            class="text-primary fw-bold">Everything</span> that can publish your website to everyone in the world.</p>
                    <div class="mt-4 pt-2">
                        <a href="{{ route('dashboard.index') }}" target="_blank" class="btn btn-primary m-1">
                            Get started
                            <span class="badge rounded-pill bg-danger ms-2">v1.0.0</span>
                        </a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section><!--end section-->
<!-- Faq End -->

<!-- Footer Start -->
<!-- Footer Start -->
<footer class="footer footer-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a href="{{ route('home.index') }}" class="logo-footer">
                                <img src="{{ asset('storage/landing/logo.png') }}" height="24" alt="">
                            </a>
                            <p class="mt-4">Start working with <strong>Landrick</strong> that can publish your website to everyone in the world.</p>
                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Company</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                <li><a href="{{ route('login') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Usefull Links</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Newsletter</h5>
                            <p class="mt-4">Sign up and receive the latest tips via email.</p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="foot-subscribe foot-white mb-3">
                                            <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" name="email" id="emailsubscribe" class="form-control border ps-5 rounded" placeholder="Your email : " required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-grid">
                                            <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary" value="Subscribe">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 bg-footer text-white-50 border-top">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-start">
                        <p class="mb-0">©
                            <script>document.write(new Date().getFullYear());</script>
                            Everything. Design with <i class="mdi mdi-heart text-danger"></i>
                            base on
                            <a href="https://shreethemes.in/landrick/landing/index-marketing.html" target="_blank" class="text-reset">Landrick</a>.
                        </p>
                    </div>
                </div><!--end col-->

                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <ul class="list-unstyled text-sm-end mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/american-ex.png" class="avatar avatar-ex-sm"
                                                                                       title="American Express" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover"
                                                                                       alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card"
                                                                                       alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal"
                                                                                       alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="assets/images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a>
                        </li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->
<!-- Footer End -->

<!-- Cookies Start -->
<div class="card cookie-popup shadow rounded py-3 px-4">
    <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank"
                                                                                                                                     class="text-success h6">use of cookies</a></p>
    <div class="cookie-popup-actions text-end">
        <button><i class="uil uil-times text-dark fs-4"></i></button>
    </div>
</div><!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- Cookies End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->

<!-- Javascript -->
<!-- JAVASCRIPT -->
<script src="{{ asset('storage/landing/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('storage/landing/libs/feather-icons/feather.min.js') }}"></script>
<!-- SLIDER -->
<script src="{{ asset('storage/landing/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<!-- Lightbox -->
<script src="{{ asset('storage/landing/libs/tobii/js/tobii.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('storage/landing/js/plugins.init.js') }}"></script>
<script src="{{ asset('storage/landing/js/app.js') }}"></script>
</body>
</html>

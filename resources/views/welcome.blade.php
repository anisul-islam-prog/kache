<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>কাছে</title>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />

    <!-- css -->
    <!-- <link href="{{ URL::asset('css/') }}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/fontStyle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> -->
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top sticky navbar-light sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="/">
                <img src="{{ URL::asset('images/logo_sample.png')}}" alt="" class="logo-dark" height="35" />
                <img src="{{URL::asset('images/logo-light.png')}}" alt="" class="logo-light" height="35" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="" data-feather="menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <!--                        <li class="nav-item active">-->
                    <!--                            <a href="#home" class="nav-link">Home</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a href="#services" class="nav-link">Services</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a href="#features" class="nav-link">Features</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a href="#pricing" class="nav-link">Pricing</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a href="#team" class="nav-link">Team</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="nav-item">-->
                    <!--                            <a href="#blog" class="nav-link">Blog</a>-->
                    <!--                        </li>-->
                    @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                </ul>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-sm rounded-pill nav-btn ml-lg-3">Signup</a>
                @endif
                @endif
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Hero Start -->
    <section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png);"
        id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!--<i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i>-->
                    <h1 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">আপনার বাড়ির
                        এবং বর্তমান অবস্থানের</h1>
                    <p class="mb-5 text-muted">নিকটে আপনার প্রতিবেশী এবং লোকজনের সাথে সংযুক্ত হন।</p>
                    <a href="#" class="btn mr-2" style="background: #ed6966;color: white; border-radius: 20px;">Signup
                        <i class="icon-sm ml-1" data-feather="arrow-right"></i></a>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="mt-lg-0 mt-4">
                        <img src="images/home.png" alt="" class="img-xl-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->
    <!-- Hero part 2 -->
    <section class="bg-center position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center section pb-lg-0 pb-0">
                <div class="col-lg-6">
                    <div class="position-relative mb-lg-0 mb-5">
                        <div class="mr-5 features-img">
                            <img src="images/image_2.png" alt="" class="img-fluid d-block" />
                        </div>
                        <img src="images/dot-img.png" alt="" class="dot-img-right" />
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <!--                        <h1 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">About Us</h1>-->
                    <p class="text-muted mb-5">
                        <strong>
                            <ul class="list-group">
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> স্থানীয়
                                    খুচরা বা অন্য কোনও দোকানে প্রদত্ত বিক্রয় প্রচার দেখুন। </li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> কর্তৃপক্ষ
                                    দ্বারা আপনার অঞ্চলের জন্য জারি করা সতর্কতাগুলি দেখুন।</li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> প্রশ্ন
                                    জিজ্ঞাসা করুন বা একটি পোল তৈরি করুন।</li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> ইভেন্টগুলি
                                    সংগঠিত করুন এবং আপনার প্রতিবেশীদের ইভেন্টগুলিতে আমন্ত্রণ জানান।</li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> বিশ্বব্যাপী
                                    যান এবং দেখুন বিশ্বজুড়ে কি ঘটছে।</li>
                            </ul>
                        </strong>
                    </p>
                    <a href="#" class="btn" style="background: #ed6966;color: white; border-radius: 20px;">Signup<i
                            class="icon-xs ml-2" data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End part 2 -->

    <!-- Services start -->
    <!--        <section class="section" id="services">-->
    <!--            <div class="container">-->
    <!--                <div class="row justify-content-center mb-5">-->
    <!--                    <div class="col-lg-7 text-center">-->
    <!--                        <h2 class="font-weight-bold">Our Services</h2>-->
    <!--                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-lg-4">-->
    <!--                        <div class="service-box text-center px-4 py-5 position-relative mb-4">-->
    <!--                            <div class="service-box-content p-4">-->
    <!--                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">-->
    <!--                                    <i class="" data-feather="box"></i>-->
    <!--                                </div>-->
    <!--                                <h4 class="mb-3 font-size-22">Digital Design</h4>-->
    <!--                                <p class="text-muted mb-0">At vero eos site that accusamus iusto odio dignissimos the ducimusblandi.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-4">-->
    <!--                        <div class="service-box text-center px-4 py-5 position-relative mb-4 active">-->
    <!--                            <div class="service-box-content p-4">-->
    <!--                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">-->
    <!--                                    <i class="" data-feather="layers"></i>-->
    <!--                                </div>-->
    <!--                                <h4 class="mb-3 font-size-22">Awesome Support</h4>-->
    <!--                                <p class="text-muted mb-0">At vero eos site that accusamus iusto odio dignissimos the ducimusblandi.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-4">-->
    <!--                        <div class="service-box text-center px-4 py-5 position-relative mb-4">-->
    <!--                            <div class="service-box-content p-4">-->
    <!--                                <div class="icon-mono service-icon avatar-md mx-auto mb-4">-->
    <!--                                    <i class="" data-feather="server"></i>-->
    <!--                                </div>-->
    <!--                                <h4 class="mb-3 font-size-22">Easy to customize</h4>-->
    <!--                                <p class="text-muted mb-0">At vero eos site that accusamus iusto odio dignissimos the ducimusblandi.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!-- Services end -->

    <!--        &lt;!&ndash; Features start &ndash;&gt;-->
    <!--        <section class="section bg-light" id="features">-->
    <!--            <div class="container">-->
    <!--                <div class="row justify-content-center mb-5">-->
    <!--                    <div class="col-lg-7 text-center">-->
    <!--                        <h2 class="font-weight-bold">Our Features</h2>-->
    <!--                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="row align-items-center mb-5">-->
    <!--                    <div class="col-lg-5">-->
    <!--                        <h2 class="mb-4">Performancect Solution For Small Businesses</h2>-->
    <!--                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis..</p>-->
    <!--                        <a href="#" class="btn btn-primary">Find out more <i class="icon-xs ml-2" data-feather="arrow-right"></i></a>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-6 offset-lg-1">-->
    <!--                        <div class="position-relative mt-lg-0 mt-5">-->
    <!--                            <div class="ml-5 features-img">-->
    <!--                                <img src="images/features-1.jpg" alt="" class="img-fluid d-block mx-auto rounded shadow" />-->
    <!--                            </div>-->
    <!--                            <img src="images/dot-img.png" alt="" class="dot-img-left" />-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="row align-items-center section pb-lg-0 pb-0">-->
    <!--                    <div class="col-lg-6">-->
    <!--                        <div class="position-relative mb-lg-0 mb-5">-->
    <!--                            <div class="mr-5 features-img">-->
    <!--                                <img src="images/features-2.jpg" alt="" class="img-fluid d-block mx-auto rounded shadow" />-->
    <!--                            </div>-->
    <!--                            <img src="images/dot-img.png" alt="" class="dot-img-right" />-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-5 offset-lg-1">-->
    <!--                        <h2 class="mb-4">Build community & conversion with our suite of social tool</h2>-->
    <!--                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis..</p>-->
    <!--                        <a href="#" class="btn btn-primary">Find out more <i class="icon-xs ml-2" data-feather="arrow-right"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!-- Features end -->

    <section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png);"
        id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!--                        <i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i>-->
                    <h1 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">আপনি যদি কোনও
                        ব্যবসায়িক প্রতিষ্ঠান হন তবে:</br></h1>
                    <p class="mb-5 text-muted">
                        <strong>
                            <ul class="list-group">
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> স্থানীয়
                                    ডিল বিজ্ঞাপনগুলি চালান। </li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> স্থানীয়
                                    ডিল বিজ্ঞাপনগুলি চালান।</li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt="">
                                    সম্প্রদায়ের সাথে জড়িত থাকুন।</li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> বিশেষ অফার
                                    শেয়ার করুন।</li>
                                <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> আপনার
                                    স্থানীয় খ্যাতি পরীক্ষা করুন।</li>
                            </ul>
                        </strong>
                    </p>
                    <a href="#" class="btn mr-2" style="background: #ed6966;color: white; border-radius: 20px;">Signup
                        <i class="icon-sm ml-1" data-feather="arrow-right"></i></a>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="mt-lg-0 mt-4">
                        <img src="images/image_4.png" alt="" class="img-xl-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--        <section class="section bg-gradient-primary">-->
    <!--            <div class="bg-overlay-img" style="background-image: url(images/demos.png);"></div>-->
    <!--            <div class="container">-->
    <!--                <div class="row justify-content-center">-->
    <!--                    <div class="col-lg-8">-->
    <!--                        <div class="text-center">-->
    <!--                            <h1 class="text-white mb-4">Coming Soon Android & ISO App </h1>-->
    <!--                            <p class="text-white mb-5 font-size-16">Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totamrem aperiam eaque inventore veritatis quasi.</p>-->
    <!--&lt;!&ndash;                            <a href="#" class="btn btn-lg btn-light">Ask for Demonstration</a>&ndash;&gt;-->
    <!--                            <img src="images/googleplay.png" alt="" width="200px" height="80px">-->
    <!--                            <img src="images/appstore.png" alt="" width="200px" height="80px">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->

    <!--        &lt;!&ndash; Pricing start &ndash;&gt;-->
    <!--        <section class="section" id="pricing">-->
    <!--            <div class="container">-->
    <!--                <div class="row justify-content-center mb-5">-->
    <!--                    <div class="col-lg-7 text-center">-->
    <!--                        <h2 class="font-weight-bold">Pricing Plan</h2>-->
    <!--                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-lg-12">-->
    <!--                        <div class="text-center mb-5 pricing-tab">-->
    <!--                            <ul class="nav nav-pills rounded-pill justify-content-center d-inline-block shadow-sm" id="pills-tab" role="tablist">-->
    <!--                                <li class="nav-item d-inline-block">-->
    <!--                                    <a class="nav-link rounded-pill active" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</a>-->
    <!--                                </li>-->
    <!--                                <li class="nav-item d-inline-block">-->
    <!--                                    <a class="nav-link rounded-pill" id="pills-yearly-tab" data-toggle="pill" href="#pills-yearly" role="tab" aria-controls="pills-yearly" aria-selected="false">Yearly</a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                        <div class="tab-content" id="pills-tabContent">-->
    <!--                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-4">-->
    <!--                                        <div class="card rounded text-center border-0 shadow overflow-hidden">-->
    <!--                                            <div class="card-body px-4 py-5">-->
    <!--                                                &lt;!&ndash; <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="circle"></i></div> &ndash;&gt;-->
    <!--                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">-->
    <!--                                                    <img src="images/pricing/1.png" alt="" class="img-fluid d-block mx-auto" />-->
    <!--                                                </div>-->
    <!--                                                <h4 class="text-uppercase mb-4 pb-1">Basic</h4>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Onlinespace: <span class="font-weight-bold">50MB</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Support: <span class="font-weight-bold">No</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted mb-4 pb-1">Domain 1</p>-->
    <!--                                                <p class="text-muted mb-0 font-weight-semibold">All Extension Included</p>-->
    <!--                                                <p class="text-dark font-size-16 font-weight-bold">$9.00 / Month</p>-->
    <!--                                                <a href="#" class="btn btn-soft-primary">Buy Now</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-lg-4">-->
    <!--                                        <div class="card rounded text-center border-0 shadow overflow-hidden">-->
    <!--                                            <div class="card-body px-4 py-5">-->
    <!--                                                <span class="badge badge-primary pricing-badge shadow-lg">Most Popular</span>-->
    <!--                                                &lt;!&ndash; <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="square"></i></div> &ndash;&gt;-->
    <!--                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">-->
    <!--                                                    <img src="images/pricing/2.png" alt="" class="img-fluid d-block mx-auto" />-->
    <!--                                                </div>-->
    <!--                                                <h4 class="text-uppercase mb-4 pb-1">Standard</h4>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Onlinespace: <span class="font-weight-bold">100MB</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Support: <span class="font-weight-bold">Yes</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted mb-4 pb-1">Domain 1</p>-->
    <!--                                                <p class="text-muted mb-0 font-weight-semibold">All Extension Included</p>-->
    <!--                                                <p class="text-dark font-size-16 font-weight-bold">$39.00 / Month</p>-->
    <!--                                                <a href="#" class="btn btn-primary">Buy Now</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-lg-4">-->
    <!--                                        <div class="card rounded text-center border-0 shadow overflow-hidden">-->
    <!--                                            <div class="card-body px-4 py-5">-->
    <!--                                                &lt;!&ndash; <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="triangle"></i></div> &ndash;&gt;-->
    <!--                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">-->
    <!--                                                    <img src="images/pricing/3.png" alt="" class="img-fluid d-block mx-auto" />-->
    <!--                                                </div>-->
    <!--                                                <h4 class="text-uppercase mb-4 pb-1">Premium</h4>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Onlinespace: <span class="font-weight-bold">200MB</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Support: <span class="font-weight-bold">No</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted mb-4 pb-1">Domain 1</p>-->
    <!--                                                <p class="text-muted mb-0 font-weight-semibold">All Extension Included</p>-->
    <!--                                                <p class="text-dark font-size-16 font-weight-bold">$79.00 / Month</p>-->
    <!--                                                <a href="#" class="btn btn-soft-primary">Buy Now</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-4">-->
    <!--                                        <div class="card rounded text-center border-0 shadow overflow-hidden">-->
    <!--                                            <div class="card-body px-4 py-5">-->
    <!--                                                &lt;!&ndash; <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="circle"></i></div> &ndash;&gt;-->
    <!--                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">-->
    <!--                                                    <img src="images/pricing/1.png" alt="" class="img-fluid d-block mx-auto" />-->
    <!--                                                </div>-->
    <!--                                                <h4 class="text-uppercase mb-4 pb-1">Basic</h4>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Onlinespace: <span class="font-weight-bold">50MB</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Support: <span class="font-weight-bold">No</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted mb-4 pb-1">Domain 1</p>-->
    <!--                                                <p class="text-muted mb-0 font-weight-semibold">All Extension Included</p>-->
    <!--                                                <p class="text-dark font-size-16 font-weight-bold">$29.00 / Year</p>-->
    <!--                                                <a href="#" class="btn btn-soft-primary">Buy Now</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-lg-4">-->
    <!--                                        <div class="card rounded text-center border-0 shadow overflow-hidden">-->
    <!--                                            <div class="card-body px-4 py-5">-->
    <!--                                                &lt;!&ndash; <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="square"></i></div> &ndash;&gt;-->
    <!--                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">-->
    <!--                                                    <img src="images/pricing/2.png" alt="" class="img-fluid d-block mx-auto" />-->
    <!--                                                </div>-->
    <!--                                                <h4 class="text-uppercase mb-4 pb-1">Standard</h4>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Onlinespace: <span class="font-weight-bold">100MB</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Support: <span class="font-weight-bold">Yes</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted mb-4 pb-1">Domain 1</p>-->
    <!--                                                <p class="text-muted mb-0 font-weight-semibold">All Extension Included</p>-->
    <!--                                                <p class="text-dark font-size-16 font-weight-bold">$49.00 / Year</p>-->
    <!--                                                <a href="#" class="btn btn-soft-primary">Buy Now</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-lg-4">-->
    <!--                                        <div class="card rounded text-center border-0 shadow overflow-hidden">-->
    <!--                                            <div class="card-body px-4 py-5">-->
    <!--                                                <span class="badge badge-primary pricing-badge shadow-lg">Most Popular</span>-->
    <!--                                                &lt;!&ndash; <div class="icon-mono avatar-md bg-soft-primary text-primary rounded mx-auto mb-5"><i class="icon-lg" data-feather="triangle"></i></div> &ndash;&gt;-->
    <!--                                                <div class="icon-mono avatar-md bg-soft-primary rounded mx-auto mb-5 p-3">-->
    <!--                                                    <img src="images/pricing/3.png" alt="" class="img-fluid d-block mx-auto" />-->
    <!--                                                </div>-->
    <!--                                                <h4 class="text-uppercase mb-4 pb-1">Premium</h4>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Onlinespace: <span class="font-weight-bold">200MB</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted">Support: <span class="font-weight-bold">No</span></p>-->
    <!--                                                <p class="font-size-16 font-weight-semibold text-muted mb-4 pb-1">Domain 1</p>-->
    <!--                                                <p class="text-muted mb-0 font-weight-semibold">All Extension Included</p>-->
    <!--                                                <p class="text-dark font-size-16 font-weight-bold">$99.00 / Year</p>-->
    <!--                                                <a href="#" class="btn btn-soft-primary">Buy Now</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!--        &lt;!&ndash; Pricing end &ndash;&gt;-->


    <section class="bg-center position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center section pb-lg-0 pb-0">
                <div class="col-lg-6">
                    <div class="position-relative mb-lg-0 mb-5">
                        <div class="mr-5 features-img">
                            <img src="images/image_3.png" alt="" class="img-fluid d-block" />
                        </div>
                        <img src="images/dot-img.png" alt="" class="dot-img-right" />
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="mb-4">Coming Soon</h2>
                    <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore
                        veritatis..</p>
                    <!--                        <a href="#" class="btn btn-primary">Find out more <i class="icon-xs ml-2" data-feather="arrow-right"></i></a>-->
                    <img src="images/googleplay.png" alt="" width="200px" height="80px">
                    <img src="images/appstore.png" alt="" width="200px" height="80px">
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us start -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold mb-4">Get in Touch</h2>
                    <p class="text-muted mb-5">Et harum quidem rerum facilis est expedita distinctio temporecum soluta
                        nobis est eligendi optio cumque nihil impedit quo minus maxime.</p>
                    <div id="message"></div>
                    <form method="post" action="https://themesbrand.com/qexal/layout/php/contact.php"
                        name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label mb-4">
                                    <label for="name" class="text-muted">First Name</label>
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="First Name..." />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label mb-4">
                                    <label for="name" class="text-muted">Last Name</label>
                                    <input name="name" id="name1" type="text" class="form-control"
                                        placeholder="Last Name..." />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label mb-4">
                                    <label for="name" class="text-muted">Your Email</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Email..." />
                                </div>
                                <div class="form-group app-label mb-4 pb-2">
                                    <label for="name" class="text-muted">Type Massage</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control"
                                        placeholder="Message..."></textarea>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn btn-primary">Send
                                    Message</button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="images/contact.png" alt="" class="img-fluid d-block" />
                    <p class="text-muted font-size-16 mt-5 mb-3"><i class="mr-2 text-muted icon icon-sm"
                            data-feather="mail"></i> Support@info.com</p>
                    <p class="text-muted font-size-16 mb-3"><i class="mr-2 text-muted icon icon-sm"
                            data-feather="phone"></i> +91 123 4556 789</p>
                    <p class="text-muted font-size-16 mb-3"><i class="mr-2 text-muted icon icon-sm"
                            data-feather="map-pin"></i> 2976 Edwards Street Rocky Mount, NC 27804</p>
                    <ul class="list-inline pt-4">
                        <li class="list-inline-item mr-3">
                            <a href="#" class="social-icon icon-mono avatar-sm rounded-circle"><i class="icon-sm"
                                    data-feather="facebook"></i></a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#" class="social-icon icon-mono avatar-sm rounded-circle"><i class="icon-sm"
                                    data-feather="twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon icon-mono avatar-sm rounded-circle"><i class="icon-sm"
                                    data-feather="instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us end -->

    <!-- Footer Start -->
    <section class="footer" style="background-image: url(images/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <a href="index-1.html"><img src="images/white_logo.png" alt="" class="" height="30" /></a>
                        <p class="text-white-50 my-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti.</p>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-md-3">
                            <!--                                <h4 class="text-white font-size-18 mb-3">Customer</h4>-->
                            <!--                                <ul class="list-unstyled footer-sub-menu">-->
                            <!--                                    <li><a href="#" class="footer-link">Works</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Strategy</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Releases</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Press</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Mission</a></li>-->
                            <!--                                </ul>-->
                        </div>
                        <div class="col-md-3">
                            <!--                                <h4 class="text-white font-size-18 mb-3">Product</h4>-->
                            <!--                                <ul class="list-unstyled footer-sub-menu">-->
                            <!--                                    <li><a href="#" class="footer-link">Tranding</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Popular</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Customers</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Features</a></li>-->
                            <!--                                </ul>-->
                        </div>
                        <div class="col-md-3">
                            <!--                                <h4 class="text-white font-size-18 mb-3">Information</h4>-->
                            <!--                                <ul class="list-unstyled footer-sub-menu">-->
                            <!--                                    <li><a href="#" class="footer-link">Developers</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Support</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Customer Service</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Get Started</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Guide</a></li>-->
                            <!--                                </ul>-->
                        </div>
                        <div class="col-md-3">
                            <!--                                <h4 class="text-white font-size-18 mb-3">Support</h4>-->
                            <!--                                <ul class="list-unstyled footer-sub-menu">-->
                            <!--                                    <li><a href="#" class="footer-link">FAQ</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Contact</a></li>-->
                            <!--                                    <li><a href="#" class="footer-link">Disscusion</a></li>-->
                            <!--                                </ul>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <p class="text-white-50 f-15 mb-0">2020 </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnificpopup.int.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Main Js -->
    <script src="js/app.js"></script>

    <script>
    feather.replace();
    </script>

    <!-- Dont Touch now -->
    <!-- <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endif
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-auto text-gray-700 sm:h-20">
                    <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <path
                            d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                    class="underline text-gray-900 dark:text-white">Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                    class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                    class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects
                                to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>
@extends('layouts.guest')
<!--Content Start -->
@section('content')
<section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png);" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                {{-- <i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i> --}}
                <h1 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">আপনার বাড়ির
                    এবং বর্তমান অবস্থানের নিকটে </h1>
                <h5 class="mb-5 text-muted">আপনার প্রতিবেশী এবং লোকজনের সাথে সংযুক্ত হন।</h5>
                <div class="text-center float-lg-left">
                    <a href="{{ route('userlogin.away') }}" class="btn btn-lg" style="background: #ed6966;color: white; border-radius: 20px;">Signup<i class="icon-sm ml-1"></i></a>
                </div>

            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="mt-lg-0 mt-4">
                    <img src="images/home.png" alt="" class="img-xl-responsive" />
                </div>
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
                @if (Route::has('register'))
                <div class="text-center float-lg-left">
                    <a href="{{ route('userlogin.away') }}" class="btn" style="background: #ed6966;color: white; border-radius: 20px; margin-top:20px;">Signup</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Hero End part 2 -->
<section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png); " id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i>
                <h2 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">আপনি যদি কোনও
                    ব্যবসায়িক প্রতিষ্ঠান হন তবে:</h2>
                <p class="mb-5 text-muted">
                    <strong>
                        <ul class="list-group">
                            <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> স্থানীয়
                                ডিল বিজ্ঞাপনগুলি চালান। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2" alt="">
                                সম্প্রদায়ের সাথে জড়িত থাকুন। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> বিশেষ অফার
                                শেয়ার করুন। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2" alt=""> আপনার
                                স্থানীয় খ্যাতি পরীক্ষা করুন। </li>
                        </ul>
                    </strong>
                </p>
                @if (Route::has('register-business.store'))
                <div class="text-center float-lg-left">
                    <a href="{{route('register-business.view')}}" class="btn mr-2" style="color: white; border-radius: 20px; margin-top: 20px" id="signup">Signup
                        <i class="icon-sm ml-1"></i></a>
                </div>
                @endif
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="mt-lg-0 mt-4">
                    <img src="images/image_4.png" alt="" class="img-xl-responsive" />
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
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
                <h1 class="font-weight-semibold mb-4 hero-6-title text-center" style="font-family: myRegularFont">শীঘ্রই আসছে</h1>
                <div class="text-center">
                    <img src="images/googleplay.png" alt="" width="200px" height="80px">
                    <img src="images/appstore.png" alt="" width="200px" height="80px">
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- Show case Start-->
<section class="bg-center position-relative overflow-hidden">
    <div class="container">
        <div class="container mt-5 text-center">
            <div class="row">
                <div class="card bg-light mb-3 mr-1 cardSize">
                    <div class="card-header whiteborbg"></div>
                    <div class="card-body whiteborbg">
                        <h5 class="card-title">Registered Community</h5>
                        <p class="card-text show-p">14+</p>
                    </div>
                </div>
                <div class="card bg-light mb-3 mr-1 cardSize">
                    <div class="card-header whiteborbg"></div>
                    <div class="card-body whiteborbg">
                        <h5 class="card-title">Registered Businesses</h5>
                        <p class="card-text show-p">14+</p>
                    </div>
                </div>
                <div class="card bg-light mb-3 mr-5 cardSize">
                    <div class="card-header whiteborbg"></div>
                    <div class="card-body whiteborbg">
                        <h5 class="card-title">Businesses Served</h5>
                        <p class="card-text show-p">5+</p>
                    </div>
                </div>
                <div class="card bg-light mb-3 mr-5 cardSize">
                    <div class="card-header whiteborbg"></div>
                    <div class="card-body whiteborbg">
                        <h5 class="card-title">% Excellent Feedback</h5>
                        <p class="card-text show-p">100%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Start
<section class="bg-center pricing-table position-relative overflow-hidden">
    <header>
        <h2>Right Plan For You!</h2>
    </header>
    <div class="container-pricing">
        <div class="element">
            <div class="info">
                <h3>Free</h3>
            </div>
            <span class="price">৳0</span>
            <ul>
                <li>৳100 per Advertising marketing consultancy</li>
                <li>20% SC per campaign</li>
                <li>$1 = ৳85</li>
            </ul>
            <a href="tel:+8801682760923"><button>Call us +8801682760923</button></a>
        </div>
        <div class="element premium active">
            <div class="info">
                <h3>Premium</h3>
            </div>
            <span class="price">৳100</span>
            <div class="period">
                <input type="radio" name="period" id="monthly" value="৳100" checked />
                <label for="monthly">Monthly</label>
                <input type="radio" name="period" id="annualy" value="৳1000" />
                <label for="annualy">Annually</label>
            </div>
            <ul>
                <li>Free Marketing Consultancy</li>
                <li>$1 = ৳110</li>
                <li>10% SC per campaign</li>
            </ul>
            <a href="tel:+8801682760923"><button>Call us!</button></a>
        </div>
        <div class="element">
            <div class="info">
                <h3>Custom</h3>
            </div>
            <span class="price">-</span>
            <ul>
                <li>All Premium Capabilities</li>
                <li>Customized Analytics</li>
                <li>Customized Reports</li>
            </ul>
            <a href="tel:+8801682760923"><button>Call us!</button></a>
        </div>
    </div>
</section> -->
<section class="bg-center pricing-table position-relative overflow-hidden">
    <header>
        <h2>Contact Us!</h2>
    </header>
    <div class="container mt-5 text-center">
        <div class="container text-center mb-5">
            <a href="tel:+8801682760923" >
                <h3> Mobile No: +8801682760923</h3>
            </a>
        </div>
    </div>

</section>
@endsection
@extends('layouts.guest')
<!--Content Start -->
@section('content')
<section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png);" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                {{-- <i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i> --}}
                <h1 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">আপনার আশেপাশের </h1>
                <h5 class="mb-5 text-muted">বন্ধু-বান্ধব, প্রতিবেশী কিংবা পরিচিত জনদের সাথে সংযুক্ত থাকুন।</h5>
                @if (Route::has('register'))
                <a href="{{route('register')}}" class="btn btn-lg" style="background: #ed6966;color: white; border-radius: 20px;">Signup<i class="icon-sm ml-1"></i></a>
                @endif
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
                <p class="text-muted mb-5">
                    <strong>
                        <ul class="list-group">
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> আশেপাশের মুদি দোকান বা অন্য কোন ব্যবসায়ের বিক্রয় বিজ্ঞাপন দেখুন।</li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> পণ্য কিংবা সেবা ক্রয়-বিক্রয় করুন (সেবার মধ্যে যে কোন প্রকার বৈধ এবং সামাজিকভাবে স্বীকৃত কার্যক্রম, যেমন পোষা প্রাণীদের উপচর্যা, ঘরবাড়ি পরিচর্যা ইত্যাদি অন্তর্ভুক্ত)। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> কর্তৃপক্ষ
                                দ্বারা আপনার অঞ্চলের জন্য জারি করা সতর্কতাগুলি দেখুন।</li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> আপনি আপনার যে কোন প্রশ্ন ও মতামত দিতে পারেন। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> আপনি যে কোন অনুষ্ঠান আয়োজন করতে পারবেন, সাথে আপনার প্রতিবেশীদের আমন্ত্রণ জানাতে পারবেন।</li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> আপনি বিশ্বের চলমান ঘটনা সম্পর্কে জানতে পারবেন।</li>
                        </ul>
                    </strong>
                </p>
                @if (Route::has('register'))
                <a href="{{route('register')}}" class="btn" style="background: #ed6966;color: white; border-radius: 20px; margin-top:20px;">Signup<i class="icon-xs ml-2"></i></a>
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
                <h2 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont"> আপনার ব্যবসা থাকলে আপনিঃ</h2>
                <p class="mb-5 text-muted">
                    <strong>
                        <ul class="list-group">
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> আপনি স্থানীয় বিজ্ঞাপন দিতে পারবেন। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> পণ্যের স্থানীয় বাজার পর্যবক্ষেণ করতে পারবেন। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> সমাজের সকলের সাথে বন্ধন তৈরি করতে পারবেন। </li>
                            <li class="list-group-item"><img src="images/right.png" class="mr-2 welcome-tick" alt=""> বিশেষ ছাড় দিতে পারেন এবং আপনার সুনাম ছড়িয়ে দিতে পারেন। </li>
                        </ul>
                    </strong>
                </p>
                @if (Route::has('register-business.store'))
                <a href="{{route('register-business.view')}}" class="btn mr-2" style="color: white; border-radius: 20px; margin-top: 20px" id="signup">Signup
                    <i class="icon-sm ml-1"></i></a>
                @endif
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="mt-lg-0 mt-4">
                    <img src="images/image_4.png" alt="" class="img-xl-responsive" />
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
                <!-- <h2 class="mb-4">শীঘ্রই আসছে</h2> -->
                <!-- <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore
                        veritatis..</p> -->
                <!--                        <a href="#" class="btn btn-primary">Find out more <i class="icon-xs ml-2" data-feather="arrow-right"></i></a>-->
                <img src="images/googleplay.png" alt="" class="text-center" width="200px" height="80px" />
                <img src="images/appstore.png" alt="" class="text-center" width="200px" height="80px" />
            </div>
        </div>
    </div>
</section>
@endsection
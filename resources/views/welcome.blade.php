@extends('layouts.guest')
    <!--Content Start -->
    @section('content')
    <section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png);" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!--<i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i>-->
                    <h1 class="font-weight-semibold mb-4 hero-6-title" style="font-family: myRegularFont">আপনার বাড়ির
                        এবং বর্তমান অবস্থানের নিকটে </h1>
                    <h5 class="mb-5 text-muted">আপনার প্রতিবেশী এবং লোকজনের সাথে সংযুক্ত হন।</h5>
                    <a href="#" class="btn btn-lg" style="background: #ed6966;color: white; border-radius: 20px;">Signup<i class="icon-sm ml-1" data-feather="arrow-right"></i></a>
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
                    <a href="#" class="btn" style="background: #ed6966;color: white; border-radius: 20px;">Signup<i class="icon-xs ml-2" data-feather="arrow-right"></i></a>
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

    <section class="bg-center position-relative overflow-hidden" style="background-image: url(images/hero-6-bg.png);" id="home">
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
                    <form method="post" action="https://themesbrand.com/qexal/layout/php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label mb-4">
                                    <label for="name" class="text-muted">First Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="First Name..." />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label mb-4">
                                    <label for="name" class="text-muted">Last Name</label>
                                    <input name="name" id="name1" type="text" class="form-control" placeholder="Last Name..." />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group app-label mb-4">
                                    <label for="name" class="text-muted">Your Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email..." />
                                </div>
                                <div class="form-group app-label mb-4 pb-2">
                                    <label for="name" class="text-muted">Type Massage</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message..."></textarea>
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
                    <p class="text-muted font-size-16 mt-5 mb-3"><i class="mr-2 text-muted icon icon-sm" data-feather="mail"></i> Support@info.com</p>
                    <p class="text-muted font-size-16 mb-3"><i class="mr-2 text-muted icon icon-sm" data-feather="phone"></i> +91 123 4556 789</p>
                    <p class="text-muted font-size-16 mb-3"><i class="mr-2 text-muted icon icon-sm" data-feather="map-pin"></i> 2976 Edwards Street Rocky Mount, NC 27804</p>
                    <ul class="list-inline pt-4">
                        <li class="list-inline-item mr-3">
                            <a href="#" class="social-icon icon-mono avatar-sm rounded-circle"><i class="icon-sm" data-feather="facebook"></i></a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#" class="social-icon icon-mono avatar-sm rounded-circle"><i class="icon-sm" data-feather="twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon icon-mono avatar-sm rounded-circle"><i class="icon-sm" data-feather="instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us end -->
    @endsection
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'কাছে') }}</title>

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- Scripts -->

<title>কাছে</title>
<meta name="description" content="আপনার আশেপাশের বন্ধু-বান্ধব, প্রতিবেশী কিংবা পরিচিত জনদের সাথে সংযুক্ত থাকুন।" />
<link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />


<!-- Magnific-popup -->
<!-- <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" /> -->

<!-- css -->
<!-- <link href="{{ URL::asset('css/') }}" rel="stylesheet" type="text/css" /> -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />
<!-- <link href="{{ asset('css/fontStyle.css') }}" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/pricingtable.css') }}" rel="stylesheet" type="text/css" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-88D188ZQ7Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-88D188ZQ7Q');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Facebook Pixel Code -->
<script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2854360541475655');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2854360541475655&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

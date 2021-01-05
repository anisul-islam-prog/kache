<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'কাছে') }}</title>

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- Scripts -->

<title>কাছে</title>
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
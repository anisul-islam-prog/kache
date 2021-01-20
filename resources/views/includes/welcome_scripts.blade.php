<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('js/scrollspy.min.js')}}"></script>
<script src="{{ URL::asset('js/jquery.easing.min.js')}}"></script>

<!-- Magnific Popup -->
<script src="{{ URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('js/magnificpopup.int.js') }}"></script>

<script src="{{ URL::asset('js/feather.js') }}"></script>

<!-- Main Js -->
<script src="{{ URL::asset('js/app.js')}}"></script>

<script src="{{ URL::asset('js/custom.js')}}"></script>
<script>
    feather.replace();
</script>

<script>
    // const footerSpan = $("#");
    // footerSpan.innerHTML = `${(new Date().getFullYear())}`;
    document.getElementById("footer-span").innerHTML = new Date().getFullYear();
</script>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>GreenFair</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="{{asset('assets/user-fontend/css/font-awesome.min.css')}}">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/user-fontend/css/animate.min.css')}}">

        <!-- Bootstrap -->
        <link href="{{asset('assets/user-fontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/user-fontend/css/carousel.css')}}" />

        <link rel="stylesheet" href="{{asset('assets/user-fontend/css/isotope/style.css')}}">

        <!--Main Stylesheet-->
        <link href="{{asset('assets/user-fontend/css/style.css')}}" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="{{asset('assets/user-fontend/css/responsive.css')}}" rel="stylesheet">

    @stack('css')
</head>
<body>

@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')

<!-- SCIPTS -->
<script src="{{asset('assets/user-fontend/js/jquery-1.12.3.min.js')}}"></script>

<!--Counter UP Waypoint-->
<script src="{{asset('assets/user-fontend/js/waypoints.min.js')}}"></script>
<!--Counter UP-->
<script src="{{asset('assets/user-fontend/js/jquery.counterup.min.js')}}"></script>

<script>
    //for counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
</script>

<!--Gmaps-->
<script src="{{asset('assets/user-fontend/js/gmaps.min.js')}}"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function () {
        map = new GMaps({
            el: '#map',
            lat: 23.6911078,
            lng: 90.5112799,
            zoomControl: true,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'LEFT_BOTTOM'
            },
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            scrollwheel: false,
        });


        map.addMarker({
            lat: 23.6911078,
            lng: 90.5112799,
            title: 'Office',
            details: {
                database_id: 42,
                author: 'Foysal'
            },
            click: function (e) {
                if (console.log)
                    console.log(e);
                alert('You clicked in this marker');
            },
            mouseover: function (e) {
                if (console.log)
                    console.log(e);
            }
        });
    });
</script>
<!--Google Maps API-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


<!--Isotope-->
<script src="{{asset('assets/user-fontend/js/isotope/min/scripts-min.js')}}"></script>
<script src="{{asset('assets/user-fontend/js/isotope/cells-by-row.js')}}"></script>
<script src="{{asset('assets/user-fontend/js/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/user-fontend/js/isotope/packery-mode.pkgd.min.js')}}"></script>
<script src="{{asset('assets/user-fontend/js/isotope/scripts.js')}}"></script>


<!--Back To Top-->
<script src="{{asset('assets/user-fontend/js/backtotop.js')}}"></script>


<!--JQuery Click to Scroll down with Menu-->
<script src="{{asset('assets/user-fontend/js/jquery.localScroll.min.js')}}"></script>
<script src="{{asset('assets/user=fontend/js/jquery.scrollTo.min.js')}}"></script>
<!--WOW With Animation-->
<script src="{{asset('assets/user-fontend/js/wow.min.js')}}"></script>
<!--WOW Activated-->
<script>
    new WOW().init();
</script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/user-fontend/js/bootstrap.min.js')}}"></script>
<!-- Custom JavaScript-->
<script src="{{asset('assets/user-fontend/js/main.js')}}"></script>


@stack('js')
</body>
</html>

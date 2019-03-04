<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Test Project | @yield('title')</title>

    @stack('css')
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('dashboard/css/fonts/linecons/css/linecons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/xenon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/xenon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/xenon-components.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/xenon-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/js/daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/js/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/custom.css') }}">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <![endif]-->
</head>

<body class="page-body">
@include('admin.partials.topbar')

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
    <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
    <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
    <div class="admin sidebar-menu fixed admin <!--collapsed--> ">
        <div class="sidebar-menu-inner">
            @include('admin.partials.header')

            @include('admin.partials.sidebar')
        </div>

    </div>

    <div class="main-content">
        @include('admin.partials.navbar')

        @yield('content')

        @include('admin.partials.footer')
    </div>

    @include('admin.partials.chat')
</div>

@include('admin.partials.footer-stick')

<!-- Bottom Scripts -->
<script src="{{ asset('dashboard/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('dashboard/js/resizeable.js') }}"></script>
<script src="{{ asset('dashboard/js/joinable.js') }}"></script>
<script src="{{ asset('dashboard/js/xenon-api.js') }}"></script>
<script src="{{ asset('dashboard/js/xenon-toggles.js') }}"></script>
<script src="{{ asset('dashboard/js/moment.min.js') }}"></script>
<script src="{{ asset('dashboard/js/admin/add-merchant.js') }}"></script>

<!-- Imported scripts on this page -->
<script src="{{ asset('dashboard/js/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('dashboard/js/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('dashboard/js/select2/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('dashboard/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script src="{{ asset('dashboard/js/tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('dashboard/js/typeahead.bundle.js') }}"></script>
<script src="{{ asset('dashboard/js/handlebars.min.js') }}"></script>

<!-- Imported scripts on this page -->
<script src="{{ asset('dashboard/js/jquery-validate/jquery.validate.min.js') }}"></script>

<!-- JavaScripts initializations and stuff -->
<script src="{{ asset('dashboard/js/xenon-custom.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>



<!--<script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!--{{-- Custom Javascript --}}


<!-- Jquery Core Js -->
<!--<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<!--<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<!--{{--<script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>--}}

<!-- Slimscroll Plugin Js -->
<!--<script src="{{ asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>-->

<!-- Waves Effect Plugin Js -->
<!--<script src="{{ asset('assets/backend/plugins/node-waves/waves.js') }}"></script>-->

{{-- Custom Javascript --}}
@stack('js')
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
@stack('scripts')
</body>
</html>
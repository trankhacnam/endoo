<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('bower_components/admin_assets/css/bootstrap.min.css') }}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('bower_components/admin_assets/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('bower_components/admin_assets/css/style-responsive.css') }}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('bower_components/admin_assets/css/font.css') }}" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('bower_components/admin_assets/css/morris.css') }}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{ asset('bower_components/admin_assets/css/monthly.css') }}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{ asset('bower_components/admin_assets/js/jquery2.0.3.min.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/raphael-min.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/morris.js') }}"></script>
<link rel="stylesheet" href="{{ asset('bower_components/admin_assets/css/font.css') }}" type="text/css"/>
<link href="{{ asset('bower_components/admin_assets/css/font-awesome.css') }}" rel="stylesheet"> 


 <link rel="stylesheet" href="{{ asset('bower_components/modal/fonts/icomoon/style.css') }}">
<!-- Style -->
<link rel="stylesheet" href="{{ asset('bower_components/modal/css/style.css') }}">
@yield('custom-css')

</head>
<body>
<section id="container">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    @yield('content')
</section>
<script src="{{ asset('bower_components/admin_assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/scripts.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('bower_components/admin_assets/js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('bower_components/modal/js/jquery-3.3.1.min.js') }}"></script>

<script src="{{ asset('bower_components/modal/js/popper.min.js') }}"></script>
<script src="{{ asset('bower_components/modal/js/main.js') }}"></script>
</body>
</html>

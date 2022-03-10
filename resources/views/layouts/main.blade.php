
<!DOCTYPE html>
<html lang="en">


	<meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon">
<link rel="apple-touch-icon" href="img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
<style type="text/css">.fancybox-margin{margin-right:17px;}</style>








	

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
	
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
	
<link rel="stylesheet" href="{{ asset('css/animate.css')}}">	
<link rel="stylesheet" href="{{ asset('css/prettyPhoto.css')}}">	
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">	
<link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css')}}">
<link rel="stylesheet"  href="{{ asset('css/jquery.datetimepicker.css')}}">
<link rel="stylesheet"  href="{{ asset('css/jquery.datetimepicker1.css')}}">
       @yield('css')

</head>
<body>
<div class="body-inner">
@include ('layouts.header')
@yield('content')
@include('layouts.footer')
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>	
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}">
</script>	
<script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>	
<script type="text/javascript" src="{{asset('js/smoothscroll.js')}}">
</script>	
<script type="text/javascript" src="{{asset('js/jquery.easy-pie-chart.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker1.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>



	    @yield('js')
</div>
</body>
</html>
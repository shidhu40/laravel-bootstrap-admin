<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- Bootstrap Core CSS -->
	<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
	<!-- Animate CSS -->
	<link href="{!! asset('theme/frontend/css/animate.css') !!}" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
	<link href="{!! asset('theme/frontend/css/style.css') !!}" rel="stylesheet">
    @yield('styles')
</head>
<body>
	@include('frontend.elements.header')
	
	<main id="main">
		@yield('content')
		<!-- Navigation -->
	</main><!-- End #main -->
	@include('frontend.elements.footer')
	 <!-- /#wrapper -->
   <!-- jQuery -->
   <script src="{!! asset('js/jquery.js') !!}"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="{!! asset('js/bootstrap.js') !!}"></script>
   
   <!-- Custom Theme JavaScript -->
   <script src="{!! asset('theme/frontend/js/jquery.slimscroll.min.js') !!}"></script>
   
    @stack('scripts')
</body>
</html>
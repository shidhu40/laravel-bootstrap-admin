<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Bootstrap Core CSS -->
	<link href="{!! asset('theme/backend/css/bootstrap.min.css') !!}" rel="stylesheet">
	<!-- Animate CSS -->
	<link href="{!! asset('theme/backend/css/animate.css') !!}" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="{!! asset('theme/backend/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
	<!-- Admin CSS -->
	<link href="{!! asset('theme/backend/css/admin.css') !!}" rel="stylesheet">
    @yield('styles')
</head>
<body class="app sidebar-mini rtl">
	<div id="wrapper">
		<!-- Navigation -->
		@include('admin.elements.header')
		<div id="page-wrapper" class="gray-bg">
			@include('admin.elements.sidebar')
			<div class="wrapper wrapper-content">
			@yield('content')
			</div>	
			@include('admin.elements.footer')
        </div>
	</div>
	
	 <!-- /#wrapper -->
   <!-- jQuery -->
   <script src="{!! asset('theme/backend/js/jquery.js') !!}"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="{!! asset('theme/backend/js/bootstrap.js') !!}"></script>
   
    <!-- Proper Js -->
   <script src="{!! asset('theme/backend/js/popper.min.js') !!}"></script>
   
   <!-- Metis Menu Plugin JavaScript -->
   <script src="{!! asset('theme/backend/js/jquery.metisMenu.js') !!}"></script>
   <!-- Custom Theme JavaScript -->
   <script src="{!! asset('theme/backend/js/jquery.slimscroll.min.js') !!}"></script>
   
   <!-- Custom Theme JavaScript -->
   <script src="{!! asset('theme/backend/js/inspinia.js') !!}"></script>
   
    @stack('scripts')
</body>
</html>
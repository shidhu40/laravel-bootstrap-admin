<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>SB Admin 2 - Bootstrap Admin Theme</title>
   <!-- Bootstrap Core CSS -->
   <link href="{!! asset('theme/css/bootstrap.min.css') !!}" rel="stylesheet">
   <!-- Animate CSS -->
   <link href="{!! asset('theme/css/animate.css') !!}" rel="stylesheet">
   <!-- Custom Fonts -->
   <link href="{!! asset('theme/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
   <!-- Admin CSS -->
   <link href="{!! asset('theme/css/admin.css') !!}" rel="stylesheet">
</head>
<body>
   <div id="wrapper">
		<!-- Navigation -->
		@include('admin.header')
		<div id="page-wrapper" class="gray-bg">
			@include('admin.sidebar')
			<div class="wrapper wrapper-content">
			@yield('content')
			</div>	
			@include('admin.footer')
        </div>
	</div>
   <!-- /#wrapper -->
   <!-- jQuery -->
   <script src="{!! asset('theme/js/jquery.js') !!}"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="{!! asset('theme/js/bootstrap.js') !!}"></script>
   
    <!-- Proper Js -->
   <script src="{!! asset('theme/js/popper.min.js') !!}"></script>
   
   <!-- Metis Menu Plugin JavaScript -->
   <script src="{!! asset('theme/js/jquery.metisMenu.js') !!}"></script>
   <!-- Custom Theme JavaScript -->
   <script src="{!! asset('theme/js/jquery.slimscroll.min.js') !!}"></script>
   
   <!-- Custom Theme JavaScript -->
   <script src="{!! asset('theme/js/inspinia.js') !!}"></script>
</body>
</html>

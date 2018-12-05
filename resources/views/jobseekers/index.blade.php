<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		@yield('title')
		<link href="{{ asset('css/admin_bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/user_admin_style.css') }}" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper" >
			@include('jobseekers.partials.top-navigation')
			@include('jobseekers.partials.left-navigation')
			
			<!-- end SIDE NAVIGATION -->
			<!-- begin MAIN PAGE CONTENT -->
			<div id="page-wrapper">
				@yield('content')
				<!-- /.page-content -->
			</div>
		</div>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/user_admin.js') }}"></script>
		<script>
			$(init);
		</script>
		@yield('script')
	</body>
</html>
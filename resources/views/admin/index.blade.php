<script>var current_cat="";</script><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Administration Panel</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ asset('css/admin/users.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/admin/main.css') }}"/>
		<link href="{{ asset('css/admin/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/admin/layout.css') }}" rel="stylesheet">
		<link href="{{ asset('css/admin/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="{{ asset('js/admin/context_menu.js') }}"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			block_ajax=false;
		</script>
		<script src="{{ asset('js/admin/jquery-1.11.0.js') }}"></script>
	</head>
	<body onload="PageLoaded()">
		<div id="wrapper">
			<!-- Navigation -->
			@include('admin.partials.navigation')
			<!-- Page Content -->
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12" id="main-content">
						<!--main content area-->
						@yield('content')
						<!--end main content area-->
					</div>
				</div>
			</div>
		</div>

		<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/admin/metisMenu.min.js') }}"></script>
		<script src="{{ asset('js/admin/admin.js') }}"></script>
		<div id="ContextMenuContainer"></div>
	</body>
</html>
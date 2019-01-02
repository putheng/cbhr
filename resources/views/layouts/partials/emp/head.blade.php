<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/images/my-logo-3.png">

<script type="application/x-javascript">
	addEventListener(
		"load", 
		function() {
			setTimeout(hideURLbar, 0); 
		},
		false
	);
	
	function hideURLbar(){
		window.scrollTo(0, 1);
	} 
	
	window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
	</script>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/emp/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('css/emp/lines.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/emp/font-awesome.css') }}" rel="stylesheet">
<!----webfonts--->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<!-- Nav CSS -->
<link href="{{ asset('css/emp/custom.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/emp/style.css') }}" rel='stylesheet' type='text/css' />

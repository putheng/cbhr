<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.partials.emp.head')
</head>
<body>
    <div id="app">
        <div id="wrapper">
            @include('layouts.partials.emp.header')
    
            @yield('content')
        </div>
    </div>

	@include('layouts.partials.emp.footer')
	@yield('script')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.partials.admin.head')
	@yield('css')
</head>
<body>
    <div id="app">
        <div id="wrapper">
            @include('layouts.partials.admin.header')
    
            @yield('content')
        </div>
    </div>

	@include('layouts.partials.admin.footer')
	@yield('script')
</body>
</html>

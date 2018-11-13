<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('users.admin.partials.head')
</head>
<body>
    <div id="app">
        <div id="wrapper">
            @include('users.admin.partials.header')
    
            @yield('content')
        </div>
    </div>

	@include('users.admin.partials.footer')
	@yield('script')
</body>
</html>

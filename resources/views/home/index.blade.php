<!DOCTYPE html>
<html>
    <head>
        @include('home.partials.head')
        
    </head>
    <body>
       <div id="wrapper"> 
        @include('home.partials.header')
        
        <div class="top-line"></div>
        
        @include('home.partials.carousel')
        
        <div class="container main-container">
            <div class="row">
                <div class="col-md-8 min-height-400">
	            <!-- Main -->
                    @yield('content')
                    
                <!-- End Main -->
                </div>
                <div class="col-md-4">
                    @yield('sidebar')
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <br>
        @include('home.partials.companyCarousel')
        @include('home.partials.mainFooter')
        @include('home.partials.footerBottom')
        @include('home.partials.loginDialog')
        @include('home.partials.applyModal')
        <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/functions.js?v=5') }}"></script>
        @yield('script')
        </div>
    </body>
</html>
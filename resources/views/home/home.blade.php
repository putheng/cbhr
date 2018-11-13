<!DOCTYPE html>
<html>
    <head>
        @section('title')
            <title>Cambodia HR | Cambodia’s leading human resources and recruitment site.</title>
        @endsection
        
        @include('home.partials.head')
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
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
                    @include('home.partials.homeCategory')
                    
                <!-- End Main -->
                </div>
                <div class="col-md-4">
                    @include('home.partials.rightSideBar')
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <br>
        @include('home.partials.companyCarousel')
        @include('home.partials.mainFooter')
        @include('home.partials.footerBottom')
        @include('home.partials.loginDialog')
        <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css">
        @include('home.partials.homeScript')
        
        </div>
    </body>
</html>
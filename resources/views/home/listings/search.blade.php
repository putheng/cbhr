<!DOCTYPE html>
<html>
    <head>
        
        @include('home.partials.head')
        <title>Cambodia HR | Cambodia’s leading human resources and recruitment site.</title>

    </head>
    <body>
       <div id="wrapper"> 
        @include('home.partials.header')
        
        <div class="top-line"></div>
        
        @include('home.partials.carousel')
        
        <div class="container main-container">
            <div class="row">
                
                <div class="col-md-4 pull-right hide-sm " id="filter" >
                     @include('home.partials.filter')
                </div>
                <div class="col-md-8 min-height-400 pull-left">
                @if($listings->count())
                
                <h2>
                    About <b>{{ $listings->total() }}</b> results
                
                    <div class="pull-right visible-xs visible-sm menu-top-margin">
                    	<a href="javascript:ShowHide('filter')" class="expand_menu_link">
                    		<img src="{{ asset('images/filter-gears.png') }}" alt="expand menu">
                    		
                    	</a>
                    </div>
                </h2>
                
                <hr>
                    @foreach($listings as $listing)
                        <div class="job-wrap">
                        	<div class="row">
                        		<div class="col-sm-8">
                        			<a target="_blank" class="results-job-title-link" href="{{ route('listing.show', $listing) }}">
                        				<h4 class="no-margin results-job-title">{{ $listing->title }}</h4>
                        			</a>
                        			<div class="icon-h5">
                        				<h5>
                        					<span class="glyphicon glyphicon-equalizer"></span> 
                        					{{ $listing->company->name }}
                        				</h5>
                        				<h5>
                        					<span class="glyphicon glyphicon-map-marker"></span> 
                        					{{ optional($listing->area->parent)->name }} &raquo; {{ $listing->area->name }}
                        				</h5>
                        				<h5>
                        				    <span class="glyphicon glyphicon-usd"></span>
                        				    {{ $listing->salary->name }}
                        				</h5>
                        			</div>
                        			<ul class="results-job-details">
                        				<li>{{ $listing->category->name }}</li>
                        				<li>{{ $listing->term->name }}</li>
                        			</ul>
                        			<div class="results-job-description">
                        				{{ str_limit($listing->description, 150) }} 
                        			</div>
                        			<div class="clearfix"></div>
                        			<br>
                        			<div class="icon-h5">
                        				<h5>
                        				    <span class="glyphicon glyphicon-time"></span>
                        				    {{ $listing->created_at->diffForHumans() }}
                        			    </h5>
                        			</div>
                        		</div>
                        		<div class="col-sm-4">
                        			<div class="save-job-link pull-right">
                        				<a href="javascript:SaveListing({{ $listing->id }})" id="save_{{ $listing->id }}">
                            				Save
                            				<img height="13" src="{{ asset('images/save-small-icon.png') }}" alt="Save">
                        				</a>
                        			</div>
                        			<div class="hidden-xs">
                        				<div class="save-job-link"><br>Post by<br></div>
                        				@if(!empty($listing->company->avatarPath()))
                            				<div class="hidden-xs">
                            					<br>
                            					<a href="{{ route('company.show', $listing->company) }}">
                            					    <img style="max-height:115px;" class="img-responsive logo-results" src="{{ $listing->company->avatarPath() }}" alt="">
                            					</a>										
                            				</div>
                        				@else
                            				<p class="text-center">
                                            	<span class="feed-company">{{ $listing->company->name }}</span>
                                            </p>
                        				@endif
                        			</div>
                        			<p class="text-center" style="margin-top: 15px;"><br>
                        				<a href="{{ route('listing.show', $listing) }}" class=" underline-link">Job Details</a>
                        			</p>
                        		</div>
                        	</div>
                        </div>
                    @endforeach
                    
                    {{ $listings->links() }}
                @else
                    <p class="h3">No listings found.</p>
                @endif


                <!-- End Main -->
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
        <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

        </div>
    </body>
</html>
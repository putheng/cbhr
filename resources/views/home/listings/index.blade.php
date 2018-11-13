@extends('home.index')

@section('title')
    <title>Cambodia HR | Cambodia’s leading human resources and recruitment site.</title>
@endsection

@section('content')
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@if($listings->count())
    @foreach($listings as $listing)
        <div class="job-wrap">
        	<div class="row">
        		<div class="col-sm-8">
        			<a target="_blank" class="results-job-title-link" href="{{ route('listing.show', $listing) }}">
        				<h4 class="no-margin results-job-title">
                            {{ $listing->title }}
                        </h4>
        			</a>
        			<div class="icon-h5">
        				<h5>
        					<span class="glyphicon glyphicon-equalizer"></span> 
        					{{ optional($listing->company)->name }}
        				</h5>
        				<h5>
        					<span class="glyphicon glyphicon-map-marker"></span> 
        					{{ optional($listing->area)->name }}
        				</h5>
        				<h5>
        				    <span class="glyphicon glyphicon-usd"></span>
        				    {{ optional($listing->salary)->name }}
        				</h5>
        			</div>
        			<ul class="results-job-details">
        				<li>{{ optional($listing->category)->name }}</li>
        				<li>{{ optional($listing->term)->name }}</li>
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
                            	<span class="feed-company">{{ $listing->company->name }}xxx</span>
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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        				    <span aria-hidden="true">&times;</span>
        				</button>
        				<h4 class="modal-title" id="myModalLabel">
        				 ចង់បានការងារល្អប្រាក់ខែខ្ពស់មេនទេ
        				 
        				 </h4>
        			</div>
        			<div class="modal-body text-center">
        			    <p>ចុច Like Page ដើម្បីទទួលបានដំណឹងជ្រើសរើសបុគ្គលិក ច្រើនជាង 200​​ តំណែងរាល់ថ្ងៃ</p>
                        <div class="fb-page" 
                          data-href="https://www.facebook.com/CambodiaHRcom/"
                          data-hide-cover="false"
                          data-adapt-container-width="true" 
                          data-show-facepile="true"></div>
        			</div>
        		</div>
        	</div>
        </div>
        
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

@endsection

@section('sidebar')
    <di class="hidden-xs hidden-sm">
	    @include('home.partials.filter')
    </di>
@endsection
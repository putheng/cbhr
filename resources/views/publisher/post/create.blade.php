@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Select listings to post</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
			    <div class="table-responsive">
					@if($listings->count())
						@foreach($listings as $listing)
                            <div class="media">
                                <div class="media-left">
                                    <img width="60" class="media-object" 
                                    src="{{ $listing->company->avatarPath() }}"
                                    alt="{{ $listing->company->name }}">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">{{ $listing->title }}</h5>
                                    <p>{{ str_limit($listing->description, 100) }}</p>
                                    <span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>
                                        <span>{{ $listing->company->name }}</span>,
                                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                        <span>{{ $listing->area->name }}</span>
                                </div>
                                <div class="media-right">
                                    <button onclick="postToFeed('{{ route('listing.show', $listing) }}?token={{ encrypt($listing->id .'-'. auth()->id()) }}', '{{ $listing->id }}');" class="btn btn-info btn-sm">Share</button>
                                    <form class="hidden" action="{{ route('publisher.promote.store', [$listing]) }}" method="post" id="listings-post-form-{{ $listing->id }}">
                                                {{ csrf_field() }}
                                            </form>
                                </div>
                            </div>

						@endforeach
					@else
						<p><span>No listings found.</span></p>
					@endif
				</div><br>
				<div class="text-right">
				    {{ $listings->links() }}
				</div>
			</div>
			
		</div>
		
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection
@section('script')
<script src='https://connect.facebook.net/en_US/all.js' type="text/javascript"></script>
<script type="text/javascript"> 
    FB.init({appId: "{{ config('services.facebook.client_id') }}", status: true, cookie: true});
    function postToFeed(url, id) {
        event.preventDefault(); 
        FB.ui({
            method: 'feed',
            link: url,
        }, function(response){
            if(response.length == 0){
                document.getElementById('listings-post-form-'+ id).submit();
            }
        });
    }

</script>
@endsection
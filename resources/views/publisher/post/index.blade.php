@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Posted listings</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
			    <div class="table-responsive">
					@if($posts->count())
						@foreach($posts as $post)
                        <div class="media">
                            <div class="media-left">
                                <div class="media-left">
                                    <img width="60" class="media-object" 
                                    src="{{ $post->listing->company->avatarPath() }}"
                                    alt="{{ $post->listing->company->name }}">
                                </div>
                                <div class="media-body">
                                    <h5>{{ $post->listing->title }}</h5>
                                    <span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>
                                        <span>{{ $post->listing->company->name }}</span>,
                                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                        <span>{{ $post->listing->area->name }}</span>
                                </div>
                                <div class="medai-right">
                                    <form class="hidden" action="{{ route('publisher.promote.store', [$post->listing]) }}" method="post" id="listings-post-form-{{ $post->id }}">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                            
                        </div>
							
						@endforeach
					@else
						<p><span>No listings found.</span></p>
					@endif
				</div><br>
				<div class="text-right">
				    {{ $posts->links() }}
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
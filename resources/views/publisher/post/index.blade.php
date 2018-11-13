@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Posted listings</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
			    <div class="table-responsive">
    				<table class="table">
    					<thead>
    						<tr>
    							<th>ID</th>
    							<th>Title</th>
    							<th>View</th>
    							<th>Earn</th>
    							<th class="text-center">Action</th>
    						</tr>
    					</thead>
    					<tbody>
    						@if($posts->count())
    							@foreach($posts as $post)
    								<tr>
    									<td>{{ $post->id }}</td>
    									<td>
                                            <a target="_blank" 
                                                href="{{ route('listing.show', $post->listing) }}">
                                                    {{ $post->listing->title }}
                                            <a/>
                                        </td>
    									<td>
    										<a href="#">{{ $post->views }}</a>
    									</td>
    									<td>
    										${{ $post->earn() }}
    									</td>
    									<td class="text-center">
    									    <a onclick="postToFeed('{{ route('listing.show', $post->listing) }}?token={{ encrypt($post->listing->id .'-'. auth()->id()) }}', '{{ $post->id }}');" href="#" class="btn btn-info btn-sm">Post again</a>
	    									<form class="hidden" action="{{ route('publisher.promote.store', [$post->listing]) }}" method="post" id="listings-post-form-{{ $post->id }}">
											    {{ csrf_field() }}
											</form>
    									</td>
    								</tr>
    							@endforeach
    						@else
    							<tr>
    								<td class="text-center" colspan="6">
    									<span>No listings found.</span>
    								</td>
    							</tr>
    						@endif
    					</tbody>
    				</table>
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
<script src='http://connect.facebook.net/en_US/all.js' type="text/javascript"></script>
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
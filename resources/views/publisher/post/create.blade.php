@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Select listings to post</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
			    <div class="table-responsive">
    				<table class="table">
    					<thead>
    						<tr>
    							<th>ID</th>
    							<th>Title</th>
    							<th>Category</th>
    							<th>Company</th>
    							<th class="text-center">Action</th>
    						</tr>
    					</thead>
    					<tbody>
    						@if($listings->count())
    							@foreach($listings as $listing)
    								<tr>
    									<td>{{ $listing->id }}</td>
    									<td><a target="_blank" href="{{ route('listing.show', $listing) }}">{{ $listing->title }}</a></td>
    									<td>{{ $listing->category->name }}</td>
    									<td>{{ $listing->company->name }}</td>
    									<td class="text-center">
    									    <a onclick="postToFeed('{{ route('listing.show', $listing) }}?token={{ encrypt($listing->id .'-'. auth()->id()) }}', '{{ $listing->id }}');" href="#" class="btn btn-info btn-sm">Post</a>
	    									<form class="hidden" action="{{ route('publisher.promote.store', [$listing]) }}" method="post" id="listings-post-form-{{ $listing->id }}">
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
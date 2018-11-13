@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Unpublish Listings</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Location</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						@if($listings->count())
							@foreach($listings as $listing)
								<tr>
									<th scope="row">{{ $listing->id }}</th>
									<td>
										<a href="#">{{ $listing->title }}</a>
										<small>({{ $listing->created_at->diffForHumans() }})</small>
									</td>
									<td>{{ optional($listing->area->parent)->name }} &nbsp; > &nbsp;
									{{ optional($listing->area)->name }}</td>
									<td class="text-center">
										<ul class="list-inline no-margin">
											<li><a href="{{ route('employer.listing.payment', $listing) }}">Publish</a></li>
											<li><a href="{{ route('employer.listing.edit', $listing) }}">Edit</a></li>
											<li><a onclick="event.preventDefault(); document.getElementById('listings-destroy-form-{{ $listing->id }}').submit();" href="#">Delete</a></li>
											<form action="{{ route('employer.listing.destroy', [$listing]) }}" method="post" id="listings-destroy-form-{{ $listing->id }}">
											    {{ csrf_field() }}
											    {{ method_field('DELETE') }}
											</form>
										</ul>
									</td>
								</tr>
							@endforeach
						@else	
							<tr>
								<td colspan="4" class="text-center">
									No listings found.
									<a href="{{ route('employer.listing.create') }}">Create Listing</a>
								</td>
							</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>

		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection
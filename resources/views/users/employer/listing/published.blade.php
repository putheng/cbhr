@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Publish Listings</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Location</th>
							<th class="text-center">Action</th>
							<th class="text-center">Views</th>
						</tr>
					</thead>
					<tbody>
						@if($listings->count())
							@foreach($listings as $listing)
								<tr>
									<th scope="row">{{ $listing->id }}</th>
									<td>
										<a target="_blank" href="{{ route('listing.show', $listing) }}?ref">{{ $listing->title }}</a>
										<small>({{ $listing->created_at->diffForHumans() }})</small>
									</td>
									<td>{{ optional($listing->area->parent)->name }} &nbsp; > &nbsp;
									{{ optional($listing->area)->name }}</td>
									<td class="text-center">
										<ul class="list-inline no-margin">
											<li><a href="{{ route('employer.listing.edit', $listing) }}">Edit</a></li>
											<li><a onclick="confirmDelete('{{ $listing->id }}')" href="#">Delete</a></li>
											<form action="{{ route('employer.listing.destroy', [$listing]) }}" method="post" id="listings-destroy-form-{{ $listing->id }}">
											    {{ csrf_field() }}
											    {{ method_field('DELETE') }}
											</form>
										</ul>
									</td>
									<td class="text-center">{{ $listing->views }}</td>
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
			{{ $listings->links() }}
		</div>

		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection
@section('script')
<script type="text/javascript">
	function confirmDelete(id){
		event.preventDefault();
		if(confirm('Are you sure you want to delete this job ?')){
			document.getElementById('listings-destroy-form-'+ id).submit();
		}
	}
</script>
@endsection
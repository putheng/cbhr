@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-thumbs-up icon-rounded"></i>
						<div class="stats">
						  <h5><strong>{{ $listingViewsSum }}</strong></h5>
						  <span>Listing view</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users user1 icon-rounded"></i>
						<div class="stats">
						  <h5><strong>0</strong></h5>
						  <span>Application</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-comment user2 icon-rounded"></i>
						<div class="stats">
						  <h5><strong>{{ auth()->user()->listings->count() }}</strong></h5>
						  <span>Listing</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
						<div class="stats">
						  <h5><strong>${{ number_format(auth()->user()->usd, 2) }}</strong></h5>
						  <span>Balance</span>
						</div>
					</div>
				 </div>
				<div class="clearfix"> </div>
			</div>
			

			<div class="col-md-8 span_3">
				<div class="bs-example1" data-example-id="contextual-table">
				<h4>Latest Listing</h4>
				@if($listings->count())
					<table class="table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Category</th>
								<th>Location</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							@foreach($listings as $listing)
								<tr>
									<td>{{ $listing->title }}</td>
									<td>{{ $listing->category->name }}</td>
									<td>{{ $listing->area->name }}</td>
									<td>
										<a href="{{ route('employer.listing.edit', $listing) }}">Edit</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
				</div>
			</div>
			
<div class="col-md-4 span_4">
	<div class="col_2 stats-info">
		<div class="panel-heading">
			<h4 class="panel-title">{{ $company->name }}</h4>
		</div>
		<div class="panel-body">
			<ul class="list-unstyled">
				<li>
					<div><strong>INdustry :</strong></div>
					{{ optional($company->industry)->name }}
				</li>
				<li>
					<div><strong>Type :</strong></div>
					{{ optional($company->type)->name }}
				</li>
				<li>
					<div><strong>Employee :</strong></div>
					{{ optional($company->employee)->name }}
				</li>
				<li>
					<div><strong>Address :</strong></div>
					{{ $company->address }}
				</li>
				<li>
					<div><strong>Website :</strong></div>
					{{ $company->website }}
				</li>
				<li>
					<div><strong>Phone :</strong></div>
					{{ $company->phone }}
				</li>
			</ul>
		</div>
		
	</div>
</div>
			
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection
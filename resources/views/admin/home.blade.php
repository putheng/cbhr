@extends('admin.index')

@section('content')


<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="white-link fa fa-list-alt fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $listings->total() }}</div>
						<div>Jobs</div>
					</div>
				</div>
			</div>
			<a href="{{ route('admin.listing.index') }}">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $publishers }}</div>
						<div>Publishers</div>
					</div>
				</div>
			</div>
			<a href="#users-jobseekers">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-institution fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $companies->total() }}</div>
						<div>Employers</div>
					</div>
				</div>
			</div>
			<a href="#users-employers">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-bar-chart-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">0</div>
						<div>Job Applications</div>
					</div>
				</div>
			</div>
			<a href="#jobs-applications">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
@include('admin.partials.latest_employer')
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading gray-gradient">
				<i class="fa fa-bar-chart-o"></i> 
				Job Statistics	
			</div>
			<div class="panel-body">
				<br/>
				<div class="flot-chart">
					<div class="flot-chart-content" id="flot-bar-chart"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading gray-gradient">
				<i class="fa fa-calendar fa-fw"></i> Latest Jobs			
			</div>
			<div class="panel-body">
				<div class="list-group">
				    @foreach($listings as $listing)
    					<a target="_blank" href="{{ route('listing.show', $listing) }}" class="list-group-item">
    						<i class="fa fa-list-alt"></i>
    						    {{ $listing->title }}
    						<span class="pull-right text-muted small">
    						    <em>{{ $listing->created_at->diffForHumans() }}</em>
    						</span>
    						<div class="clearfix"></div>
    					</a>
					@endforeach
				</div>
				<a href="#jobs-list" class="btn btn-default btn-block">View All</a>
			</div>
		</div>
	</div>
</div>


@endsection
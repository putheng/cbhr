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
			<a href="{{ route('admin.publisher.index') }}">
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
			<a href="{{ route('admin.employer.index') }}">
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
			<a href="#">
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
    					<a target="_blank" href="{{ route('listing.show', $listing) }}?ref" class="list-group-item">
    						<i class="fa fa-list-alt"></i>
    						    {{ $listing->title }}
    						<span class="pull-right text-muted small">
    						    <em>{{ $listing->created_at->diffForHumans() }}</em>
    						</span>
    						<div class="clearfix"></div>
    					</a>
					@endforeach
				</div>
				<a href="{{ route('admin.listing.index') }}" class="btn btn-default btn-block">View All</a>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="/js/admin/excanvas.min.js"></script>
<script src="/js/admin/jquery.flot.min.js"></script>
 
 
<script type="text/javascript">
$(function () {
    var data1 = [
    	[0, "0"],[4, "0"],[8, 3],[12, "0"],[16, 3],[20, 1],[24, 5],[28, "0"]
    ];
    var data2 = [
    	[1, 1],[5, "0"],[9, "0"],[13, "0"],[17, "0"],[21, "0"],[25, "0"],[29, 1]
    ];
	var data3 = [
    	[2, 1],[6, 1],[10, 3],[14, 1],[18, "0"],[22, "0"],[26, 2],[30, "0"]
    ];
	
	var ticks = [
    	[0, "December 31"],[4, "January 6"],[8, "January 7"],[12, "January 27"],
    	[16, "September 17"],[20, "September 19"],[24, "April 29"],[28, "May 13"]
    ];
	
	var y_ticks = [
    	[0, "0"],[1, "1"],[2, "2"],[3, "3"],[4, "4"],[5, "5"]
    ];
 
    var data = [{
        label: "New Jobs",
        data: data1,
        bars: 
		{
			barWidth: 0.8,
			show: true
		}
    },{
        label: "Jobseekers",
        data: data2,
        bars:
		{
		  barWidth: 0.8,
          show:true
        }
    },{
        label: "Employers",
        data: data3,
        bars:
		{
		  barWidth: 0.8,
          show:true
        }
    }];
 
    var options = {
        xaxis: {
            ticks: ticks
        },
		yaxis: {
            ticks: y_ticks
        },
        grid:{
            backgroundColor: {colors: ["#969696", "#5C5C5C"] }
        }
    };
 
    var plot = $.plot($("#flot-bar-chart"), data, options);  
});
</script>

@endsection
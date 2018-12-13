@extends('home.index')
@section('title')
<title>{{ $company->name }} | CambodiaHR</title>
@endsection
@section('content')
<div class="page-wrap">
	<h2 class="lfloat">{{ $company->name }}</h2>
	<br>
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab-details" data-toggle="tab">
				<span class="glyphicon glyphicon-list-alt"></span> 
				Employer Profile
				</a>
			</li>
			<li>
				<a href="#tab-share" data-toggle="tab">
				<span class="glyphicon glyphicon-bullhorn"></span>
				Employer
				Jobs {{ $company->listings->count() }}
				</a>
			</li>
		</ul>
		<div class="tab-content">
			<br>
			<div class="tab-pane active" id="tab-details">
				<div class="row">
					<div class="col-md-8">
						<p>
							<b>
							<span class="glyphicon glyphicon-user"></span>
							Contact Person<br>
							</b>
							{{ $company->user->name }}	
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-phone-alt"></span>
							Phone<br>
							</b>
							{{ $company->phone }}			
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-envelope"></span>
							Email<br>
							</b>
							{!! email_protected($company->user->email) !!}
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-equalizer"></span>
							Industry<br>
							</b>
							{{ $company->industry->name }}
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-flag"></span>
							Type <br>
							</b>
							{{ $company->type->name }}				
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-education"></span>
							Employees <br>
							</b>
							{{ $company->employee->name }}			
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-globe"></span>
							Website<br>
							</b>				
							<a href="//{{ $company->website }}" target="_blank">{{ $company->website }}</a>
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-road"></span>
							Address <br>
							</b>
							{{ $company->address }}						
						</p>
						<br>
						<p>
							<b>
							<span class="glyphicon glyphicon-list-alt"></span>
							Description<br>
							</b>
						</p>
						<p>{!! nl2br($company->description) !!}</p>
					</div>
					<div class="col-md-4">
						<div class="final-result-image">
						    <img class="img-responsive" alt="{{ $company->name }}" src="{{ $company->avatarPath() }}">
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="tab-pane" id="tab-share">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table style="width:100%" class="table table-bordered table-striped table-hover" id="myTable">
								<thead>
									<th>ID</th>
									<th>Job Title</th>
									<th>Location</th>
									<th>Closing Date</th>
								</thead>
								<tbody>
								    @foreach($company->listings as $listing)
    									<tr>
    										<td>{{ $listing->id }}</td>
    										<td>
    											<a href="{{ route('listing.show', $listing) }}" target="_blank">
    											{{ $listing->title }}												</a>
    										</td>
    										<td>{{ $listing->area->name }}</td>
    										<td></td>
    									</tr>
								    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<br>
</div>
<div class="clearfix"></div>
<br>
@endsection

@section('sidebar')
	@include('home.partials.rightSideBar')
@endsection
@section('script')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
    		$('#myTable').DataTable();
    	});
	</script>
@endsection
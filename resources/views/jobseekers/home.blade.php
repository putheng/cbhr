@extends('jobseekers.index')
@section('title')
	<title>Job Seeker | Dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<br>
			<div class="row">
				<div class="col-md-3 welcome-left-block">
					<h2>
						Welcome John,
					</h2>
					<br><br>
					<span class="home-warning-text">
						You don't have any received messages.
					</span>
					<br><br>
				</div>
				<div id="home-links-area" class="col-md-9">
					<div class="row" style="padding:10px">
						<div class="col-md-4 col-sm-6 col-xs-12 t-padding" id="box-1">
							<div class="tile-p" id="b-1">
								<a class="home-tile box-1-back" href="{{ route('seeker.listings.search') }}">
									<img class="pull-right" src="{{ asset('images/search-b.png') }}">
									<h3 class="h3-tile">Search for Jobs</h3>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 t-padding" id="box-2">
							<div class="tile-p" id="b-2">
								<a class="home-tile box-2-back" href="{{ route('seeker.profile.preferences') }}">
									<img class="pull-right" src="{{ asset('images/icons/job_preferences.png') }}">
									<h3 class="h3-tile">Job Preferences</h3>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 t-padding" id="box-3">
							<div class="tile-p" id="b-3">
								<a class="home-tile box-3-back" href="{{ route('seeker.resume.create') }}">
									<img class="pull-right" src="{{ asset('images/icons/resume_creator.png') }}">
									<h3 class="h3-tile">Resume Creator</h3>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 t-padding" id="box-4">
							<div class="tile-p" id="b-4">
								<a class="home-tile box-4-back" href="{{ route('seeker.listings.application') }}">
									<img class="pull-right" src="{{ asset('images/apply.png') }}">
									<h3 class="h3-tile">Application History</h3>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 t-padding" id="box-5">
							<div class="tile-p" id="b-5">
								<a class="home-tile box-5-back" href="#">
									<img class="pull-right" src="/images/icons/list.png">
									<h3 class="h3-tile">My Documents</h3>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 t-padding" id="box-6">
							<div class="tile-p" id="b-6">
								<a class="home-tile box-6-back" href="#">
									<img class="pull-right" src="{{ asset('images/icons/add.png') }}">
									<h3 class="h3-tile">Add a New Document</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<br>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>Your job application history</strong>
						</div>
						<div class="panel-body">
							<div class="list-group">
								<br><i>You still didn't apply for any jobs.</i>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.page-content -->
</div>
@endsection

@section('script')
	<script type="text/javascript">
		function CallBack()
		{
			document.getElementById("main_container").innerHTML =
			top.frames['ajax-ifr'].document.body.innerHTML.trim();
		}
	</script>
@endsection
@extends('home.index')

@section('title')
    <title>Cambodia HR | Cambodia’s leading human resources and recruitment site.</title>
@endsection

@section('content')

<div class="page-wrap">
	<h3 class="no-margin">Are you an employer or recruiting agency?</h3>
	<hr>
	Sign up in order to be able to post jobs and search in the database with jobseeker resumes.	<br><br>
	<a href="{{ url('/register') }}" class="btn btn-primary upper-case white-font custom-back-color">
		Create your free account now
	</a>
	<div class="clearfix"></div>
	<br><br>
	<i>
		<a href="javascript:ShowHide('rec_search_form')" class="pull-right underline-link r-margin-15">Search</a>
	</i>
	<h3 class="no-margin">
		Browse the recruiting companies
	</h3>
	<hr/>
	
	<div id="rec_search_form" style="display: none;">
		<form name="home_form" action="" style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px" method="get"> 
			<div class="col-md-3 padding-top-10">
				Company Name					
			</div>
			<div class="col-md-7 no-padding">
				<input type="text" name="q" class="form-control" placeholder="">
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-md btn-default btn-green pull-right no-margin width-100">Search</button>
			</div>
			<div class="clearfix"></div>
		</form>	
		<br><br><br>
	</div>
	
	@foreach($companies as $company)
		<div class="search-result">
			<h4>
				<a href="{{ route('company.show', $company) }}">{{ $company->name }}</a>
				<div class="n-jobs-back">
					<a class="white-link" href="{{ route('company.show', $company) }}">
						{{ $company->listings->count() }} Jobs
					</a>
				</div>
			</h4>
			<div class="panel panel-default">
				<div class="panel-body padding-10">
					<div class="row no-padding">
						<div class="col-md-3 col-xs-12">
							<a href="{{ route('company.show', $company) }}">
								<img alt="{{ $company->name }}" src="{{ $company->avatarPath() }}" class="img-right-margin img-responsive" align="left">
							</a>
						</div>
						<div class="col-md-4 col-xs-12">
							<p>
								<span class="glyphicon glyphicon-map-marker"></span>
								{{ $company->address }}
							</p>
							<p>
								<span class="glyphicon glyphicon-earphone"></span>
								{{ $company->phone }}
							</p>
							<p>
								<span class="glyphicon glyphicon-globe"></span>
								<a href="//{{ $company->website }}" rel="nofollow" target="_blank">
									{{ $company->website }}
								</a>
							</p>
							<p>
								<span class="glyphicon glyphicon-envelope"></span>
								{!! email_protected($company->user->email) !!}
							</p>
						</div>
						<div class="col-md-5 col-xs-12 min-height-150">
							Latest Jobs	
							<ul class="padding-left-15 top-bottom-margin">
								@foreach($company->listings()->take(4)->latestFirst()->get() as $listing)
									<li><a href="{{ route('listing.show', $listing) }}" target="_blank">{{ $listing->title }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr/>
	@endforeach
	<br>
	{{ $companies->links() }}
</div>

@endsection

@section('sidebar')
	@include('home.partials.rightSideBar')
@endsection
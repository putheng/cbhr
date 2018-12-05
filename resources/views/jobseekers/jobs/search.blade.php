@extends('jobseekers.index')
@section('title')
	<title>Job Seeker listings search | CambodiaHR</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br/>
			<div class="fright">
				<a class="small-tile yellow-back" href="">
					<img class="pull-right" width="32" src="{{ asset('images/icons/welcome.png') }}"/>
					<h3 class="h3-tile">Dashboard</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>
				Search for Jobs
			</h3>
			<hr/>
			<form action="../index.php" method="post">
				<input type="hidden" name="mod" value="search">
				<input type="hidden" name="search" value="1">
				<input type="hidden" name="advanced" id="advanced_s" value="0">
				<div class="col-md-2" style="margin:0 !important">
					<h4 class="black-text">Job Details</h4>
				</div>
				<div class="col-md-4" style="border-left:3px solid #03997e;padding-left:40px;padding-bottom:5px">
					Keyword:		
					<input type="text" size="20" name="job_title" class="form-control"/>
					<br/>
					Category:	
					<br/>
					<select name="category" class="form-control">
						<option value="">All</option>
					</select>
				</div>
				<div class="col-md-4">
					Job Type			<br/>
					<select name="job_type" class="form-control">
						<option value="-1">All</option>
					</select>
					<br/>
					Location		
					<br/>
					<select name="location" class="form-control">
						<option value="-1">All</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<br/><br/>	
				<div class="col-md-2" style="margin:0 !important">
					<h4 class="black-text">
						Salary		
					</h4>
				</div>
				<div class="col-md-4" style="border-left:3px solid #e06c3b;padding-left:40px;padding-bottom:5px">
					From 
					<br/>
					<input type="number" step="0.01" name="salary_from" class="form-control" placeholder=""/>
					<br/>
					To 
					<input type="number" step="0.01" name="salary_to" class="form-control" placeholder=""/>
				</div>
				<div class="col-md-4">
					Per 
					<br/>
					<select name="salary_type" class="form-control">
						<option value="1">hour</option>
						<option value="2">week</option>
						<option value="3" selected>month</option>
						<option value="4">year</option>
					</select>
					<br/><br/>
					<input type="checkbox" name="bonuses" value="1" style="position:relative;top:2px"/>
					including bonuses	
				</div>
				<div class="clearfix"></div>
				<br/><br/>
				<div class="col-md-2" style="margin:0 !important">
					<h4 class="black-text">
						Company	
					</h4>
				</div>
				<div class="col-md-4" style="border-left:3px solid #c73d3d;padding-left:40px;padding-bottom:5px">
					Company Name		<br/>
					<input type="text" name="company_name" class="form-control" placeholder="">
				</div>
				<div class="col-md-4">
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-md-10">
					<input type="submit" class="btn btn-primary pull-right" style="min-width:150px" value=" Search ">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
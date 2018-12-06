@extends('jobseekers.index')
@section('title')
	<title>Job preferences | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile green-back" href="{{ route('seeker.resume.create') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/edit.png') }}">
					<h3 class="h3-tile">Create your resume</h3>
				</a>
			</div>
			<div class="clear"></div>
			<br>
			<h3>Job Preferences</h3>
			Preferred job categories, locations and brief description of the role you are seeking
			<br>
			<form action="index.php" method="post">
				<br>
				<h4>Briefly describe yourself and the type of role you are seeking:</h4>
				<textarea id="profile_description" name="profile_description" rows="5" cols="70" style="margin: 0px; width: 565px; height: 129px;"></textarea>
				<br>
				<br>
				<i>Expected Salary (per month):</i>
				<br>
				<input type="text" name="expected_salary" value="1500" style="width:300px">
				<br><br>
				<i>Job Type:</i>
				<br>
				<select name="job_type" style="width:300px">
				@foreach($terms as $term)
					<option value="{{ $term->id }}">{{ $term->name }}</option>
				@endforeach
				</select>
				<br><br>
				<i>Experience:</i>
				<br>
				<select name="experience" style="width:300px">
				@foreach($experiences as $experience)
					<option value="{{ $experience->id }}">{{ $experience->name }}</option>
				@endforeach
				</select>
				<br><br>
				<i>Availability:</i>
				<br>
				<select name="availability" style="width:300px">
					<option value="1">Immediately</option>
					<option value="2">2 weeks</option>
					<option value="3">1 month</option>
					<option value="4">3 months</option>
					<option value="5">More than 3 monsths</option>
				</select>
				<br><br>
				<br>
				<h4>
					Preferred Locations	
				</h4>
				@foreach($areas as $area)
					<div class="col-md-2 col-sm-3">
						<input type="checkbox" value="{{ $area->id }}" name="preferred_locations[]">
						{{ $area->name }}
					</div>
				@endforeach
				<div class="clearfix"></div>
				<br>
				<hr>
				<br>

				<h4>Job Categories</h4>

				@foreach($categories as $category)
					<div class="col-md-3 col-sm-4">
						<h5>
							<strong>
								<input type="checkbox" value="{{ $category->id }}" name="industry_sector[]">
								{{ $category->name }}
							</strong>
						</h5>
						<ul>
						@foreach($category->children as $children)
							<li>{{ $children->name }}</li>
						@endforeach
						</ul>
					</div>
				@endforeach
				<br>
				
				<div class="clearfix"></div>
				<br>
				<br>
				<br>
				<input type="submit" class="btn btn-lg btn-primary" value=" Save ">
			</form>
			<div class="clearfix"></div>
			<br><br>
		</div>
	</div>
</div>
@endsection
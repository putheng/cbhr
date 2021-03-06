@extends('home.index')

@section('title')
<meta property="og:url"           content="{{ route('listing.show', $listing) }}" />
<meta property="og:title"         content="{{ $listing->title }} | {{ $listing->company->name }}" />
<meta property="og:description"   content="{{ $listing->description }}" />
<meta property="og:image"         content="{{ $listing->company->coverPath() }}" />

<meta property="fb:pages" content="1545494539067929" />
<meta property="fb:admins" content="1738174996470831" />
<meta property="fb:app_id" content="279909695691770" />
<meta property="og:type" content="website" />

<meta name="description" content="{{ $listing->description }}"/>
<meta name="keywords" content="{{ $listing->description }}" />
<title>{{ $listing->title }} - {{ $listing->company->name }} | Cambodia HR</title>
@endsection

@section('content')

<div class="page-wrap">
	<div class="page-wrap">
		<a id="go_back_button" class="btn btn-default btn-xs pull-right no-decoration margin-bottom-5" href="javascript:GoBack()">Go Back</a>
		<div class="clearfix"></div>
		<div class="job-details-wrap">
			
			<h2 class="no-margin">{{ $listing->title }}</h2>
			<div class="icon-h5">
				<h5><span class="glyphicon glyphicon-equalizer"></span> {{ $listing->company->name }}</h5>
				<h5><span class="glyphicon glyphicon-map-marker"></span>
				@if($listing->area->parent)
					{{ $listing->area->parent->name }} &raquo {{ $listing->area->name }}
				@else
					{{ $listing->area->name }}
				@endif
				</h5>
				<h5><span class="glyphicon glyphicon-time"></span>  {{ $listing->started }} => {{ $listing->closing }}</h5>
			</div>
			<div class="job-details-info">
				<div class="row">
					<div class="col-md-6">
						<table class="job-require table table-bordered">
							<tbody>
								<tr>
									<td>Career Level</td>
									<td>{{ $listing->level->name }}</td>
								</tr>
								<tr>
									<td>Yr(s)Exp</td>
									<td>{{ $listing->experience->name }}</td>
								</tr>
								<tr>
									<td>Qualification</td>
									<td>{{ $listing->education->name }}</td>
								</tr>
								<tr>
									<td>Salary</td>
									<td>{{ $listing->salary->name }}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<table class="job-require table table-bordered">
							<tbody>
								<tr>
									<td>Job Type</td>
									<td>{{ $listing->term->name }}</td>
								</tr>
								<tr>
									<td>Job function</td>
									<td>{{ $listing->category->name }}</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>{{ $listing->gender->name }}</td>
								</tr>
								<tr>
									<td>Age</td>
									<td>{{ $listing->age->name }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4 class="border-b">Description</h4>
							<p>{!! nl2br(strip_tags($listing->description)) !!}</p>									
						</div>
						<div class="col-md-12 margin-top-10">
							<h4 class="border-b">Requirements</h4>
							<p>{!! nl2br(($listing->requirement)) !!}</p>							
						</div>
						<div class="col-md-12 margin-top-10">
							<h4 class="border-b">Contact Information</h4>
							<table class="table-contact">
								<tbody>
									<tr>
										<td><b>Person</b></td>
										<td>{{ $listing->user->name }}</td>
									</tr>
									<tr>
										<td><b>Phone</b></td>
										<td>{{ $listing->company->phone }}</td>
									</tr>
									<tr>
										<td><b>Email</b></td>
										<td>
											<div>{!! email_protected($listing->user->email) !!}</div>
										</td>
									</tr>
									<tr>
										<td><b>Address</b></td>
										<td>{{ $listing->company->address }}</td>
									</tr>
									<tr>
										<td><b>Website</b></td>
										<td>
											<a href="{{ $listing->company->website }}" target="_blank">
												{{ $listing->company->website }}
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<br>
					<a href="{{ route('company.show', $listing->company) }}">
						@if(!empty($listing->company->avatarPath()))
						<img style="margin:auto;" class="logo-border img-responsive" src="{{ $listing->company->avatarPath() }}" alt="Sales and Marketing Supervisor ($400-$800)">
						@else
            				<p class="text-center">
                            	<span class="feed-company">{{ $listing->company->name }}</span>
                            </p>
        				@endif
					</a>
					<div class="clearfix underline-link"></div>
					<a href="{{ route('company.show', $listing->company) }}" class="sub-text underline-link">Company Details</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<br>
			<img class="l-margin-20" src="{{ asset('images/save-small-icon.png') }}" height="12">
			<a class="small-link gray-link" href="javascript:SaveListing({{ $listing->id }})" id="save_{{ $listing->id }}">Save this job</a>	
			<div class="clearfix"></div>
			<div class="pull-right"> 
				<input type="submit" data-toggle="modal" data-target="#apply-modal" class="btn btn-default custom-gradient btn-green" value=" Apply for this Job ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection

@section('sidebar')

	<div class="gray-wrap">
		<h4 class="aside-header">Related Jobs</h4>
		
		@foreach($listing->relates() as $list)
		<hr class="top-bottom-margin">
		<div>
			<a class="jobDetail" href="{{ route('listing.show', $list) }}">
				<img align="left" src="{{ $list->company->avatarPath() }}" width="50" alt="{{ $listing->company->name }}" class="img-shadow img-right-margin">
			</a>
			<h5 class="no-margin">
				<a class="jobDetail" href="{{ route('listing.show', $list) }}">{{ $list->title }}</a>
			</h5>
			<span class="sub-text">{{ str_limit($list->description, 150) }}</span>
		</div>
		<div class="clearfix"></div>
		@endforeach
		
		<hr class="top-bottom-margin">
		<div class="text-center">
			<a class="underline-link" href="#">See All</a>
		</div>
		<br>
	</div>
	<br>
	<h3 class="aside-header">Advertisements</h3>
	<hr class="top-bottom-margin">
	<div class="hide text-center"></div>

	@include('home.partials.applyModal')
@endsection
@section('script')
<script type="text/javascript">
	$("#lists").on("click", ".badge", function() {
		if(confirm('Are you sure you want to permanently delete this file?')){
			var id = $(this).attr('id');
			$.ajax({
		        type: "POST",
		        url: "{{ route('file.destroy') }}",
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		        success: function (data) {
		        	//
		        },
		        async: true,
		        data: {hash:id},
		    });
			
			$(this).parent().remove();
		}
	});

	$("#resume").on("change", function (e) {
	    var file = $(this)[0].files[0];
	    var upload = new Upload(file);

	    if(upload.getSize() < 10485760){
	    	$('#loading').removeClass('hidden');
	    	upload.doUpload();
	    }else{
	    	alert('File size should be less than 10Mb');
	    }
	});

	var Upload = function (file) {
	    this.file = file;
	};

	Upload.prototype.getType = function() {
	    return this.file.type;
	};
	Upload.prototype.getSize = function() {
	    return this.file.size;
	};
	Upload.prototype.getName = function() {
	    return this.file.name;
	};
	Upload.prototype.doUpload = function () {
	    var that = this;
	    var formData = new FormData();
	    // add assoc key values, this will be posts values
	    formData.append("file", this.file, this.getName());
	    formData.append("upload_file", true);

	    $.ajax({
	        type: "POST",
	        url: "{{ route('file.upload') }}",
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        xhr: function () {
	            var myXhr = $.ajaxSettings.xhr();
	            if (myXhr.upload) {
	                myXhr.upload.addEventListener('progress', that.progressHandling, false);
	            }
	            return myXhr;
	        },
	        success: function (data) {
	        	$('#lists').append(`<li>
	        		<input type="hidden" name="resume[]" value="${data.id}">
	        		<a id="${data.id}" class="badge" href="#">x</a>${data.name}
	        	</li>`);

	        	 $('#loading').addClass('hidden');
	        },
	        error: function (error) {
	        	$('#loading').addClass('hidden');
	        },
	        async: true,
	        data: formData,
	        cache: false,
	        contentType: false,
	        processData: false,
	        timeout: 60000
	    });
	};




	$(document).ready(function(){
		fill_dropdownMenu('{{ request('token') }}', '{{ csrf_token() }}', '{{ setLoadToken() }}');
	});
</script>
@endsection
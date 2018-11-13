<div class="gray-wrap">
	<h4 class="aside-header">Featured Jobs</h4>
	<hr class="top-bottom-margin">
	@foreach($listings as $listing)
		<div>			
			<h5 class="no-margin">
				<a class="jobDetail" href="{{ route('listing.show', $listing) }}">{{ $listing->title }}</a>
			</h5>
			<span class="sub-text">{{ str_limit($listing->description, 150) }}</span>
		</div>
		<div class="clearfix"></div>
		<hr class="top-bottom-margin">
	@endforeach
	<div class="text-center">
		<a class="underline-link" href="#">See All</a>
	</div>
	<br>
</div>
<br>
<h3 class="aside-header">Advertisements</h3>
<hr class="top-bottom-margin">
<div class="hide text-center"></div>
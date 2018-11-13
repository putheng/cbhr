<p class="h1 light" style="margin-top:0;text-align:right;">More than
	<b><a href="{{ route('listing.index') }}">{{ $listings->count() }}</a></b> available jobs
</p>
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active">
		<a href="#by_category" aria-controls="by_category" role="tab" data-toggle="tab">
			Jobs by Category
		</a>
	</li>
	<li role="presentation" class="">
		<a href="#by_location" aria-controls="by_location" role="tab" data-toggle="tab">
			Jobs by Location
		</a>
	</li>
	<li role="presentation" class="">
		<a href="#by_salary" aria-controls="by_salary" role="tab" data-toggle="tab">
			Jobs by Salary
		</a>
	</li>
</ul>
<div class="tab-content padding-5">
	<div role="tabpanel" class="tab-pane active" id="by_category">
		<!--jobs by category-->
		<div class="row">
			@foreach($categories as $category)
					<div class="col-md-4 no-left-padding">
						<div class="category_link">
							<a href="{{ route('listing.search') }}?category={{ $category->id }}" class="main_category_link" title="{{ $category->name }}">
								{{ $category->name }}
							</a>
						</div>
						
						@foreach($category->children as $child)
							<span class="sub_category_link">
								<a title="{{ $child->name }}" href="{{ route('listing.search') }}?category={{ $child->id }}">{{ $child->name }}</a>
							</span>
						@endforeach
					</div>
			@endforeach
		</div>
		<!--end jobs by category-->
	</div>
	<div role="tabpanel" class="tab-pane" id="by_location">
		<!--jobs by location-->
		<div class="row">
			@foreach($areas as $area)
					<div class="col-md-4 no-left-padding">
						<div class="category_link">
							<a href="{{ route('listing.search') }}?area={{ $area->id }}" class="main_category_link" title="{{ $area->name }}">
								{{ $area->name }}
							</a>
						</div>
						
						@foreach($area->children as $city)
							<span class="sub_category_link">
								<a title="{{ $city->name }}" href="{{ route('listing.search') }}?area={{ $city->id }}">{{ $city->name }}</a>
							</span>
						@endforeach
					</div>
			@endforeach
		</div>
		<!--end jobs by location-->
	</div>
	<div role="tabpanel" class="tab-pane" id="by_salary">
		<div class="row">
			@foreach($salaries as $salary)
				<div class="col-md-4 no-left-padding">
					<div class="category_link">
						<a href="{{ route('listing.search') }}?s={{ $salary->id }}" class="main_category_link" title="{{ $salary->name }}">
							{{$salary->name}}
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
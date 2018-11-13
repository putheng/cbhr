<div id="home_panel_wrap">
	<div>
		<div id="myCarousel" class="carousel slide">
			<div id="slider_container" class="carousel-inner">
				@foreach($listings as $key => $listing)
					<div class="item{{ $key == 0 ? ' active' : '' }}">
						<div class="container">
							<div class="xcarousel-caption">
								<a class="carousel-link" href="{{ route('listing.show', $listing) }}">
									<img class="slide-product-image img-responsive hidden-xs right-margin-40" src="{{ $listing->company->avatarPath() }}" alt="ESL Head Teacher" align="left">
									<h2 class="xs-center no-top-margin carousel-link add-shadow">{{ $listing->title }}</h2>
									<p class="hide-xs hide-sm add-shadow">
									{{ str_limit($listing->description, 150) }}
									</p>
								</a>
								<br>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<img src="{{ asset('images/carousel-arrow-left.png') }}" alt="" class="carousel-icon">
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<img src="{{ asset('images/carousel-arrow-right.png') }}" alt="" class="carousel-icon">
			</a>
		</div>
		<script type="text/javascript">
			if(document.getElementById("myCarousel"))
			{
				$(document).ready(function() 
				{
					$('.carousel').carousel({
						interval: 9000
					})
				
				});
			}
		</script>
	</div>
	<div class="search-form-wrap">
		<div class="container">
			<div class="text-center">
				<h4 class="white-font bottom-margin-5">Search for Jobs</h4>
			</div>
			<form name="home_form" id="home_form" action="{{ route('listing.filter') }}" style="margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px" method="get">
				<div class="col-md-4 form-group group-1">
					<span class="main-search-label"><br></span>
					<input value="" type="text" name="title" class="input-job" placeholder="Keyword">
				</div>
				<div class="col-md-4 form-group group-2">
					<span class="main-search-label"><br></span>
					<select name="category" id="categories" class="input-job">
						<option value="">All Category</option>
						@foreach(\App\Models\Category::get()->toTree() as $category)
							<optgroup label="{{ $category->name }}">
								<option {{ request('category') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
									@foreach($category->children as $child)
										<option {{ request('category') == $child->id ? 'selected' : '' }} value="{{ $child->id }}">{{ $child->name }}</option>
									@endforeach
							</optgroup>
						@endforeach
					</select>
				</div>
				<div class="col-md-3 form-group group-3">
					<span class="main-search-label"><br></span>
					<select name="area" id="area" class="input-job">
						<option value="">All Location</option>
						@foreach(\App\Models\Area::get()->toTree() as $area)
							<optgroup label="{{ $area->name }}">
								<option {{ request('area') == $area->id ? 'selected' : '' }} value="{{ $area->id }}">{{ $area->name }}</option>
									@foreach($area->children as $child)
										<option {{ request('l') == $child->id ? 'selected' : '' }} value="{{ $child->id }}">{{ $child->name }}</option>
									@endforeach
							</optgroup>
						@endforeach
					</select>
				</div>
				<div class="col-md-1 no-padding">
					<span class="main-search-label"><br></span>
					<button type="submit" class="btn custom-gradient-2 btn-default btn-green pull-right no-margin">Search</button>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<div class="search-bottom-wrap">
		<div class="col-md-12 text-center">
			<a class="search-bottom-link underline-link" href="">Post a new job</a>			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
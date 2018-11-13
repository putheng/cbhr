<form action="{{ route('listing.filter') }}" method="get">
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Listing Filters
    		@if(request('term'))
    		    <a href="{{ clear_filter('term') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	
    	<!--=== Term Filter ==-->
    	<hr class="top-bottom-margin">
        @if(request('term'))
            <a class="text-danger" href="{{ clear_filter('term') }}">Clear</a>
        @endif
    	<div class="input-group">
        	<select name="term" class="form-control">
        		<option value="">All</option>
        		@foreach($terms as $term)
        		    <option {{ request('term') == $term->id ? 'selected' : ''  }} value="{{ $term->id }}">{{ $term->name }}</option>
        		@endforeach
        	</select>
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Job Type</button>
                
            </span>
    	</div>
    	<!--=== End term filter ==-->
    	
    	<hr class="top-bottom-margin">
    	<div class="input-group">
        	<select name="level" class="form-control">
        		<option value="">All</option>
        		@foreach($levels as $level)
        		    <option {{ request('level') == $level->id ? 'selected' : ''  }} value="{{ $level->id }}">{{ $level->name }}</option>
        		@endforeach
        	</select>
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Level</button>
            </span>
        </div>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Education
    		@if(request('education'))
    		    <a href="{{ clear_filter('education') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="education" class="form-control">
    		<option value="">All</option>
    		@foreach($education as $edu)
    		    <option {{ request('education') == $edu->id ? 'selected' : ''  }} value="{{ $edu->id }}">{{ $edu->name }}</option>
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Salary
    		@if(request('salary'))
    		    <a href="{{ clear_filter('salary') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="salary" class="form-control">
    		<option value="">All</option>
    		@foreach($salaries as $salary)
    		    <option {{ request('salary') == $salary->id ? 'selected' : ''  }} value="{{ $salary->id }}">{{ $salary->name }}</option>
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Experience
    		@if(request('experience'))
    		    <a href="{{ clear_filter('experience') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="experience" class="form-control">
    		<option value="">All</option>
    		@foreach($experiences as $experience)
    		    <option {{ request('experience') == $experience->id ? 'selected' : ''  }} value="{{ $experience->id }}">{{ $experience->name }}</option>
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Category
    		@if(request('category'))
    		    <a href="{{ clear_filter('category') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="category" class="form-control">
    		<option value="">All</option>
    		@foreach($categories as $category)
    		    
    		    <option class="optionGroup" {{ request('category') == $category->id ? 'selected' : ''  }} value="{{ $category->id }}">{{ $category->name }}</option>
    		    
    		    @foreach($category->children as $child)
    		        <option {{ request('category') == $child->id ? 'selected' : ''  }} value="{{ $child->id }}">{{ $child->name }}</option>
    		    @endforeach
    		    
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Location
    		@if(request('area'))
    		    <a href="{{ clear_filter('area') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="area" class="form-control">
    		<option value="">All</option>
    		@foreach($areas as $area)
    		    
    		    <option class="optionGroup" {{ request('area') == $area->id ? 'selected' : ''  }} value="{{ $area->id }}">{{ $area->name }}</option>
    		    
    		    @foreach($area->children as $child)
    		        <option {{ request('area') == $child->id ? 'selected' : ''  }} value="{{ $child->id }}">{{ $child->name }}</option>
    		    @endforeach
    		    
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Gender
    		@if(request('gender'))
    		    <a href="{{ clear_filter('gender') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="gender" class="form-control">
    		<option value="">All</option>
    		@foreach($gender as $sex)
    		    <option {{ request('gender') == $sex->id ? 'selected' : ''  }} value="{{ $sex->id }}">{{ $sex->name }}</option>
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <div class="gray-wrap">
    	<h4 class="aside-header">
    		Age
    		@if(request('age'))
    		    <a href="{{ clear_filter('age') }}" class="h6 pull-right text-primary">Clear</a>
    		@endif
    	</h4>
    	<hr class="top-bottom-margin">
    	<select name="age" class="form-control">
    		<option value="">All</option>
    		@foreach($age as $old)
    		    <option {{ request('age') == $old->id ? 'selected' : ''  }} value="{{ $old->id }}">{{ $old->name }}</option>
    		@endforeach
    	</select>
    	<div class="clearfix"></div>
    	<br>
    </div>
    
    <br>
    <input type="submit" value="Search" class="btn btn-primary">
</form>
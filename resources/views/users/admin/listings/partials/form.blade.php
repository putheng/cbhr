<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
	<label class="control-label">Category : {{ $listing['category'] }}</label>
	<select name="category" class="form-control1">
		<option value="{{ $listing['category'] }}">{{ $listing['category'] }}</option>
		<!--@foreach($categories as $category)-->
			
		<!--	<optgroup label="{{ $category->name }}">-->
		<!--		<option value="{{ $category->id }}">{{ $category->name }}</option>-->
		<!--		@foreach($category->children as $child)-->
		<!--			@if($listing['category'] == $child->name)-->
		<!--				<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>-->
		<!--			@else-->
		<!--				<option value="{{ $child->id }}">{{ $child->name }}</option>-->
		<!--			@endif-->
		<!--		@endforeach-->
		<!--	</optgroup>-->
		<!--@endforeach-->
	</select>
	@if($errors->has('category'))
		<span class="help-block">{{ $errors->first('category') }}</span>
	@endif
</div>

<div class="form-group{{ $errors->has('term') ? ' has-error' : '' }}">
	<label class="control-label">Job Term : {{ $listing['term'] }}</label>
	<select name="term" class="form-control1">
		@foreach($terms as $child)
			@if($listing['term'] == $child->name)
				<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
			@else
				<option value="{{ $child->id }}">{{ $child->name }}</option>
			@endif
		@endforeach
	</select>
	@if($errors->has('term'))
		<span class="help-block">{{ $errors->first('term') }}</span>
	@endif
</div>

<div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
	<label class="control-label">Career Level : {{ $listing['level'] }}</label>
	<select name="level" class="form-control1">
		@foreach($levels as $child)
			@if($listing['level'] == $child->name)
				<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
			@else
				<option value="{{ $child->id }}">{{ $child->name }}</option>
			@endif
		@endforeach
	</select>
	@if($errors->has('level'))
		<span class="help-block">{{ $errors->first('level') }}</span>
	@endif
</div>

<div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
	<label class="control-label">Education : {{ $listing['education'] }}</label>
	<select name="education" class="form-control1">
		@foreach($education as $child)
			@if($listing['education'] == $child->name)
				<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
			@else
				<option value="{{ $child->id }}">{{ $child->name }}</option>
			@endif
		@endforeach
	</select>
	@if($errors->has('education'))
		<span class="help-block">{{ $errors->first('education') }}</span>
	@endif
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
			<label class="control-label">Salary : {{ $listing['salary'] }}</label>
			<select name="salary" class="form-control1">
				<option value="2">$200-$500</option>
				@foreach($salaries as $child)
					@if($listing['salary'] == $child->name)
						<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
					@else
						<option value="{{ $child->id }}">{{ $child->name }}</option>
					@endif
				@endforeach
			</select>
			@if($errors->has('salary'))
				<span class="help-block">{{ $errors->first('salary') }}</span>
			@endif
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
			<label class="control-label">Years of Experience : {{ $listing['experience'] }}</label>
			<select name="experience" class="form-control1">
				@if($listing['experience'] > 1)
					<option value="3">2+ to 5</option>
				@elseif($listing['experience'] > 5)
					<option value="4">5+ to 7</option>
				@else
					<option value="2">1+ to 2</option>
				@endif
				@foreach($experiences as $child)
					<option value="{{ $child->id }}">{{ $child->name }}</option>
				@endforeach
			</select>
			@if($errors->has('experience'))
				<span class="help-block">{{ $errors->first('experience') }}</span>
			@endif
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
			<label class="control-label">Age : (18 - 35...) {{ $listing['age'] }}</label>
			<select name="age" class="form-control1">
				<option value="2">18-35</option>
				@foreach($age as $child)
					<option value="{{ $child->id }}">{{ $child->name }}</option>
				@endforeach
			</select>
			@if($errors->has('age'))
				<span class="help-block">{{ $errors->first('age') }}</span>
			@endif
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
			<label class="control-label">Gender : {{ $listing['gender'] }}</label>
			<select name="gender" class="form-control1">
				<option value="3">Male-Female</option>
				@foreach($gender as $child)
					@if($listing['gender'] == $child->name)
						<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
					@else
						<option value="{{ $child->id }}">{{ $child->name }}</option>
					@endif
				@endforeach
			</select>
			@if($errors->has('gender'))
				<span class="help-block">{{ $errors->first('gender') }}</span>
			@endif
		</div>
	</div>
</div>

<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
	<label class="control-label">Locations : {{ $listing['location'] }} </label>
	<select name="location" class="form-control1">
		<option value="{{ $listing['location'] }}">{{ $listing['location'] }}</option>
		<!--@foreach($areas as $area)-->
		<!--	<optgroup label="{{ $area->name }}">-->
		<!--		<option value="{{ $area->id }}">{{ $area->name }}</option>-->
		<!--		@foreach($area->children as $child)-->
		<!--			@if($listing['location'] == $child->name)-->
		<!--				<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>-->
		<!--			@else-->
		<!--				<option value="{{ $child->id }}">{{ $child->name }}</option>-->
		<!--			@endif-->
		<!--		@endforeach-->
		<!--	</optgroup>-->
		<!--@endforeach-->
	</select>
	@if($errors->has('location'))
		<span class="help-block">{{ $errors->first('location') }}</span>
	@endif
</div>
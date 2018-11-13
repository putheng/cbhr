<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
	<label class="control-label">Category :</label>
	<select name="category" class="form-control1">
		@foreach($categories as $category)
			<optgroup label="{{ $category->name }}">
				@foreach($category->children as $child)
					@if(
						isset($listing) && $listing->category_id == $child->id ||
                            !isset($listing) && !old('category') ||
                            old('category') == $child->id
                    )
						<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
					@else
						<option value="{{ $child->id }}">{{ $child->name }}</option>
					@endif
				@endforeach
			</optgroup>
		@endforeach
	</select>
	@if($errors->has('category'))
		<span class="help-block">{{ $errors->first('category') }}</span>
	@endif
</div>

<div class="form-group{{ $errors->has('term') ? ' has-error' : '' }}">
	<label class="control-label">Job Term :</label>
	<select name="term" class="form-control1">
		@foreach($terms as $child)
			@if(
				isset($listing) && $listing->term_id == $child->id ||
                    !isset($listing) && !old('term') ||
                    old('term') == $child->id
            )
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
	<label class="control-label">Career Level :</label>
	<select name="level" class="form-control1">
		@foreach($levels as $child)
			@if(
				isset($listing) && $listing->level_id == $child->id ||
                    !isset($listing) && !old('level') ||
                    old('level') == $child->id
            )
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
	<label class="control-label">Education :</label>
	<select name="education" class="form-control1">
		@foreach($education as $child)
			@if(
				isset($listing) && $listing->education_id == $child->id ||
                    !isset($listing) && !old('education') ||
                    old('education') == $child->id
            )
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
			<label class="control-label">Salary :</label>
			<select name="salary" class="form-control1">
				@foreach($salaries as $child)
					@if(
						isset($listing) && $listing->salary_id == $child->id ||
		                    !isset($listing) && !old('salary') ||
		                    old('salary') == $child->id
		            )
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
			<label class="control-label">Years of Experience :</label>
			<select name="experience" class="form-control1">
				@foreach($experiences as $child)
					@if(
						isset($listing) && $listing->experience_id == $child->id ||
		                    !isset($listing) && !old('experience') ||
		                    old('experience') == $child->id
		            )
						<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
					@else
						<option value="{{ $child->id }}">{{ $child->name }}</option>
					@endif
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
			<label class="control-label">Age : (18 - 35...)</label>
			<select name="age" class="form-control1">
				@foreach($age as $child)
					@if(
						isset($listing) && $listing->age_id == $child->id ||
		                    !isset($listing) && !old('age') ||
		                    old('age') == $child->id
		            )
						<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
					@else
						<option value="{{ $child->id }}">{{ $child->name }}</option>
					@endif
				@endforeach
			</select>
			@if($errors->has('age'))
				<span class="help-block">{{ $errors->first('age') }}</span>
			@endif
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
			<label class="control-label">Gender :</label>
			<select name="gender" class="form-control1">
				@foreach($gender as $child)
					@if(
						isset($listing) && $listing->gender_id == $child->id ||
		                    !isset($listing) && !old('gender') ||
		                    old('gender') == $child->id
		            )
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
	<label class="control-label">Locations :</label>
	<select name="location" class="form-control1">
		@foreach($areas as $area)
			<optgroup label="{{ $area->name }}">
				@foreach($area->children as $child)
					@if(
						isset($listing) && $listing->area_id == $child->id ||
		                    !isset($listing) && !old('location') ||
		                    old('location') == $child->id
		            )
						<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
					@else
						<option value="{{ $child->id }}">{{ $child->name }}</option>
					@endif
				@endforeach
			</optgroup>
		@endforeach
	</select>
	@if($errors->has('location'))
		<span class="help-block">{{ $errors->first('location') }}</span>
	@endif
</div>
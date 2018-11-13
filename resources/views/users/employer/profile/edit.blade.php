@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Edit company profile</h3>
			@include ('users.employer.listing.partials.alert')
			
			<div class="well1 white">
				<form action="{{ route('employer.profile.company') }}" method="post">
					{{ csrf_field() }}
    				{{ method_field('PATCH') }}
					<fieldset>
						
						<avatar-upload endpoint="{{ route('account.avatar.store') }}" send-as="image" current-avatar="{{ Auth::user()->company->avatarPath() }}"></avatar-upload>
						
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
							<label class="control-label">Company :</label>
							<input name="company" type="text" value="{{ $user->company->name }}" class="form-control1">
							@if($errors->has('company'))
								<span class="help-block">{{ $errors->first('company') }}</span>
							@endif
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">
									<label class="control-label">Industry :</label>
									<select name="industry" class="form-control1">
										@foreach(\App\Models\Industry::get() as $child)
											@if(
												isset($user) && $user->company->industry_id == $child->id ||
								                    !isset($user) && !old('industry') ||
								                    old('industry') == $child->id
								            )
												<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
											@else
												<option value="{{ $child->id }}">{{ $child->name }}</option>
											@endif
										@endforeach
									</select>
									@if($errors->has('industry'))
										<span class="help-block">{{ $errors->first('industry') }}</span>
									@endif
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
									<label class="control-label">Company Type :</label>
									<select name="type" class="form-control1">
										@foreach(\App\Models\CompanyType::get() as $child)
											@if(
												isset($user) && $user->company->type_id == $child->id ||
								                    !isset($user) && !old('type') ||
								                    old('type') == $child->id
								            )
												<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
											@else
												<option value="{{ $child->id }}">{{ $child->name }}</option>
											@endif
										@endforeach
									</select>
									@if($errors->has('type'))
										<span class="help-block">{{ $errors->first('type') }}</span>
									@endif
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('employee') ? ' has-error' : '' }}">
									<label class="control-label">Employee :</label>
									<select name="employee" class="form-control1">
										@foreach(\App\Models\EmployeeType::get() as $child)
											@if(
												isset($user) && $user->company->employee_id == $child->id ||
								                    !isset($user) && !old('employee') ||
								                    old('employee') == $child->id
								            )
												<option selected="selected" value="{{ $child->id }}">{{ $child->name }}</option>
											@else
												<option value="{{ $child->id }}">{{ $child->name }}</option>
											@endif
										@endforeach
									</select>
									@if($errors->has('employee'))
										<span class="help-block">{{ $errors->first('employee') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
									<label class="label-control">Phone:</label>
									<input type="text" class="form-control1" name="phone" value="{{ old('phone') ? old('phone') : $user->company->phone }}">
									@if ($errors->has('phone'))
				                        <div class="help-block">
				                            {{ $errors->first('phone') }}
				                        </div>
				                    @endif
								</div>
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
							<label class="label-control">Address:</label>
							<input type="text" class="form-control1" name="address" value="{{ old('address') ? old('address') : $user->company->address }}">
							@if ($errors->has('address'))
		                        <div class="help-block">
		                            {{ $errors->first('address') }}
		                        </div>
		                    @endif
						</div>
						
						<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
							<label class="label-control">Website:</label>
							<input type="text" class="form-control1" name="website" value="{{ old('website') ? old('website') : $user->company->website }}">
							@if ($errors->has('website'))
		                        <div class="help-block">
		                            {{ $errors->first('website') }}
		                        </div>
		                    @endif
						</div>
						
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
							<label class="label-control">Description:</label>
							<textarea class="form-control1" name="description">{{ old('description') ? old('description') : $user->company->description }}</textarea>
							@if ($errors->has('description'))
		                        <div class="help-block">
		                            {{ $errors->first('description') }}
		                        </div>
		                    @endif
						</div>
						
						<input type="submit" value="Submit" class="btn btn-info">
					</fieldset>
				</form>
			</div>
			
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection
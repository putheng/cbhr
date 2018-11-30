@extends('layouts.admin')

@section('css')
	<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>
				Create Listing 
				@if($id)
					<small><a href="{{ route('admin.listing.create', ['id' => ($id + 1)]) }}">Next</a></small>
				@endif
			</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<form class="form-floating" novalidate="novalidate" action="{{ route('admin.listing.create.store') }}" method="post">
					{{ csrf_field() }}
					<fieldset>
						
						<div class="form-group">
							<img src="{{ $company['logo'] }}">
							<input type="hidden" name="logoimg" value="{{ $company['logo'] }}">
						</div>
						
						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<label class="control-label">Title :</label>
							<input name="title" type="text" value="{{ $listing['title'] }}" class="form-control1">
							@if($errors->has('title'))
								<span class="help-block">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<input type="hidden" name="lastid" value="{{ request('id') }}">
						
						@include ('users.admin.listings.partials.form')
						
						<div class="form-group{{ $errors->has('requirement') ? ' has-error' : '' }}">
							<label class="control-label">Requirements :</label>
							<textarea name="requirement" class="form-control1" style="height:100px;">{!! str_replace('<br />', '', nl2br(e($listing['requirement']))) !!}</textarea>
							@if($errors->has('requirement'))
								<span class="help-block">{{ $errors->first('requirement') }}</span>
							@endif
						</div>
						
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
							<label class="control-label">Description :</label>
							<textarea name="description" class="form-control1" style="height:100px;">{!! str_replace('<br />', '',nl2br(e($listing['description']))) !!}</textarea>
							@if($errors->has('description'))
								<span class="help-block">{{ $errors->first('description') }}</span>
							@endif
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
									<label class="control-label">Start Date : {{ $listing['start'] }}</label>
									<input name="start" type="text" class="form-control1" value="{{ post_start() }}">
									@if($errors->has('start'))
										<span class="help-block">{{ $errors->first('start') }}</span>
									@endif
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('closing') ? ' has-error' : '' }}">
									<label class="control-label">Closing Date : {{ $listing['closing'] }}</label>
									<input name="closing" type="text" value="{{ post_expire() }}" class="form-control1">
									@if($errors->has('closing'))
										<span class="help-block">{{ $errors->first('closing') }}</span>
									@endif
								</div>
							</div>
						</div>
						<hr>
						
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
							<label class="control-label">Company :</label>
							<input name="company" type="text" value="{{ $company['name'] }}" class="form-control1">
							@if($errors->has('company'))
								<span class="help-block">{{ $errors->first('company') }}</span>
							@endif
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('person') ? ' has-error' : '' }}">
									<label class="control-label">Person :</label>
									<input name="person" type="text" class="form-control1" value="{{ $company['person'] }}">
									@if($errors->has('person'))
										<span class="help-block">{{ $errors->first('person') }}</span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label class="control-label">Email :</label>
									<input name="email" type="text" class="form-control1" value="{{ $company['email'] }}">
									@if($errors->has('email'))
										<span class="help-block">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">
									<label class="control-label">Industry : {{ $company['industry'] }}</label>
									<select name="industry" class="form-control1">
										@foreach(\App\Models\Industry::get() as $child)
											@if($company['industry'] == $child->name)
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
									<label class="control-label">Company Type : {{ $company['type'] }}</label>
									<select name="type" class="form-control1">
										@foreach(\App\Models\CompanyType::get() as $child)
											@if($company['type'] == $child->name)
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
									<label class="control-label">Employee : {{ $company['employee'] }}</label>
									<select name="employee" class="form-control1">
									@if(!empty($company['employee']))
										<option value="{{ $company['employee'] }}">{{ $company['employee'] }}</option>
									@endif
										@foreach(\App\Models\EmployeeType::get() as $child)
											@if($company['type'] == $child->name)
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
									<input type="text" class="form-control1" name="phone" value="{{ $company['phone'] }}">
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
							<input type="text" class="form-control1" name="address" value="{{ $company['address'] }}">
							@if ($errors->has('address'))
		                        <div class="help-block">
		                            {{ $errors->first('address') }}
		                        </div>
		                    @endif
						</div>
						
						<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
							<label class="label-control">Website:</label>
							<input type="text" class="form-control1" name="website" value="{{ $company['website'] }}">
							@if ($errors->has('website'))
		                        <div class="help-block">
		                            {{ $errors->first('website') }}
		                        </div>
		                    @endif
						</div>
						
						
						
						<div class="form-group{{ $errors->has('companyDescription') ? ' has-error' : '' }}">
							<label class="label-control">Description:</label>
							<textarea class="form-control1" name="companyDescription">{!! nl2br(e($company['description'])) !!}</textarea>
							@if ($errors->has('companyDescription'))
		                        <div class="help-block">
		                            {{ $errors->first('companyDescription') }}
		                        </div>
		                    @endif
		                    <input type="hidden" value="{{ $company['logo'] }}" name="logo">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
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
@section('script')
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
	$('select').select2();
	
	$(document).ready(function(){
		setTimeout( function () {
	        $('.form-floating').submit();
	    }, {{ session()->has('success') ? '1000' : '500' }});
		
	});
</script>
@endsection
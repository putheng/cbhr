@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>{{ $listing->title }}</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<form class="form-floating" novalidate="novalidate" action="{{ route('employer.listing.edit', $listing) }}" method="post">
					{{ csrf_field() }}
					<fieldset>
						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<label class="control-label">Title :</label>
							<input name="title" type="text" value="{{ $listing->title }}" class="form-control1">
							@if($errors->has('title'))
								<span class="help-block">{{ $errors->first('title') }}</span>
							@endif
						</div>
						
						@include ('users.employer.listing.partials.form')
						
						<div class="form-group{{ $errors->has('requirement') ? ' has-error' : '' }}">
							<label class="control-label">Requirements :</label>
							<textarea name="requirement" class="form-control1" style="height:100px;">{{ $listing->requirement }}</textarea>
							@if($errors->has('requirement'))
								<span class="help-block">{{ $errors->first('requirement') }}</span>
							@endif
						</div>
						
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
							<label class="control-label">Description :</label>
							<textarea name="description" class="form-control1" style="height:100px;">{{ $listing->description }}</textarea>
							@if($errors->has('description'))
								<span class="help-block">{{ $errors->first('description') }}</span>
							@endif
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
									<label class="control-label">Start Date :</label>
									<input name="start" type="date" value="{{ $listing->started }}" class="form-control1">
									@if($errors->has('start'))
										<span class="help-block">{{ $errors->first('start') }}</span>
									@endif
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group{{ $errors->has('closing') ? ' has-error' : '' }}">
									<label class="control-label">Closing Date :</label>
									<input name="closing" type="date" value="{{ $listing->closing }}" class="form-control1">
									@if($errors->has('closing'))
										<span class="help-block">{{ $errors->first('closing') }}</span>
									@endif
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Save</button>
							@if(!$listing->live())
								<button type="submit" name="payment" class="btn btn-info">Continue To Payment</button>
							@endif
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
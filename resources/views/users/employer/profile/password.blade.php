@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Change your password</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<form action="{{ route('employer.profile.password') }}" method="post">
					{{ csrf_field() }}
					<fieldset>

		                <div class="form-group{{ $errors->has('password_current') ? ' has-error' : '' }}">
		                    <label for="password_current" class="control-label">Current password</label>
		                    <input type="password" name="password_current" id="password_current" class="form-control1">
		
		                    @if ($errors->has('password_current'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('password_current') }}</strong>
		                        </span>
		                    @endif
		                </div>
		                <br>
		
		                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                    <label for="password" class="control-label">New password</label>
		                    <input type="password" name="password" id="password" class="form-control1">
		
		                    @if ($errors->has('password'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('password') }}</strong>
		                        </span>
		                    @endif
		                </div>
		
		                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		                    <label for="password_confirmation" class="control-label">New password again</label>
		                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control1">
		
		                    @if ($errors->has('password_confirmation'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('password_confirmation') }}</strong>
		                        </span>
		                    @endif
		                </div>
						
						<br>
		                <button type="submit" class="btn btn-info">Change password</button>
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
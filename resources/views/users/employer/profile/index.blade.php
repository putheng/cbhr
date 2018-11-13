@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Profile</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<form action="{{ route('employer.profile.show') }}" method="post">
					{{ csrf_field() }}
					<fieldset>
						<avatar-upload endpoint="{{ route('account.avatar.store') }}" send-as="image" current-avatar="{{ Auth::user()->avatarPath() }}"></avatar-upload>
						<br>
		                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		                    <label for="name" class="control-label">Name</label>
		                    <input type="text" name="name" id="name" class="form-control1" value="{{ old('name', auth()->user()->name) }}">
		
		                    @if ($errors->has('name'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('name') }}</strong>
		                        </span>
		                    @endif
		                </div>
		
		                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                    <label for="email" class="control-label">Email</label>
		                    <input type="text" name="email" id="email" class="form-control1" value="{{ old('email', auth()->user()->email) }}">
		
		                    @if ($errors->has('email'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('email') }}</strong>
		                        </span>
		                    @endif
		                </div>
		
		                <button type="submit" class="btn btn-info">Update</button>
						
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
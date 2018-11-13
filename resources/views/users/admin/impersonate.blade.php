@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Impersonate</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<form class="form-floating" novalidate="novalidate" action="{{ route('admin.impersonate.index') }}" method="post">
				    {{ csrf_field() }}
				    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label class="control-label">Email :</label>
						<input name="email" type="text" value="{{ old('email') }}" class="form-control1">
						@if($errors->has('email'))
							<span class="help-block">{{ $errors->first('email') }}</span>
						@endif
					</div>
				    
				    <br>
				    <input type="submit" value="Impersonate" class="btn btn-danger">
			    </form>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Edit your profile</h3>
			@include ('users.employer.listing.partials.alert')
			
			<div class="well1 white">
    	        <form action="{{ route('publisher.profile') }}" method="post">
					{{ csrf_field() }}
    				{{ method_field('PATCH') }}
					<fieldset>
    			    
        			    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    						<label class="control-label">Name :</label>
    						<input name="name" type="text" value="{{ old('name') ? old('name') : auth()->user()->name }}" class="form-control1">
    						@if($errors->has('name'))
    							<span class="help-block">{{ $errors->first('name') }}</span>
    						@endif
    					</div>
    			    
        			    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    						<label class="control-label">Phone :</label>
    						<input name="phone" type="text" value="{{ old('phone') ? old('phone') : auth()->user()->publisher->phone }}" class="form-control1">
    						@if($errors->has('phone'))
    							<span class="help-block">{{ $errors->first('phone') }}</span>
    						@endif
    				    </div>
    			        <br>
    			        <input type="submit" value="Save" class="btn btn-info">
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


@endsection
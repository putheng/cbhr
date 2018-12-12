@extends('home.index')

@section('title')
<title>Job seeker register | Cambodia HR</title>
@endsection

@section('content')

<div class="page-wrap">
	<h3>In order to sign up, please fill the form below</h3>
	<form id="main" class="employers_registration" action="{{ route('register') }}" method="post">
	     {{ csrf_field() }}
		<br>
		<fieldset>
			<ol>
				<li{!! $errors->has('name') ? ' class="has-error"' : '' !!}>
                    <label>Name:</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <div class="response">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
				</li>
				
				<li{!! $errors->has('email') ? ' class="has-error"' : '' !!}>
					<label>Email:</label>
					<input type="text" name="email" value="{{ old('email') }}">
					@if ($errors->has('email'))
                        <div class="response">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
				</li>
				
				<li{!! $errors->has('password') ? ' class="has-error"' : '' !!}>
					<label>Password:</label>
					<input type="password" name="password">
					@if ($errors->has('password'))
                        <div class="response">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
				</li>
				
				<li>
					<label>Confirm Password:</label>
					<input type="password" name="password_confirmation">
				</li>
				
				<li{!! $errors->has('description') ? ' class="has-error"' : '' !!}>
					<label>Description:</label>
					<textarea name="description" cols="32" rows="3">{{ old('description') }}</textarea>
					@if ($errors->has('description'))
                        <div class="response">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
				</li>
				
				<li{!! $errors->has('address') ? ' class="has-error"' : '' !!}>
					<label>Address:</label>
					<textarea name="address" cols="32" rows="3">{{ old('address') }}</textarea>
					@if ($errors->has('address'))
                        <div class="response">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
				</li>
				
				<li{!! $errors->has('phone') ? ' class="has-error"' : '' !!}>
					<label>Phone:</label>
					<input type="text" name="phone" id="phone" value="">
					@if ($errors->has('phone'))
                        <div class="response">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
				</li>
				
				<li>
					<label>Website:</label>
					<input type="text" name="website" id="website" value="">
				</li>
				
				<li>
					<input type="checkbox" name="newsletter" value="on">
					I would like to subscribe to the cambodiahr.com newsletter							
				</li>
			</ol>
		</fieldset>
		<div class="clearfix"></div>
		<br>
		<div class="row">
			<div class="col-md-4 pull-right text-center">
				<button type="submit" class="btn btn-primary" style="padding:10px 45px;">Submit</button>
				<br><br>
				<p class="h5">Or <a href="{{ url('/login') }}" class="text-primary">Login Now</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<br>
	</form>
</div>

@endsection

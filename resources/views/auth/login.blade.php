@extends('home.index')

@section('content')

<div class="page-wrap">
	<h3>In order to sign in, please fill the form below</h3>
	<br>
	<form id="main" class="employers_registration" action="{{ route('login') }}" method="post">
		<br>
		<fieldset>
			<ol>
				<li{!! $errors->has('email') ? ' class="has-error"' : '' !!}>
					<label>Email: (*) </label>
					<input type="text" name="email" value="{{ old('email') }}">
					@if ($errors->has('email'))
                        <div class="response">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
				</li>
				<li{!! $errors->has('password') ? ' class="has-error"' : '' !!}>
					<label>Password: (*) </label>
					<input type="password" name="password" id="password">
					@if ($errors->has('password'))
                        <div class="response">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
				</li>
				<li>
					<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
					Remember me						
				</li>
			</ol>
		</fieldset>
		<div class="clearfix"></div>
		<br>
		<div class="emre-response text-center"></div>
		<div class="row">
			<div class="col-md-12 pull-right text-center">
			    {{ csrf_field() }}
				<button type="submit" class="btn btn-primary" style="padding:10px 45px;">Login</button>
				<br>
				<p class="h5">
					Or <a href="{{ url('/register') }}" class="text-primary">Create Account</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<br>
				<a href="{{ route('facebook.login') }}" class="btn btn-primary">
					Login with Facebook as Publisher
				</a>
			</div>
		</div>
		<div class="clearfix"></div>		
		<br>
	</form>
</div>

@endsection
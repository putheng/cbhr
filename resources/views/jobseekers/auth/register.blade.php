@extends('home.index')

@section('title')
<title>Job seeker register | Cambodia HR</title>
@endsection

@section('content')

<div class="page-wrap">
	<h3>In order to sign up, please fill the form below</h3>
	<form id="main" class="employers_registration" action="{{ route('seeker.register') }}" method="post">
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
				
				<li{!! $errors->has('phone') ? ' class="has-error"' : '' !!}>
					<label>Phone:</label>
					<input type="text" name="phone" value="{{ old('phone') }}">
					@if ($errors->has('phone'))
                        <div class="response">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
				</li>

				<li{!! $errors->has('gender') ? ' class="has-error"' : '' !!}>
					<label>Gender:</label>
					<select name="gender">
						<option value="">-select-</option>
						<option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Male</option>
						<option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>Femal</option>
					</select>
					@if ($errors->has('gender'))
                        <div class="response">
                            {{ $errors->first('gender') }}
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
				<p class="h5">Already member <a href="{{ url('/login') }}" class="text-primary">Login</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<br>
	</form>
</div>

@endsection

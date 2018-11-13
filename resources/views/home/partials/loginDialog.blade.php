@if($errors->has('email') || $errors->has('password'))
<div class="modal modal-login in" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="false" style="display: block;">
@else
<div class="modal modal-login" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" style="display: none;">
@endif
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" onclick="javascript:document.getElementById('login-modal').style.display='none'" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 id="loginModalLabel" class="modal-title text-center">Log in to your account</h4>
			</div>
			<div class="modal-body">
				<div class="login-form-container">
					<form action="{{ route('login') }}" method="post">
						
						<div class="form-group {{ $errors->has('email') ? ' has-error ' : '' }} email">
							<label class="sr-only" for="login-email">Your Email</label>
							<img src="{{ asset('images/icon-user.gif ') }}" alt="" class="login-icon">
							<input value="{{ old('email') }}" autocomplete="off" id="login-email" name="email" type="text" class="form-control login-email" placeholder="Your Email">
							@if($errors->has('email'))
								<span class="help-block">
									{{ $errors->first('email') }}
								</span>
							@endif
						</div>
						
						<div class="form-group {{ $errors->has('password') ? ' has-error ' : '' }} password">
							<label class="sr-only" for="login-password">Password</label>
							<img src="{{ asset('images/icon-password.gif') }}" alt="" class="login-icon">
							<input id="login-password" name="password" type="password" class="form-control login-password" placeholder="Password">
							@if($errors->has('password'))
								<span class="help-block">
									{{ $errors->first('password') }}
								</span>
							@endif
							<p class="forgot-password">
								<a class="underline-link" href="{{ route('password.request') }}">Forgotten password?</a> 
							</p>
						</div>
						{{ csrf_field() }}
						<button type="submit" class="btn btn-block btn-primary custom-back-color">LOG IN</button>
						
					</form>
				</div>
				<br>
				<div class="divider">
					<span>or</span>
				</div>
				<div class="text-center">
					<a href="{{ route('facebook.login') }}">
						<img src="{{ asset('images/facebook-signin.png') }}" height="22" alt="">
					</a>
					<!--<a href="mod-en-login-twitter.html">
						<img src="https://workscout-putheng.c9users.io/public/images/twitter-signin.png" height="22" class="l-margin-10" alt="">
						</a>
						<a href="mod-en-login-linkedin.html">
						<img src="https://workscout-putheng.c9users.io/public/images/linkedin-signin.png" height="22" class="l-margin-10" alt="">
						</a>-->
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<p>
					<strong>Still don't have an account?</strong>
					<br>
					or 
					<a class="underline-link" href="{{ url('/register') }}">Sign up as an employer</a>
				</p>
			</div>
		</div>
	</div>
</div>
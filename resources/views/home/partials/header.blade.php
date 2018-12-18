<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-right">
				<div class="pull-left">
					<div class="logo">
						<a style="padding-top: 5px;" class="navbar-brand custom-color" href="{{ route('home.index') }}">
							<img style="" class="img-logo" src="{{ asset('images/my-logo-2.png') }}" alt="cambodia hr">
						</a>
					</div>
				</div>
				<!--main navigation menu-->	
				<div class="languages-menu"> 
					<a href="job/save" class="sub-text underline-link r-margin-15"></a>
				</div>
				<div class="pull-right visible-xs visible-sm menu-top-margin">
					<a href="javascript:ShowHide('nav_menu')" class="expand_menu_link">
						<img src="{{ asset('images/menu-grid.gif') }}" alt="expand menu"> &nbsp; MENU
					</a>
				</div>
				<div id="nav_menu" class="pull-right hide-sm">
					<ul class="menu nav navbar-nav top-menu">
						<li>
							<a class="main-top-link" href="{{ route('listing.index') }}">Jobs</a> 
						</li>
						<li>
							<a class="main-top-link" href="{{ route('home.employers') }}">Employers</a>
						</li>
						<li>
							<a class="main-top-link" href="{{ route('home.partners') }}">Partner</a>
						</li>
						<li>
							@if(auth()->check())
								<a href="{{ url(role_url()) }}" class="login-trigger btn btn-primary custom-back-color">Account</a>
							@else
								<a href="{{ url('/login') }}" class="login-trigger btn btn-primary custom-back-color">Login</a>
								<!---<button type="button" class="login-trigger btn btn-primary custom-back-color" data-toggle="modal" data-target="#login-modal">LOG IN</button>-->
							@endif
						</li>
					</ul>
				</div>
				<!--end main navigation menu-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
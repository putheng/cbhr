<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('home.index') }}">
						<i class="fa fa-home"></i>
						Dashboard
					</a>
				</div>
				<!-- /.navbar-header -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
						<img src="{{ request()->user()->avatarPath() != null ? request()->user()->avatarPath() : '/images/company-placeholder-300x300.png' }}">
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-header text-center">
								<strong>Welcome,</strong> {{ auth()->user()->name }}
							</li>
							<li class="m_2">
								<a href="{{ route('employer.listing.published') }}">
									<i class="fa fa-indent"></i>
									Listing <span class="label label-default">()</span>
								</a>
							</li>
							<li class="m_2">
								<a href="{{ route('employer.payment.show') }}">
									<i class="fa fa-usd"></i>
									Wallet
									<span class="label label-default">$</span>
								</a>
							</li>
							<li class="m_2">
								<a href="">
									<i class="fa fa-wrench"></i>
									Settings
								</a>
							</li>
							<li class="m_2">
								<a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
									<i class="fa fa-lock"></i>
									Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
							</li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
				</form>
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							<li>
								<a href="">
								<i class="fa fa-dashboard fa-fw nav_icon"></i>
								Dashboard
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-indent nav_icon"></i>
									Listings<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="{{ route('admin.listing.create') }}">Create</a>
									</li>
									<li>
										<a href="{{ route('admin.listing.index') }}">Publish </a>
									</li>
									<li>
										<a href="{{ route('admin.listing.unpublish') }}">Unpublish </a>
									</li>
									<li>
										<a href="{{ route('admin.listing.expire') }}">Expired </a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#">
								<i class="fa fa-envelope nav_icon"></i>
								Applications<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="">Applications</a>
									</li>
									<li>
										<a href="">Approved</a>
									</li>
									<li>
										<a href="">Rejected</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#">
								<i class="fa fa-user fa-fw nav_icon"></i>Jobseekers<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="">Saved</a>
									</li>
									<li>
										<a href="">Browse</a>
									</li>
									<li>
										<a href="">Search</a>
									</li>
									<li>
										<a href="">Purchased</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#">
								<i class="fa fa-usd nav_icon"></i>
								Payments<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="">My Wallet</a>
									</li>
									<li>
										<a href="">Deposit</a>
									</li>
									<li>
										<a href="">Transactions</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#">
								<i class="fa fa-wrench nav_icon"></i>
								Settings<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="{{ route('admin.impersonate.index') }}">Impersonate</a>
									</li>
									<li>
										<a href="">Company</a>
									</li>
									<li>
										<a href="">Password</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
								<i class="fa fa-lock fa-fw nav_icon"></i>
								Logout
								</a>
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>
			
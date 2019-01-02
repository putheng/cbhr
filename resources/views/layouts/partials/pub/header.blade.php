<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('publisher.index') }}">
						<i class="fa fa-home"></i>
						Dashboard
					</a>
				</div>
				<!-- /.navbar-header -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
						<img src="https://graph.facebook.com/{{ auth()->user()->publisher->facebook_id }}/picture">
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-header text-center">
								<strong>Welcome,</strong> {{ auth()->user()->name }}
							</li>
							<li class="m_2">
								<a href="{{ route('publisher.promote.index') }}">
									<i class="fa fa-indent"></i>
									Posts 
								</a>
							</li>
							<li class="m_2">
								<a href="{{ route('publisher.withdraw.index') }}">
									<i class="fa fa-usd"></i>
									Available Earnings
									<span class="label label-default">${{ number_format(auth()->user()->usd, 3) }}</span>
								</a>
							</li>
							<li class="m_2">
								<a href="{{ route('publisher.profile') }}">
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
								<a href="{{ route('publisher.index') }}">
								<i class="fa fa-dashboard fa-fw nav_icon"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-indent nav_icon"></i>
									Promote <span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="{{ route('publisher.promote.index') }}">History</a>
									</li>
									<li>
										<a href="{{ route('publisher.promote.create') }}">New Post</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#">
								<i class="fa fa-usd nav_icon"></i>
								Withdraw<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level">
									<li>
										<a href="{{ route('publisher.withdraw.index') }}">Request</a>
									</li>
									<li>
										<a href="{{ route('publisher.withdraw.show') }}">Pending</a>
									</li>
									<li>
										<a href="{{ route('publisher.withdraw.transaction') }}">Transactions</a>
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
										<a href="{{ route('publisher.profile') }}">Profile</a>
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
			
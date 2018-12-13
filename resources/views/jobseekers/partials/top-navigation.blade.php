<nav class="navbar-top" role="navigation">
				<div class="navbar-header">
					<a href="index.php">
						<div class="navbar-brand hide-sm">
							<a class="text-logo-link custom-color" href="{{ route('home.index') }}" target="_blank">
								Dashboard
							</a>
						</div>
					</a>
				</div>
				<div class="nav-top">
					<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse" style="position:relative;top:-3px">
					<img src="{{ asset('images/menu-grid.gif') }}"/>
					</button>
					<ul class="nav navbar-left">
						<li class="tooltip-sidebar-toggle">
							<a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
							<img src="{{ asset('images/menu-3.png') }}"/>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-right">
						<li>
							<a title="Dashboard" href="{{ route('seeker.index') }}" class="notification-link">
							<img src="{{ asset('images/monitor.png') }}" width="21" height="21"/> 
							</a>
						</li>
						<li>
							<a title="New messages" href="{{ route('seeker.messages.index') }}" class="notification-link dropdown-toggle">
							<img  src="{{ asset('images/email-icon.png') }}" width="21" height="21"/> 
							<span class="number white-font pull-right">3</span>
							</a>
						</li>
						<li>
							<a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" title="LOGOUT" href="{{ route('logout') }}" title="LOGOUT" class="notification-link">
							<img src="{{ asset('images/logout-2.png') }}" width="20" height="20" alt="LOGOUT"/> 
							</a>
						</li>
					</ul>
				</div>
			</nav>
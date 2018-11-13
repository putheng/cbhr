<nav id="side_nav" class="navbar navbar-default navbar-static-top top-bar" role="navigation" style="margin-bottom: 0;">
	<div class="navbar-header">
		<button id="main_nav_button" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand white-link" href="{{ route('admin.index') }}" >
			<h4 class="no-top-margin">Administration</h4>
		</a>
		<img id="loading" class="loading-image lfloat" src="/images/loading.gif" width="120" alt="loading"/>
	</div>
	<!-- /.navbar-header -->
	<ul class="nav navbar-top-links navbar-right hide-sm">
		<li class="dropdown">
			<a target="_blank" class="white-link" href="{{ route('home.index') }}">
			OPEN THE MAIN SITE	</a>
		<li class="dropdown">
			<a class="dropdown-toggle white-link" data-toggle="dropdown" href="#">
			<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-messages">
				<li>
					<a href="#home-messages" >
						<div>
							<strong></strong>
							<span class="pull-right text-muted">
							<em>2 years</em>
							</span>
						</div>
						<div>alert</div>
					</a>
				</li>
				<li class="divider"></li>
				<li class="text-center top-link-li">
					<strong>
					<a class="text-center" href="#home-messages">
					    Read All Messages
					    <i class="fa fa-angle-right"></i>
					</a>
					</strong>
				</li>
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle white-link" data-toggle="dropdown" href="#">
			    {{ auth()->user()->name }} 
			    <i class="fa fa-user fa-fw"></i> 
			    <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li>
				    <a href="{{ route('admin.account.password') }}">
				    <i class="fa fa-unlock fa-fw"></i>
				    Change Password</a>
				</li>
				<li>
				    <a href="{{ route('logout') }}"
				    	onclick="event.preventDefault();
                            	document.getElementById('logout-form').submit();">
				        <i class="fa fa-sign-out fa-fw"></i>
				        Logout
				    </a>
				    
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
				</li>
			</ul>
		</li>
	</ul>
	<!-- /.navbar-top-links -->
	<div id="main_navigation" class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li>
					<a class="f-level" id="link_home" href="index.php">
						<i class="fa fa-home fa-fw"></i>
						Home
					</a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="{{ route('admin.index') }}">Dashboard</a></li>
						<li ><a class="s-level"  href="{{ route('admin.account.password') }}">Change Password</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_jobs"  href="#">
						<i class="fa fa-table fa-fw"></i> 
						Listings<span class="fa arrow"></span>
					</a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="{{ route('admin.listing.create') }}">Create</a></li>
						<li ><a class="s-level"  href="{{ route('admin.listing.index') }}">Listing</a></li>
						<li ><a class="s-level"  href="{{ route('admin.listing.expire') }}">Expire Listing</a></li>
						<li ><a class="s-level"  href="{{ route('admin.listing.unpublish') }}">Unpublished Listing</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_users"  href="#"><i class="fa fa-user fa-fw"></i> Employer<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li >
							<a class="s-level"  href="{{ route('admin.employer.index') }}">Employers</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_users"  href="#"><i class="fa fa-user fa-fw"></i> Publishers<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li >
							<a class="s-level"  href="{{ route('admin.publisher.index') }}">Publishers</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_settings"  href="#"><i class="fa fa-gears fa-fw"></i> Settings<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="{{ route('admin.impersonate.index') }}">Impersonate</a></li>
						<li ><a class="s-level"  href="#settings-payments">Payments</a></li>
						<li ><a class="s-level"  href="#settings-feeds">Job Feeds</a></li>
						<li ><a class="s-level"  href="#settings-categories">Job Categories</a></li>
						<li ><a class="s-level"  href="#settings-locations">Locations</a></li>
						<li ><a class="s-level"  href="index.php?category=settings&action=banner_areas">Banner Areas</a></li>
						<li ><a class="s-level"  href="index.php?category=settings&action=field_values">Field Values</a></li>
						<li ><a class="s-level"  href="index.php?category=settings&action=course_categories">Course Categories</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_site_management"  href="#"><i class="fa fa-sitemap fa-fw"></i> Site Content<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="index.php?category=site_management&action=pages_pro">Pages</a></li>
						<li ><a class="s-level"  href="index.php?category=site_management&action=news">News</a></li>
						<li ><a class="s-level"  href="#site_management-languages">Language Versions</a></li>
						<li ><a class="s-level"  href="index.php?category=site_management&action=language_file">Texts & Words</a></li>
						<li ><a class="s-level"  href="index.php?category=site_management&action=custom_titles">Custom Titles</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_templates"  href="#"><i class="fa fa-square-o fa-fw"></i> Template<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="#templates-modify">Modify</a></li>
						<li ><a class="s-level"  href="index.php?category=templates&action=logo">Logo</a></li>
						<li ><a class="s-level"  href="#templates-layout">Colors</a></li>
						<li ><a class="s-level"  href="index.php?category=templates&action=home_slider">Home Slider</a></li>
						<li ><a class="s-level"  href="#templates-adsense">Google AdSense & Analytics</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_extensions"  href="#"><i class="fa fa-sun-o fa-fw"></i> Extensions<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="#extensions-extensions">Files</a></li>
						<li ><a class="s-level"  href="index.php?category=extensions&action=tags">Tags</a></li>
						<li class="menu-sub-link"><a class="s-level" href="index.php?category=faq_manager&action=home">FAQ Manager [add-on]</a></li>
						<li class="menu-sub-link"><a class="s-level" href="index.php?category=newsletter&action=home">Newsletter [add-on]</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_statistics"  href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Statistics<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="#statistics-reports">Reports</a></li>
						<li ><a class="s-level"  href="#statistics-referals">Referrals</a></li>
					</ul>
				</li>
				<li>
					<a class="f-level" id="link_security"  href="#"><i class="fa fa-users fa-fw"></i> Admin Users<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level" >
						<li ><a class="s-level"  href="index.php?category=security&action=types">User Groups</a></li>
						<li ><a class="s-level"  href="index.php?category=security&action=new_user">New Administrator</a></li>
						<li ><a class="s-level"  href="#security-admin">Administrators</a></li>
						<li ><a class="s-level"  href="#security-permissions">User Permissions</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
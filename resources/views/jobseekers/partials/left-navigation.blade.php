<nav class="navbar-side">
	<div class="navbar-collapse sidebar-collapse collapse">
		<ul id="side" class="nav navbar-nav side-nav custom-back-color">
			<li class="side-user hidden-xs">
				<img class="img-circle img-responsive" src="{{ asset('images/BZ72277888QB78134199.jpg') }}" alt="" style="cursor: pointer;position:relative;left:-22px;top:5px"/>
				<p class="welcome">
				</p>
				<p class="name tooltip-sidebar-logout">
					<a href="">
					<span class="last-name">John Smith</span></a>
					<a href="" title="logout">
						<img title="logout" src="{{ asset('images/logout.png') }}" style="display:inline;position:relative;top:6px"/>
					</a>
				</p>
				<div class="clearfix"></div>
			</li>
			<li class="panel">
				<a  href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#menu_home">Home</a>
				<ul class="collapse nav" id="menu_home">
					<li id="home-welcome" class="menu-sub-link">
						<a href="{{ route('seeker.index') }}">Dashboard</a>
					</li>
					<li id="home-search" class="menu-sub-link">
						<a href="{{ route('seeker.listings.search') }}">Search for Jobs</a>
					</li>
					<li id="home-received" class="menu-sub-link">
						<a href="{{ route('seeker.messages.index') }}">Messages</a>
					</li>
				</ul>
			</li>
			<li class="panel">
				<a  href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#menu_profile">Profile</a>
				<ul class="collapse nav" id="menu_profile">
					<li id="profile-edit" class="menu-sub-link">
						<a href="{{ route('seeker.profile.edit') }}">Edit Your Profile</a>
					</li>
					<li id="profile-password" class="menu-sub-link">
						<a href="{{ route('seeker.profile.password') }}">Change Password</a>
					</li>
					<li id="profile-job_preferences" class="menu-sub-link">
						<a href="{{ route('seeker.profile.preferences') }}">Job Preferences</a>
					</li>
					<li id="profile-statistics" class="menu-sub-link">
						<a href="{{ route('seeker.profile.statistics') }}">Statistics</a>
					</li>
				</ul>
			</li>
			<li class="panel">
				<a  href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#menu_cv">Resume</a>
				<ul class="collapse nav" id="menu_cv">
					<li id="cv-video_resume" class="menu-sub-link">
						<a href="{{ route('seeker.resume.create') }}">Create Resume</a>
					</li>
					<li id="cv-resume_creator" class="menu-sub-link">
						<a href="{{ route('seeker.resume.index') }}">My Resume</a>
					</li>
					<li id="home-apply" class="menu-sub-link">
						<a href="{{ route('seeker.listings.application') }}">Application History</a>
					</li>
				</ul>
			</li>
			<li class="panel">
				<a  href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#menu_jobmail">Job Alerts</a>
				<ul class="collapse nav" id="menu_jobmail">
					<li id="jobmail-rules" class="menu-sub-link">
						<a href="{{ route('seeker.listings.alert') }}">Current Rules</a>
					</li>
					<li id="jobmail-add" class="menu-sub-link">
						<a href="{{ route('seeker.listings.alert.create') }}">Add a New Rule</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
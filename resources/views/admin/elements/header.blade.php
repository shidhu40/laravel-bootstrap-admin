<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<img alt="image" class="rounded-circle" src="{{ URL::asset('images/profile_small.jpg') }}"/>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="block m-t-xs font-bold">David Williams</span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a class="dropdown-item" href="profile.html">Profile</a></li>
						<li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
						<li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
						<li class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
					</ul>
				</div>
				<div class="logo-element">
					IN+
				</div>
			</li>
			<li class="active">
				<a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Analaytic</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="">Flot Charts</a></li>
					<li><a href="">Morris.js Charts</a></li>
				</ul>
			</li>
			<li>
				<a href=""><i class="fa fa-envelope"></i> <span class="nav-label">Articles </span><span class="label label-warning float-right">16/24</span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="">Inbox</a></li>
					<li><a href="">Email view</a></li>
					<li><a href="">Compose email</a></li>
					<li><a href="">Email templates</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
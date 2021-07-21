
{{-- 
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>			
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-check-box"></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="calendar.html" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-calendar"></i>
			    </a>
			</li>
		  </ul>
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="ti-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
@php
	$user = DB::table('users')->where('id', Auth::user()->id)->first();
@endphp


	      <!-- User Account-->
          <li class="dropdown user user-menu">	
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
				<img src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user_images/noimage.png')}}" alt="">
			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ti-lock text-muted mr-2"></i> Logout</a>
			  </li>
			</ul>
          </li>	
		  <li>
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
			  	<i class="ti-settings"></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header> --}}







  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
	<div class="container-fluid">
	  <div class="navbar-wrapper">
		<a class="navbar-brand" href="javascript:;"></a>
	  </div>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
		<span class="sr-only">Toggle navigation</span>
		<span class="navbar-toggler-icon icon-bar"></span>
		<span class="navbar-toggler-icon icon-bar"></span>
		<span class="navbar-toggler-icon icon-bar"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end">
		<form class="navbar-form">
		  <div class="input-group no-border">
			<input type="text" value="" class="form-control" placeholder="Search...">
			<button type="submit" class="btn btn-white btn-round btn-just-icon">
			  <i class="material-icons">search</i>
			  <div class="ripple-container"></div>
			</button>
		  </div>
		</form>
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:;">
			  <i class="material-icons">dashboard</i>
			  <p class="d-lg-none d-md-block">
				Stats
			  </p>
			</a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="material-icons">notifications</i>
			  <span class="notification">5</span>
			  <p class="d-lg-none d-md-block">
				Some Actions
			  </p>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="#">Mike John responded to your email</a>
			  <a class="dropdown-item" href="#">You have 5 new tasks</a>
			  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
			  <a class="dropdown-item" href="#">Another Notification</a>
			  <a class="dropdown-item" href="#">Another One</a>
			</div>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="material-icons">person</i>
			  <p class="d-lg-none d-md-block">
				Account
			  </p>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
			  <a class="dropdown-item" href="#">Profile</a>
			  <a class="dropdown-item" href="#">Settings</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="{{route('admin.logout')}}">Log out</a>
			</div>
		  </li>
		</ul>
	  </div>
	</div>
  </nav>
  <!-- End Navbar -->
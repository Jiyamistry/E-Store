<?php

$obj=new mysqli("localhost","root","","estore");


$uid = $_SESSION["userid"];
$admin =$obj->query("select * from admin where id='$uid'");

$raw =$admin->fetch_object();
?>





<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>

	<form class="d-none d-sm-inline-block">
		<div class="input-group input-group-navbar">
			</button>
		</div>
	</form>

	<ul class="navbar-nav">
		<li class="nav-item px-2 dropdown">
			<div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">
				<div class="d-md-flex align-items-start justify-content-start">
					<div class="dropdown-mega-list">
						<div class="dropdown-header">Manage Product</div>
						<a class="dropdown-item" href="addproduct.php">Add Product</a>	
						<a class="dropdown-item" href="viewproduct.php">View Product</a>
					</div>
					<div class="dropdown-mega-list">
						<div class="dropdown-header">Manage Customer</div>
						<a class="dropdown-item" href="customer.php">View Customer</a>
						<a class="dropdown-item" href="inquiry.php">View Inqiry</a>
						<a class="dropdown-item" href="feedback.php">View Feedback</a>

					</div>
					<div class="dropdown-mega-list">
						<div class="dropdown-header">Manage Admin</div>
						<a class="dropdown-item" href="pages-profile.php">Profile</a>

					</div>
				</div>
			</div>
		</li>
	</ul>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<img src="img/avatars/p.png" class="avatar img-fluid rounded-circle me-1" alt="Chris Wood" /> <span class="text-dark"><?php echo "$raw->name"; ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
					<a class="dropdown-item" href="changepassword.php"><i class="align-middle me-1" data-feather="pie-chart"></i> Change Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="pages-settings.php">Update Profile</a>

					<a class="dropdown-item" href="logout.php">Sign out</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
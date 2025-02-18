<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">ADMIN <b>PANEL</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="images_gal/logo.png">
			</div>
			<ul>
				<li>
                <a href="dashboard.php">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
				</li>
                <li>
                    <a href="index.php">
                    <i class="fa-solid fa-home" aria-hidden="true"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="viewAllCustomer.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="viewPackage.php">
                    <i class="fa-solid fa-cube" aria-hidden="true"></i>
                        <span>Package</span>
                    </a>
                </li>
				<li>
					<a href="viewReview11.php">
						<i class="fa fa-comment-o" aria-hidden="true"></i>
						<span>Review</span>
					</a>
				</li>
				<li>
					<a href="#">
                    <i class="fa fa-book" aria-hidden="true"></i>
						<span>Booking</span>
					</a>
				</li>
                <li>
					<a href="Admin-login.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
				
			</ul>
		</nav>
		<section class="section-1">
			<h1>WELCOME ADMIN</h1>
           
			<p><b>Make Travel More Enjoyable</b></p>
		</section>
	</div>

</body>
</html>
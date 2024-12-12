<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Mulenga Homes</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(260) 962079873</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:kapembwa.kmulenga15@gmail.com">kapembwa.kmulenga15@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li class="active"><a href="portfolio.php">Get Started</a></li>
							<li><a href="blog.php">Houses</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						</nav>
					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- Login/Signup Section -->
<div class="container login-section">
    <h2 class="w3l_head w3l_head1">Login / Sign Up</h2>
    <div class="row">
        <!-- Landlord Login/Signup -->
        <div class="col-md-6">
            <h3>Landlord</h3>
            <form action="landlord_action.php" method="post">
                <div class="form-group">
                    <label for="landlord_email">Email:</label>
                    <input type="email" class="form-control" id="landlord_email" name="landlord_email" required>
                </div>
                <div class="form-group">
                    <label for="landlord_password">Password:</label>
                    <input type="password" class="form-control" id="landlord_password" name="landlord_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="landlord_signup.php" class="btn btn-link">Sign Up</a>
            </form>
        </div>

        <!-- Tenant Login/Signup -->
        <div class="col-md-6">
            <h3>Prospective Tenant</h3>
            <form action="tenant_action.php" method="post">
                <div class="form-group">
                    <label for="tenant_email">Email:</label>
                    <input type="email" class="form-control" id="tenant_email" name="tenant_email" required>
                </div>
                <div class="form-group">
                    <label for="tenant_password">Password:</label>
                    <input type="password" class="form-control" id="tenant_password" name="tenant_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="tenant_signup.php" class="btn btn-link">Sign Up</a>
            </form>
        </div>
    </div>
</div>
<!-- //Login/Signup Section -->

<!-- footer -->
<?php 
    include("footer.php");
?>

<!-- Scripts -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

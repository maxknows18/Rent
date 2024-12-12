<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/icon.png">
  <title>Mulenga Homes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } 
  </script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <link href="css/font-awesome.css" rel="stylesheet"> 
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
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="cl-effect-13" id="cl-effect-13">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Get Started</a></li>
                <li class="active"><a href="houses.php">Houses</a></li> <!-- Changed to houses.php for house listings -->
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
        </nav>
      </div>
    </div>
  </div>
<!-- //banner -->
<!-- gallery -->
  <div class="gallery">
    <div class="container">
      <h2 class="w3l_head w3l_head1">Houses for Rent</h2>
      <div class="wthree_gallery_grids">
        
        <div class="row">

          <?php 
            if (mysqli_num_rows($query) == 0) {
              echo "<b style='color:brown;'>Sorry, there are no houses available for rent at the moment.</b>";
            } else {
              while ($row = mysqli_fetch_array($query)) {
                echo
                '<div class="col-md-4">
                  <a href="house_details.php?id='.$row["id"].'">
                    <img src="images/houses/'.$row["image"].'" alt="'.$row["title"].'">
                    <h4>'.$row["title"].'</h4>
                    <p>$'.$row["price"].'/month</p>
                  </a>
                </div>';
              }
            }
          ?>

        </div>
      </div>
    </div>
  </div>
<!-- //gallery -->
<!-- footer -->
  
  <?php 
    include("footer.php");
  ?>
</body>
</html>

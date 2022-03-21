	<?php
	error_reporting(0);
	$host='localhost';
	$user='root';
	$pass='';
	$db='policestation';

	$con=mysqli_connect($host,$user,$pass,$db);
	if($con)
	{
		echo "";
	}
	else
	{
		echo "connection faild";
	}
	
	if(isset($_POST['submit']))
	{
	$id=$_POST['id'];
	$prisoner=$_POST['prisoner'];
	$serial=$_POST['serial'];
	$date=$_POST['date'];
	$person=$_POST['person'];
	$reason=$_POST['reason'];
	$whom_arrested=$_POST['whom_arrested'];
	$magistrate=$_POST['magistrate'];
	$property=$_POST['property'];
	$policename=$_POST['policename'];
	$date_disposal=$_POST['date_disposal'];
	$disposal=$_POST['disposal'];
	$pswd=$_POST['pswd'];
	
	$sql="insert into appb values('$id','$prisoner','$serial','$date','$person','$reason','$whom_arrested','$magistrate','$property','$policename',
	'$date_disposal','$disposal','$pswd')";
	$data=mysqli_query($con,$sql);
	if($data)
	{
		echo "appb inserted successfully";
	}
	else
	{
		echo "Failed you have entered same id numbers";
	}
}


?>






<!doctype html>
<html lang="en">
  <head>
    <title>Zambia Police</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">Zambia Police Stations</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="staff.php">Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="occurence.php">Occurrence</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="appb.php">Appb</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="criminal.php">criminal</a>
				
				
				 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="displayadmin.php">Display APPB</a>
                  <a class="dropdown-item" href="displayoccadmin.php">Display Occurrence</a>
                  <a class="dropdown-item" href="displaystaffadmin.php">Display Staff </a>
                  <a class="dropdown-item" href="courses.html"></a>
                  <a class="dropdown-item" href="courses.html"></a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.php">Login</a> / <a href="logout.php">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/riot.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Arrest and prisoners property</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Arrest and prisoners property</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5" style="color: #0000ff;">Arrest and prisoners property</h2>
              <form action="appb.php" method="POST">
			   <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="id" placeholder="Enter Id" name="id">
				</div>
				</div>
				<div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="prisoner" placeholder="prisoners signature on deposit" name="prisoner">
				</div>
				
				<div class="col">
				  <input type="serial Number" class="form-control" placeholder="Enter Serial Number" name="serial">
				</div>
				</div>
			  
			  
			  <div class="row">
				<div class="col">
				  <input type="date" class="form-control" id="date" placeholder="Enter date of arrest and occurrence Number" name="date">
				</div>
				
				<div class="col">
				  <input type="text" class="form-control" placeholder="Enter Name of Person Arrested" name="person">
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="reason" placeholder="Enter Reason for arrest include crime register reference" name="reason">
				</div>
				
				<div class="col">
				  <input type="text" class="form-control" placeholder=" Enter By whom arrested" name="whom_arrested">
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="magistrate" placeholder="Enter magistrate name or signature" name="magistrate">
				</div>
				
				<div class="col">
				  <input type="text" class="form-control" placeholder="Enter particular of prisoner property" name="property">
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="policename" placeholder="Enter police officer name" name="policename">
				</div>
				
				<div class="col">
				  <input type="date" class="form-control" placeholder="Enter date of disposal" name="date_disposal">
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col">
				  <input type="text" class="form-control" id="disposal" placeholder="Enter manner of disposal" name="disposal">
				</div>
				
				<div class="col">
				  <input type="text" class="form-control" placeholder="Enter prisoners name on receipt" name="pswd">
				</div>
			  </div>
			  
              <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				  
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
 
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
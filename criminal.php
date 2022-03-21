







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
                <a class="nav-link" href="criminal.php">Criminal</a>
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
              <h1 class="mb-2">Criminal</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Criminal</span></p>
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
              <h2 class="mb-5" style="color: #0000ff;">Wanted Criminal</h2>
              <form method="post" enctype="multipart/form-data">
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="id">Id</label>
                      <input type="text" name="id" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="criminal">Full Names</label>
                      <input type="text" name="name" class="form-control py-2 ">
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 form-group">
                    
                     
                      <input type="file" name="image" class="form-control py-2 ">
                    </div>
                  </div>
				 
				  
				  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
				
			<?php
   if(isset($_POST['submit']))
{
	if(getfilesize($_FILES['file']['tmp_name'])==FALSE){
		echo "failed";
	}
	else
	{
		$name=addslashes($_FILES['file']['file']);
		$file=base64_encode(file_get_contents(addslashes($_FILES['file']['tmp_name'])));
		savefile($file);
	}
}

function savefile($file){
	error_reporting (0);
	$host='localhost';
	$user='root';
	$pass='';
	$db='policestation';
	$con=mysqli_connect($host,$user,$pass,$db);
	$sql = "INSERT INTO testimage(file) values('$file')";
	$data = mysqli_query($con,$sql);
	if($data)
	{
		echo "Success";
	}
	else{
		echo "not Uploaded";
	}
}

display();

function display(){
	error_reporting (0);
	$host='localhost';
	$user='root';
	$pass='';
	$db='qadb';
	$con=mysqli_connect($host,$user,$pass,$db);	
	$sql="SELECT * FROM testimage";
	$data = mysqli_query($con,$sql);
	$num=mysqli_num_rows($data);
	for($i=0; $i < $num; $i++){
		$result=mysqli_fetch_array($data);
		$file=$result['file'];
		echo '<file src="data:file;base64,'.$file.'">';
	}
}


?>


				
				
				
				
				
				
				
				
				
				
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
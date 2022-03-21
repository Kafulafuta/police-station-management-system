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
	$number=$_POST['number'];
	$reference=$_POST['reference'];
	$time=$_POST['time'];
	$subject=$_POST['subjec'];
	$occurence=$_POST['occurence'];
	$officer=$_POST['officer'];
	
	$qr="UPDATE occurence SET number='$number',reference='$reference',time='$time',subject='$subject',occurence='$occurence',officer='$officer' WHERE id=$id";
	$data=mysqli_query($con,$qr);
    if($data)
	{
		echo "<p style='color: #000;'>Occurrence updated successfully. <a href='displayoccurence.php' style='color: #000;'>Check Updated List Here</a></p>";
	}
	else
	{
		echo"update Failed";
	}

	
}



?>



<?php
$id=$_GET['id'];

$r="SELECT * FROM occurence WHERE id=$id";
$query=mysqli_query($con,$r);
while($res=mysqli_fetch_array($query))
{
	$id=$res['id'];
	$number=$res['number'];
	$reference=$res['reference'];
	$time=$res['time'];
	$subject=$res['subject'];
	$occurence=$res['occurence'];
	$officer=$res['officer'];
	
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
                <a class="nav-link" href="staff.php">staff</a>
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
                <a href="login.html">Login</a> / <a href="logout.php">Logout</a>
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
              <h1 class="mb-2">Edit Occurrence</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Edit Occurrence Detailes</span></p>
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
              <h2 class="mb-5" style="color: #0000ff;">Edit Occurrence</h2>
              <form action="editoccurence.php" method="POST">
                  
                  
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="number">Id</label>
                      <input type="text" name="id" class="form-control py-2" value="<?php echo $id;?>" >
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="number">Enter Number</label>
                      <input type="text" name="number" class="form-control py-2" value="<?php echo $number;?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="reference">Reference Number</label>
                      <input type="text" name="reference" class="form-control py-2 "  value="<?php echo $reference;?>">
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Time</label>
                      <input type="time" name="time" class="form-control py-2 " value="<?php echo $time;?>">
                    </div>
                  </div>
				  
				  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="subject">Subject</label>
                      <input type="text" name="subject" class="form-control py-2 " value="<?php echo $subject;?>">
                    </div>
                  </div>
				  
                  <div class="row">
				   <div class="col-md-12 form-group">
				  <label for="Occurrence">Occurrence:</label>
				  <textarea class="form-control" rows="5" name="occurence" value="<?php echo $occurence;?>"></textarea>
				  </div>
				 </div>
				  
				   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="officer">Officer's Name or Signature</label>
                      <input type="text" name="officer" class="form-control py-2 " value="<?php echo $officer;?>">
                    </div>
                  </div>
				  
				  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Update" name="submit" class="btn btn-primary px-5 py-2" onclick="return mess();">
					  
					  <script type="text/javascript">
					   function mess()
					   {
						   alert ("occurence Updated Successfully");
						   return true;
					   }
					   
					   </script>
                    </div>
                  </div>
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
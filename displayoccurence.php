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
                <a class="nav-link" href="displaystaff.php">View Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="displayoccurence.php">View Occurrence</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="displayappb.php">View Appb</a>
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
              <h1 class="mb-2">Display Occcurence Details</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Display Occcurence</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="form-wrap">
              <h2 class="mb-5" style="color: #0000ff;">Display Occcurence</h2>
          
		  <form action="" method="POST">
		<input type="text" name="search" placeholder="search by service Number">
		<input type="submit" name="submit" value="Search">

</form>
  
  <table class="table table-light table-hover">
    <thead>


	<tr>
	    <th>ID</th>
	    <th>NUMBER</th>
		<th>REFERENCE NUMBER</th>
		<th>TIME</th>
		<th>SUBJECT</th>
		<th>OCCURENCE</th>
		<th>OFFICER'S NAME</th>
		<th>EDIT</th>
		<th>DELETE</th>
		
</tr>


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
	$searchkey=$_POST['search'];
	$sql="SELECT * FROM occurence WHERE number LIKE '%$searchkey%' or reference LIKE '%$searchkey%'";
}else{

$sql="SELECT * FROM occurence";
}

$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['number']."</td>";
	echo "<td>".$row['reference']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td>".$row['subject']."</td>";
	echo "<td>".$row['occurence']."</td>";
	echo "<td>".$row['officer']."</td>";
	echo "<td><a href='editoccurence.php?id=$row[id]'>Edit</a></td>";
	echo "<td><a href='delete.php?id=$row[id]' onclick='return checkdelete()'>Delete</a></td>";
	
	echo"</tr>";
}



?>

</tbody>
</div>
</table>
<script>
function checkdelete()
{
	return confirm('Are You Sure You Want To Delete An Occurence???');
}
</script>

</body>
</html>


		  
		  
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
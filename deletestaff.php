
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

$id=$_GET['id'];
$sql="DELETE FROM staff WHERE id=$id";
$query=mysqli_query($con,$sql);
if($query)
{
	echo"<script>alert('Record Deleted')</script>";
	?>
	
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/policestation/displaystaff.php">
	<?php
}
else
	
{
	echo "Sorry, deleted process failed";
}


?>
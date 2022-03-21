<?php
$host='localhost';
$user='root';
$pass='';
$db='policestation';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
	echo "connected successful";
}
else
{
	echo "connection faild";
}





?>






<?php

//if(isset($_POST["submit"]))
//{
$servername =" localhost";
$username ="root";
$password="";
$db="project1";

echo "Welcome !!";

$conn = new mysqli($servername,$username,$password,$db);

if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
  {
     echo "Connected !!";
  }
   $conn->close();
//}
else{
	echo "shaini";
}
?>
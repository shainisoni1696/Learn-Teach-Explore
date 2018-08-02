<?php
  
if(isset($_POST["fk"]))
{ 
$name ="localhost";
$user ="root";
$password="";
$db="project1";

echo "Welcome !!";
// Create connection
$conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
echo "Connection successfull";

$sql = "INSERT INTO t_info(email,inst_name,contact_no,inst_type,street,area,city,state,pincode,experience) VALUES ('".$_POST["email"]."','".$_POST["name"]."','".$_POST["contact"]."','".$_POST["radSize"]."','".$_POST["street"]."','".$_POST["area"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["pin"]."','NULL')";



if($conn->query($sql)==TRUE){
  echo "new record created succesfully";
}
else
{
  echo "error:  ".$sql."<br>".$conn->error;
}

   $conn->close();
}
else{
  echo "shaini";
}
  ?>

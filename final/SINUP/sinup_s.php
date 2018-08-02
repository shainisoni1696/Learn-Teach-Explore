<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  	

<form action="#" method="post">
	<div class="inside">
  <h2>Sign Up</h2>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="Email" type="text" required="Email">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password" required="password">
			<span>Enter a password longer than 8 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password" required="confirm_password">
			<span>Your passwords do not match</span>
		</p>
		<p>
			<input type="submit" name="tom" value="Create My Account" id="submit">
		</p>
	</div>
	</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

   <?php
if(isset($_POST["tom"]))
{ 
$name ="localhost";
$user ="root";
$password="";
$db="project1";

echo "Welcome !!";
// Create connection
$conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
echo "Connection successfull";

$p1=$_POST["password"];
$p2=$_POST["confirm_password"];


if($p1==$p2)
{
$sql = "INSERT INTO s_login(email,password) VALUES ('".$_POST["Email"]."','".$_POST["password"]."')";
if($conn->query($sql)==TRUE){
  echo "new record created succesfully";
}else
{
  echo "error:  ".$sql."<br>".$conn->error;
}
}
else
{
	echo "password doesnot match";
}

   $conn->close();
}
else{
  echo "shaini";
}
  ?>
</body>

</html>

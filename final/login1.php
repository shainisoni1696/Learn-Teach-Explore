<!DOCTYPE html>
<html>
<head>
  <body background="login1.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/log.css">

</head>
<body >
  <?php
echo "My first PHP script!";
?>

<h1 align="center">WELCOME</h1>

<form action="login1.php" method="post">
 <div class="indend">
  <div class="container1">
      <p><font size="6">As Student</font></p>
     <div class="b1">
         <label for="uname"><b>Username:</b></label></br>
        <input type="text" placeholder="Enter Username" name="uname" required></br></br>
          <label for="psw1"><b>Password</b></label></br>
        <input type="password" placeholder="Enter Password" name="psw1" required></br>
          <button type="submit" name="dk">Login</button></br>
           <label>
          <input type="checkbox" checked="checked" name="remember" ><font size="2" color="lightgray"> Remember me</font>
        </label></br>
      <div class="c1" style="background-color:#ffffff">
            <button type="button" class="cancelbtn1">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            <button type="submit"><a href="SINUP/sinup_s.html">SignUp</a></button></br>
     
     
     </div>

    </div>
  </div>

     
</form>
<?php
if(isset($_POST["dk"]))
{ 
$name ="localhost";
$user ="root";
$password="";
$db="project1";

echo "Welcome !!";
// Create connection
$conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
echo "Connection successfull";

$sql = "INSERT INTO t_login(email,password) VALUES ('".$_POST["tname"]."','".$_POST["psw2"]."')";
if($conn->query($sql)==TRUE){
  echo "new record created succesfully";
}else
{
  echo "error:  ".$sql."<br>".$conn->error;
}

   $conn->close();
}
else{
  echo "shaini";
}
  ?>


</body>
</html>

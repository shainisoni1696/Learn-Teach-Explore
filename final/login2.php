<!DOCTYPE html>
<html>
<head>
  <body background="laptop.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/log.css">

</head>
<body >
  <?php
echo "My first PHP script!";
?>

<h1 align="center">WELCOME</h1>
<form action="login2.php" method="post">
 <div class="indend">
        <div class="container2">
            <p><font size="6">AS TUTOR</font></p>
             <div class="b2">
            <label for="tname"><b>TutorName</b></label></br>
              <input type="text" placeholder="Enter TuitorNames" name="tname" required></br></br>
           <label for="psw2"><b>Password</b></label></br>
              <input type="password" placeholder="Enter Password" name="psw2" required></br>
              <button type="submit" name ="dk">Login</button></br>
               <label>
                <input type="checkbox" checked="checked" name="remember"> <font size="2" color="lightgray"> Remember me</font>
              </label></br>
               <div class="c2" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn2">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
                <a href="SINUP/sinup_t.php">SignUp</a>
                <!--<button type="submit"><a href="SINUP/sinup_t.php">SignUp</a></button></br>-->
     
              </div>
            </div>
       </div>
 </div>
</form>

</body>
</html>

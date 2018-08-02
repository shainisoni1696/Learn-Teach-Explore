<!DOCTYPE html>
<html lang="en">
<head>
<title>result</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>WELCOME</h1>
	<?php  


	 $name ="localhost";
      $user ="root";
      $password="";
      $db="project1";

      echo "Welcome !!";
      // Create connection
      $conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
              echo "Connection successfull";

$sql = "SELECT COURCE FROM subject";
$result = mysqli_query($sql) or die(mysqli_error());

$names  = array();

while($row = mysql_fetch_assoc($result)) {
    $names[] = $row['COURCE'];
}
$i=1;
foreach ($name as $value) {
    echo "$value <br>";
}
 $conn->close();
 ?>
</body>
</html>
<?php //echo "Akash($query)"; ?>
<html>
<head>
<title>inst_info</title>
<!--<body background="sunset2.jpg" opacity: 0.8;>-->

<style type="text/css">
  body{
                background-image: url("g.jpg");
                  background-size: 1380px 1000px;
                  background-repeat: no-repeat;
                  opacity: 2.5;
                   color:#333;
              font: 18px/28px  Arial, Helvetica, sans-serif;}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #333;
}

ul li {
  display: block;
  position: relative;
  float: left;
  background: #333;
}
li ul { display: none; }

ul li a {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}

</style>
</head>
 <<?php 
 //$info = array( array()); ?>
<body>
<h3>INSTITUTE INFORMATION </h3>
 <a href="../home1.php">home</a>
<form action="" method="post">

<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>Institute Name :</td>
<td><input type="text" name="InstName" maxlength="30" placeholder="Institute Name" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>Experience :</td>
<td><input type="text" name="Exp"  placeholder="Experience">
</td>
</tr>
<tr>
<td>Email :</td>
<td><input type="email" name="Email"  placeholder="Email">
</td>
</tr>
<tr>
<td>No. of subjects :</td>
<td><select name="nos" id="NumOfSubjects" onchange="generateCourseFields()">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
  </td>

</tr>
<tr>
  <td></td>
  <td>
    COURSE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    FEES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    FACULTY NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    TIME DURATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    TIMING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="GeneratedTextFieldsDiv"></div></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="fk" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
<?php //include("d3.php");  ?>
</body>
</html>

<script type="text/javascript">
  function  generateCourseFields(){ //alert("A");
            var number = document.getElementById("NumOfSubjects").value;
            var container = document.getElementById("GeneratedTextFieldsDiv");
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            var i;
            //alert(number);
            for (i=0;i<parseInt(number);i++){
                //container.appendChild(document.createTextNode("Member " + (i+1)));
                var InputCourse = document.createElement("input");
                InputCourse.type = "text";
                InputCourse.name = "course"+i;
                InputCourse.value= InputCourse.name;

                var InputFees = document.createElement("input");
                InputFees.type = "text";
                InputFees.name = "fees"+i;
                InputFees.value= InputFees.name;

                var InputFacName = document.createElement("input");
                InputFacName.type = "text";
                InputFacName.name = "facname"+i;
                InputFacName.value= InputFacName.name;

                var InputTime = document.createElement("input");
                InputTime.type = "text";
                InputTime.name = "days"+i;
                InputTime.value= InputTime.name;

                var InputTiming = document.createElement("input");
                InputTiming.type = "text";
                InputTiming.name = "timing"+i;
                InputTiming.value= InputTiming.name;

                container.appendChild(InputCourse);
                container.appendChild(document.createTextNode(" "));
                container.appendChild(InputFees);
                container.appendChild(document.createTextNode(" "));
                container.appendChild(InputFacName);
                container.appendChild(document.createTextNode(" "));
                container.appendChild(InputTime);
                container.appendChild(document.createTextNode(" "));
                container.appendChild(InputTiming);
                container.appendChild(document.createElement("br"));
                container.appendChild(document.createElement("br"));
                
            }
        }
  
</script>

<?php

if(isset($_POST["fk"]))
{
  $con = mysqli_connect("localhost","root","","project1") or die ("Unable 2 connect !!");

  for($i=0; $i<$_POST['nos']; $i++)
  {
    $course="course".$i;
    $fees="fees".$i;
    $facname="facname".$i;
    $time="days".$i;
    $timing="timing".$i;

    $query = "insert into subject values ('$_POST[Email]','$_POST[$course]','$_POST[$fees]','$_POST[$facname]','$_POST[$time]','$_POST[$timing]','$_POST[InstName]')";
    mysqli_query($con,$query);
   
    //echo "$query<br>";
  }
  $sql = "UPDATE t_info SET experience='$_POST[Exp]' WHERE EMAIL='$_POST[Email]'";
  mysqli_query($con,$sql);
 
  mysqli_close($con);
}

?>
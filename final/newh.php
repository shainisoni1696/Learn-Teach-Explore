<?php

if(isset($_POST["ns"]))
{ 
      $name ="localhost";
      $user ="root";
      $password="";
      $db="project1";

      echo "Welcome !!";
      // Create connection
      $conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
              echo "Connection successfull";
     $query = "SELECT * FROM t_info WHERE PINCODE='".$_POST['search']."'";
      $run=mysqli_query($conn,$query);
      $count=mysqli_num_rows($run);
      echo $count;
      if($count==0){
        $output='There was no search results!!';
      }
      else
        { 
          /* while($row=mysqli_fetch_assoc($run))
              {    
                   $inst_name = $row["INST_NAME"];
                   $type = $row["INST_TYPE"];

                   $output ='<div>'.$inst_name.''.$type.'</div><br>';
              }*/
        }
/*if($conn->query($sql)==TRUE){
  echo " quary  succesfully";
}
else
{
  echo "error:  ".$sql."<br>".$conn->error;
}*/

   //$conn->close();
}
  //echo "Today :" . date("Y/m/d") . "<br>";

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--  /* <link rel="stylesheet" href="assets/css/main.css" />*>-->
    <link rel="stylesheet" href="home1.css">
<style>
</style>
</head>
<body>
  
  <ul class="navbar1">


      <li><a href="#">Home</a></li>
          <li><a href="#">Price</a>
               <ul class="neha">

                                        <li> <form action="#" method="post">

                                              <br><p>Price</p><br><br>
                                                <input type="checkbox" name="Price[]" value="1500"> 500-1500 </input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="2500" > 1600-2500</input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="3500" > 2600-3500</input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="4500" > 3600-4500</input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="5500" > 4600-5500</input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="6500" > 5600-6500</input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="7500" > 6600-7500</input><br><br><br>
                                                 <input type="checkbox" name="Price[]" value="8500" > 7600-8500</input><br><br><br>
                                                 <input type="submit" name="psub" value="Submit" />
                                              </form>
                                      </li>      
               </ul>
          </li>

          <li><a href="#">City</a>
                 <ul class="neha">
                                      <li> <form action="#" method="post">
                                              <br><p>City</p><br><br>
                                                <input type="checkbox" name="City[]" value="Mangalore">Mangalore</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Bengaluru" >Bengaluru</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Kochi" >Kochi</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Udupi" >Udupi</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Indore" > Indore</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Mumbai" > Mumbai</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Delhi" > Delhi</input><br><br><br>
                                                 <input type="checkbox" name="City[]" value="Bhopal" > bhopal</input><br><br><br>
                                                   <input type="checkbox" name="City[]" value="Nodia" > Noida</input><br><br><br>
                                                     <input type="checkbox" name="City[]" value="Surathkal" >Surathkal</input><br><br><br>
                                                     <input type="submit" name="csub" value="Submit"/>
                                              </form>
                                      </li>
                  </ul>
          </li>
       <li><a href="#">Course</a>
                    <ul class="neha">
                      <li> <form action="#" method="post">
                                              <br><p>Course</p><br><br>
                                                <input type="checkbox" name="C[]" value="c">C</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="c++" >C++</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="java" >Java</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="pascal" >Pascal</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="ruby" >Ruby</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="python" >Python</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="webdep" >WebDep</input><br><br><br>
                                                 <input type="checkbox" name="C[]" value="sql" > SQL</input><br><br><br>
                                                   <input type="checkbox" name="C[]" value="ai" >AI</input><br><br><br>
                                                     <input type="checkbox" name="C[]" value="bigdata" >BIGDATA</input><br><br><br>
                                                     <input type="submit" name="co" value="Submit" />
                                                </form>
                                      </li>
                           
                </ul>
      </li>
      <li><a href="#">LogIn/SignUp</a>
      <ul class="neha">
        <br><p>LogIn/SignUp</p><br>
                                              
      <li><a href="login1.php">AS Student</a></li>
      <li><a href="login2.php">As Tutor</a></li>
        </ul>
        
      </li>
      <li><a href="#">About Us</a></li>
  </ul>


<div class="header">
  <h1>Learn Teach Explore</h1>
  <h3>Your own way to find <em>guidence</em><br>
     Your Quest to find best Tutor.... <b>END HERE</b></h3>
</div>

<!----------------main---------------------------->





<div class="main">
      <h2>SEARCH</h2>
                   <p>Search for tutor's location</p>
                    <form class="s_bar" action="home1.php" method="POST">
                     <!--<span class="fa fa-pencil"></span>-->
                      <input type="text" placeholder="Enter PINCODE"  name="search">
                      <button type="submit " name="ns" ><i class="fa fa-search"></i></button></br>
                    </form></br><br><br></div>
             
                    <?php 
                        echo "<div class='xxx'>";
                       $i=1; 
                     if(isset($_POST['ns']))

                       while($row=mysqli_fetch_assoc($run))
                          {    
                               $fac_name = $row["OWNER_NAME"];
                               $type = $row["INST_TYPE"];
                               $exp=$row["experience"];
                               $email=$row["EMAIL"];
                               $area=$row["AREA"];
                               $state=$row["STATE"];
                               $city=$row["CITY"];
                               $sql1="SELECT DISTINCT insti_name FROM subject WHERE EMAIL='".$email."'";
                               $sql="SELECT COURSE FROM subject WHERE EMAIL= '".$email."'";
                                
                                $run1=mysqli_query($conn,$sql1);
                                $run2=mysqli_query($conn,$sql);
                                 $count1=mysqli_num_rows($run1);
                                  
                                  $row2= mysqli_fetch_array($run1);
                                  echo "<div><b> $i &nbsp;&nbsp;&nbsp Institute Name - </b> $row2[0] <br>";
                               echo  '<div><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<b> Owner name - </b>'.$fac_name.'<br><br> &nbsp;&nbsp;&nbsp;&nbsp<b> Type of Coaching - </b>'.$type.'<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<b> Experience - </b>'.$exp.'<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<b> AREA - </b>'.$area.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp<b>CITY - </b>'.$city.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp<b> STATE - </b>'.$state.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;</div><br>';
                                  
                                 
                                while($row1=mysqli_fetch_array($run2))
                                  {    
                                       
                                 
                                     echo "<div> &nbsp;&nbsp;&nbsp;&nbsp <b>Courses provided-</b> $row1[0] &nbsp;&nbsp;&nbsp</div><br>";
                                    
                                   }
                                 echo "<br>";
                                 echo"----------------------------------------------------------------------------------------------------------------------------------------<br><br>";
                                
                               $i++;

                          }
                               echo "</div>"; 
                    ?>

<!
                 
</div>
</div>
<br>
<br>
<br>
<br>

<br>
<br>
<br><br><br><br><br><br><br><br><br>

      
        <div class="img">
        <h3>Trending Cources</h3>
        <MARQUEE scrollamount="10px" behavior="scroll" direction="left" width="100%" style="padding:10px;" onmouseover="this.stop();" onmouseout="this.start();">
        <img src="img1/c.jpg" alt="keep learning" style="width:400px;height:400px;">
        <img src="img1/cpp.jpg" alt="keep learning" style="width:400px;height:400px;">
        <img src="img1/python.png" alt="keep learning" style="width:400px;height:400px;">
        <img src="img1/ai.jpg" alt="keep learning" style="width:400px;height:400px;">
        <img src="img1/bigdata.jpg" alt="keep learning" style="width:400px;height:400px;">

        <img src="img1/mean.png" alt="keep learning" style="width:400px;height:400px;">
        </MARQUEE>
        </div>

 <!--<section id="two" class="wrapper style1 special">
        <div class="inner">
            <header>
              <h2>About Us</h2>
              <p>Our Team Member</p>
            </header>
          <div class="flex flex-4">
      
            <div class="box person">
                 <div class="image round">
                   <img src="images/n3.jpg" alt="Person 1"  />
                 </div>
                       <h3>Neha Saugandh</h3>
            </div>
              <div class="box person">
              <div class="image round">
                <img src="images/s1.jpg" alt="Person 2"/>
              </div>
              <h3>Shaini Soni</h3>
          </div>
        
           
          </div>
        </div>
 </section>*/-->
     

  <!--  <div class="alex">
      <br>
       <h2 style="text-align:center">ABOUT US</h2>

         <div class="row">
           <div class="column"><div class ="image round">
             <img src="images/n3.jpg"  style=" width:60% " ></div>
              <h3 >Neha Saugandh</h3>
                <p class="title">Student Of MCA,</p>
                <p>NITK</p>
              <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble" ></i></a> 
                 <a href="#"><i class="fa fa-twitter"></i></a>  
                  <a href="#"><i class="fa fa-linkedin"></i></a>  
                   <a href="#"><i class="fa fa-facebook"></i></a> 
              </div>
            </div>


               <div class="column">
                  <h3 >ek me or ek tu</h3>
                   <p class="title">asdfghjkl;poiuytrewasdfghjkl;.,mnbvcxzaqwertyuiop[<br>]'/.,mnbvcxzawertyuioplkjhgfdszxcvbnm,lk</p>
              </div>
       
        <div class="column"><div class="image round"><style float:center></style>
            <img src="images/s1.jpg"  style=" width:60%  " ></div>
           <h3 >Shaini Soni</h3>
            <p class="title">Student Of MCA,</p>
             <p>NITK</p>
             <!-- <div style="margin: 24px 0;">--
                  <a href="#"><i class="fa fa-dribbble"></i></a> 
                  <a href="#"><i class="fa fa-twitter"></i></a>  
                  <a href="#"><i class="fa fa-linkedin"></i></a>  
                  <a href="#"><i class="fa fa-facebook"></i></a> 
              </div>
        </div>
</div>
</div>-->

     

      <footer id="footer">
          <div class="inner">
            <div class="flex">
              <div class="copyright">
                &copy; National Institute Of Technology, Karnataka 2018. all copyrites are reserved
              </div>
             <!-- <ul class="icons">
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
                <li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
                <li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
              </ul>-->
            </div>
          </div>
      </footer>
</body>
</html>

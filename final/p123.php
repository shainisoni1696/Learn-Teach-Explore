<!---------------------------------city php code---------------------------------->

                    <?php
                    echo "<div class='xxx'>";
                          if(isset($_POST['csub']))  
                          {
                              $name ="localhost";
                              $user ="root";
                              $password="";
                              $db="project1";

                              
                              // Create connection
                              $conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
                                      
                    
                          if(!empty($_POST['City']))
                           {

                              foreach($_POST['City'] as $check) {
                                      echo " &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspYou have selected :";
                                      echo "<br>";
                                      echo "<b> &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp$check</b>";
                                      echo "<br><br>";

     


                                    $query="SELECT * FROM t_info where CITY= '".$check."'";
                                     $run=mysqli_query($conn,$query);
                                       $count=mysqli_num_rows($run);
                                            echo " &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspsearch result :";
                                             echo $count;
                                             echo "<br><br><br>";
                                            if($count==0){
                                             $output='There was no search results!!';
                                            }
                                           else{
                                             while($row=mysqli_fetch_assoc($run))
                                         {    
                                           $fac_name = $row["OWNER_NAME"];
                                           $type = $row["INST_TYPE"];
                                           $exp=$row["experience"];
                                           $email=$row["EMAIL"];
                                           $sql1="SELECT DISTINCT insti_name FROM subject WHERE EMAIL='".$email."'";
                                            $sql="SELECT COURSE FROM subject WHERE EMAIL= '".$email."'";
                                
                                            $run1=mysqli_query($conn,$sql1);
                                            $run2=mysqli_query($conn,$sql);
                                             $count1=mysqli_num_rows($run1);
                                   
                                           $row2= mysqli_fetch_array($run1);
                                           echo "<div><b> $i &nbsp;&nbsp;&nbsp Institute Name - </b> $row2[0] <br>";
                                          echo  '<div><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<b> OWNER NAME - </b>'.$fac_name.'<br><br> &nbsp;&nbsp;&nbsp;&nbsp<b> Type of Coaching - </b>'.$type.'<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<b> Experience - </b>'.$exp.' Year<br></div><br>';
                                  
                                 
                                        while($row1=mysqli_fetch_array($run2))
                                          {    
                                       
                                 
                                      echo "<div> &nbsp;&nbsp;&nbsp;&nbsp <b>Courses provided-</b> $row1[0] &nbsp;&nbsp;&nbsp</div><br>";
                                    
                                      }
                                       echo "<br>";
                                       echo"--------------------------------------------------------------------------------------------------------------------------------------<br><br>";
                                
                                      $i++;
                                  }
                                   
                                           }
                          }
}
}


                          if(isset($_POST['co']))  
                          {
                              $name ="localhost";
                              $user ="root";
                              $password="";
                              $db="project1";

                              
                              // Create connection
                              $conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
                                      
                    
                          if(!empty($_POST['C']))
                           {

                              foreach($_POST['C'] as $check) {
                                      echo " &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspYou have selected :";
                                      echo "<br>";
                                      echo "<b> &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp$check</b>";
                                      echo "<br><br>";

     


                                    $query="SELECT COURSE,FEES,FACULTY,T_DURATION,TIME1,insti_name,EMAIL FROM subject where COURSE= '".$check."'";
                                     $run=mysqli_query($conn,$query);
                                       $count=mysqli_num_rows($run);
                                            echo " &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspsearch result :";
                                             echo $count;
                                             echo "<br><br><br>";
                                            if($count==0){
                                             $output='There was no search results!!';
                                            }
                                           else{
                                             while($row=mysqli_fetch_assoc($run))
                                         {    
                                          $inst_name=$row["insti_name"];
                                           $fac_name = $row["FACULTY"];
                                           $td=$row["T_DURATION"];
                                           $t=$row["TIME1"];
                                           $email=$row["EMAIL"];
                                           
                                           $sql1="SELECT INST_TYPE,OWNER_NAME,AREA,CITY,STATE,experience FROM t_info WHERE EMAIL='".$email."'";
                                  
                                
                                            $run1=mysqli_query($conn,$sql1);
                
                                             $count1=mysqli_num_rows($run1);
                                   
                                           $row2= mysqli_fetch_array($run1);
                                           echo "<div>  <b> $i &nbsp;&nbsp; Type- </b> $row2[0] <br><br>  <b>&nbsp;&nbsp;&nbsp OWNER NAME- </b> $row2[1] <br><br>  <b>&nbsp;&nbsp;&nbsp AREA- </b> $row2[2] <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp CITY- </b> $row2[3] <b>&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp STATE- </b> $row2[4]<br><br> &nbsp;&nbsp;&nbsp<b> Experience- </b> $row2[5]  Year <br>";
                                          echo  '<div><br>&nbsp;&nbsp;&nbsp<b> Institute name - </b>'.$inst_name.'<br><br> &nbsp;&nbsp;&nbsp<b> Faculty - </b>'.$fac_name.'<br><br>&nbsp;&nbsp;&nbsp<b> Time duration - </b>'.$td.' Days <br><br>&nbsp;&nbsp;&nbsp;<b> BatchTime- </b>'.$t.'<br></div><br>';
                                  
                                 
                                        while($row1=mysqli_fetch_array($run1))
                                          {    
                                       
                                 
                                      echo "<div> &nbsp;&nbsp;&nbsp;&nbsp <b>Courses provided-</b> $row1[0] &nbsp;&nbsp;&nbsp</div><br>";
                                    
                                      }
                                       echo "<br>";
                                       echo"--------------------------------------------------------------------------------------------------------------------------------------<br><br>";
                                
                                      $i++;
                                  }
                                  
                                           }
                          }
}
}


//<!---------------------------------------------price php code---------------------------------------------->

  
                          if(isset($_POST['psub']))  
                          {
                              $name ="localhost";
                              $user ="root";
                              $password="";
                              $db="project1";

                              
                              // Create connection
                              $conn = mysqLi_connect($name, $user, $password, $db) or die("Connection failed");
                                      
                    
                          if(!empty($_POST['Price']))
                           {

                              foreach($_POST['Price'] as $check) {
                                      echo " &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspYou have selected :";
                                      echo "<br>";
                                      echo "<b> &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp$check</b>";
                                      echo "<br><br>";

     


                                    $query="SELECT COURSE,FEES,FACULTY,T_DURATION,TIME1,insti_name,EMAIL FROM subject where FEES BETWEEN '".$check."'-1000 AND '".$check."'";
                                     $run=mysqli_query($conn,$query);
                                       $count=mysqli_num_rows($run);
                                            echo " &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspsearch result :";
                                             echo $count;
                                             echo "<br><br><br>";
                                            if($count==0){
                                             $output='There was no search results!!';
                                            }
                                           else{
                                             while($row=mysqli_fetch_assoc($run))
                                         {    
                                          $inst_name=$row["insti_name"];
                                           $course=$row["COURSE"];
                                           $price=$row["FEES"];
                                           $fname = $row["FACULTY"];
                                           $td=$row["T_DURATION"];
                                           $t=$row["TIME1"];
                                           $email=$row["EMAIL"];
                                           
                                           $sql1="SELECT INST_TYPE,OWNER_NAME,AREA,CITY,STATE,experience FROM t_info WHERE EMAIL='".$email."'";
                                  
                                
                                            $run1=mysqli_query($conn,$sql1);
                
                                             $count1=mysqli_num_rows($run1);
                                   
                                           $row2= mysqli_fetch_array($run1);
                                           echo "<div>  <b> $i &nbsp;&nbsp; Type- </b> $row2[0] <br><br>  <b>&nbsp;&nbsp;&nbsp OWNER NAME- </b> $row2[1] <br><br>  <b>&nbsp;&nbsp;&nbsp AREA- </b> $row2[2] <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp CITY- </b> $row2[3] <b>&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp STATE- </b> $row2[4]<br><br> &nbsp;&nbsp;&nbsp<b> Experience- </b> $row2[5]<br>";

                                          echo  '<div><br>&nbsp;&nbsp;&nbsp<b> Institute name - </b>'.$inst_name.'<br><br>&nbsp;&nbsp;&nbsp<b> Course- </b>'.$course.'<br><br>&nbsp;&nbsp;&nbsp<b> Price - </b>'.$price.' /-<br><br> &nbsp;&nbsp;&nbsp<b> Faculty - </b>'.$fname.'<br><br>&nbsp;&nbsp;&nbsp<b> Time duration - </b>'.$td.' Days &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> BatchTime- </b>'.$t.'<br></div><br>';
                                  
                                 
                                        while($row1=mysqli_fetch_array($run1))
                                          {    
                                       
                                 
                                      echo "<div> &nbsp;&nbsp;&nbsp;&nbsp <b>Courses provided-</b> $row1[0] &nbsp;&nbsp;&nbsp</div><br>";
                                    
                                      }
                                       echo "<br>";
                                       echo"--------------------------------------------------------------------------------------------------------------------------------------<br><br>";
                                
                                      $i++;
                                  }
                                   
                                           }
                          }
}
}
 echo "</div>";
?>
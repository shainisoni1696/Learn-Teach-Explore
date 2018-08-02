<?php

$infp= array(
                
                array(
                       cource => $_POST["cource1"],
                       fees => $_POST["fees1"],
                        faculty_name => $_POST["faculty name1"],
                        time_duration => $_POST["time duration1"],
                        timing =>$_POST["timing1"]
                       
                       ),
                 array(
                       cource => $_POST["cource2"],
                       fees => $_POST["fees2"],
                        faculty_name => $_POST["faculty name2"],
                        time_duration => $_POST["time duration2"],
                        timing =>$_POST["timing2"]
                      ),
                  array(

                        cource => $_POST["cource3"],
                       fees => $_POST["fees3"],
                        faculty_name => $_POST["faculty name3"],
                        time_duration => $_POST["time duration3"],
                        timing =>$_POST["timing3"]
                      ),
                   array(
                         cource => $_POST["cource4"],
                       fees => $_POST["fees4"],
                        faculty_name => $_POST["faculty name4"],
                        time_duration => $_POST["time duration4"],
                        timing =>$_POST["timing4"]
                      ),
                   array(
                           cource => $_POST["cource5"],
                       fees => $_POST["fees5"],
                        faculty_name => $_POST["faculty name5"],
                        time_duration => $_POST["time duration5"],
                        timing =>$_POST["timing5"]
                      ),
                    array(
                           cource => $_POST["cource6"],
                       fees => $_POST["fees6"],
                        faculty_name => $_POST["faculty name6"],
                        time_duration => $_POST["time duration6"],
                        timing =>$_POST["timing6"]
                      ),
                     array(
                            cource => $_POST["cource7"],
                       fees => $_POST["fees7"],
                        faculty_name => $_POST["faculty name7"],
                        time_duration => $_POST["time duration7"],
                        timing =>$_POST["timing7"]
                      ),
                     array(
                            cource => $_POST["cource8"],
                       fees => $_POST["fees8"],
                        faculty_name => $_POST["faculty name8"],
                        time_duration => $_POST["time duration8"],
                        timing =>$_POST["timing8"]
                     ),
                      array(
                              cource => $_POST["cource9"],
                       fees => $_POST["fees9"],
                        faculty_name => $_POST["faculty name9"],
                        time_duration => $_POST["time duration9"],
                        timing =>$_POST["timing9"]
                      )               

);
?>

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
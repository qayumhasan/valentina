<?php
    include '../lib/database.php';
    include '../lib/formate.php';
 ?>
 <?php
    $db = new Database;
    $fm = new Formate;
  ?>
 <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {


                                                        
              
                $fname = $_POST['fname'];
                $friend = $_POST['friend'];
                $email = $_POST['email'];
               
                $femail = $_POST['femail'];
                $proposal = $_POST['proposal'];



               
               
                if ($fname==''||$friend==''||$email==''||$femail==''||$proposal==''
                    ) {
                  echo "<span style='color: red;font-size: 20px;'>Fild must not be empty!!</span> ";
                }else{


                  $query = "INSERT INTO tbl_proposal(name,friend,myemail,femail,pro) VALUES ('$fname','$friend','$email','$femail','$proposal')";
                     $result =$db->insert($query);
              }

                




                

            }
                    
        ?>
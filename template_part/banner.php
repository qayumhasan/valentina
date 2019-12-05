<section id="banner">
    <div class="container">
    <?php

        $query = "SELECT * FROM tbl_banner WHERE status = 1 LIMIT 1";
        $result = $db->select($query);
        if ($result) {
            while ($row =$result->fetch_assoc()) {
               
        
            
                
        

     ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-5 pl-0">
                <div class="banner-img">
                    <img src="admin/<?php echo $row['images'] ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-7 pr-0 tahsan4">
                <div class="banner-text text-center justify-content-end">
                    <h3><?php echo $row['title']?></h3>
                    <h2><?php echo $row['stitle']?></h2>
                    <p><?php echo $fm->textshotener($row['body'],600)?></p>
                <a href="#" data-toggle="modal" data-target="#exampleModal2">Send Gift/Proposal</a>
                <!-- Modal -->
                <div class="">
                    <div class="col-lg-12">
                            <div class="">
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe56" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabe6"></h5>
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="heading col-lg-12 pl-0">
                                                    <div class="col-lg-6">
                                                        <h2>Which you gift</h2>
                                                    </div>
                                                </div>



                                                <?php 
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {


                                                        
                                                        // $checkbox = $_POST['checkbox'];
                                                        $fname = $_POST['fname'];
                                                        $lname = $_POST['lname'];
                                                        $email = $_POST['email'];
                                                       
                                                        $phone = $_POST['phone'];
                                                        $addr = $_POST['addr'];



                                                        $sfname = $_POST['sfname'];
                                                        $slname = $_POST['slname'];
                                                        $semail = $_POST['semail'];
                                                        $sphone = $_POST['sphone'];
                                                        $saddr = $_POST['saddr'];
                                                        
                                                       
                                                       
                                                        if ($fname==''||$lname==''||$email==''||$phone==''||$addr==''||$sfname==''||$slname==''||$semail==''||$sphone==''||$saddr==''
                                                            ) {
                                                          echo "<span style='color: red;font-size: 20px;'>Fild must not be empty!!</span> ";
                                                        }else{


                                                          $query = "INSERT INTO tbl_sendgift(fname,lname,email,phone,addr,sfname,slname,semail,sphone,saddr) VALUES ('$fname','$lname','$email','$phone','$addr','$sfname','$slname','$semail','$sphone','$saddr')";
                                                             $result =$db->insert($query);
                                                      }

                                                        




                                                        

                                                    }
                                                            
                                                ?>

                                                

                                                

                                                <form action="" method="post">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-10">
                                                            <div class="brand-name col-12 text-left pl-0">
                                                                <ul>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="checkbox2" type="checkbox" name="checkbox" value="Chocolate">
                                                                            <label for="checkbox2">Chocolate</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="checkbox3" type="checkbox" name="checkbox" value="Toys">
                                                                            <label for="checkbox3">Toys</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="checkbox4" type="checkbox" name="checkbox" value="Clothes">
                                                                            <label for="checkbox4">Clothes</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="checkbox5" type="checkbox" name="checkbox" value="Food">
                                                                            <label for="checkbox5">Food</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="checkbox6" type="checkbox" name="checkbox" value="Accessories">
                                                                            <label for="checkbox6">Accessories</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="checkbox7" type="checkbox" name="checkbox" value="Money">
                                                                            <label for="checkbox7">Money</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput236" placeholder="First Name" name="fname">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput13" placeholder="Last Name" name="lname">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput14" placeholder="Your E-mail" name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput15" placeholder="Your Phone" name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput16" placeholder="Address (From where we collect your gift)" name="addr">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="heading heading3 col-lg-12 pl-0">
                                                        <div class="col-lg-8 text-left">
                                                            <h2>Shipping Details <span>(Where & Whom you want to send gift)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput17" placeholder="First Name" name="sfname">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput18" placeholder="Last Name" name="slname">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput19" placeholder="His/Her E-mail" name="semail">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput20" placeholder="His/Her Phone" name="sphone">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput21" placeholder="Address ( Where we send you gift)" name="saddr">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit-join submit-join2">
                                                        <button type="submit" class="btn btn-secondary">send gift</button>
                                                    </div>
                                                 </form>



                                                 
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


                                                 <div class="heading heading3 col-lg-12 pl-0">
                                                        <div class="col-lg-6 text-left">
                                                            <h2>proposal form</h2>
                                                        </div>
                                                    </div>
                                                    <form action="" method="post">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput57" placeholder="Your Name" name="fname">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput68" placeholder="Your boy/girlfriend Name" name="friend">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput59" placeholder="Your E-mail" name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput50" placeholder="Your boy/girlfriend E-mail" name="femail">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" id="exampleFormControlInput51" placeholder="Your Proposal" name="proposal"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="submit-join">
                                                        <button type="submit" class="btn btn-secondary">send proposal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    <!-- modal end -->
                </div>
            </div>
        </div>

        <?php 
            }
           
        }else{
            echo "No Post found!!!";
        } ?>

       
        
    </div>
</section>  
<section id="offer">
    <div class="container">


        <div class="row">



        <?php
            $query = "SELECT * FROM tbl_offers WHERE status = 1 LIMIT 1";
            $result = $db->select($query);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    
            

         ?>
            <div class="col-lg-4">
                <div class="heading4">
                    <h3>Valentine</h3>
                    <h2><?php echo $row['title']?></h2>
                </div>
                <div class="offer-details">
                    <p><?php echo $fm->textshotener($row['body'],600)?></p>
                </div>
            </div>


             <?php 
                }
                }else{
                    echo "<h1 style='color:red; text-align:center;'>No Post found!!!</h1>";
                }
                 ?>



            

            <div class="col-lg-8">
                <div class="services">
                    <div class="row">
                      <?php
                            $query = "SELECT * FROM tbl_services WHERE status = 1 LIMIT 4";
                            $result = $db->select($query);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    
                            

                         ?>
                        <div class="col-lg-6 col-md-6">
                           


                            <div class="service-main">
                                <div class="service-item">
                                    <div class="service-name">
                                        <img src="admin/<?php echo $row['images'] ?>" class="img-fluid" alt=""><span><?php echo $row['title']?></span>
                                    </div>
                                    <div class="service-details">
                                        <p><?php echo $fm->textshotener($row['body'],600)?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php 
                                    }
                            }else{
                                echo "<h1 style='color:red; text-align:center;'>No Post found!!!</h1>";
                            }
                             ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
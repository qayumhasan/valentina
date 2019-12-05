<section id="feedback">
   <i class="fa fa-chevron-left left"></i>
   <i class="fa fa-chevron-right right"></i>
    <div class="container">
        <div class="row feedback-slide">

                <?php
                    $query = "SELECT * FROM tbl_testimonials WHERE status = 1";
                    $result = $db->select($query);
                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            
                    

                 ?>
            <div class="col-lg-6">
                <div class="client-feedback">
                    <p><?php echo $fm->textshotener($row['body'],600)?></p>
                    <ul>
                        <li><img src="admin/<?php echo $row['images'] ?>" class="img-fluid" alt=""></li>
                        <li>
                            <div class="client-info">
                                <h3><?php echo $row['title']?></h3>
                                <h4><?php echo $row['stitle']?></h4>
                            </div>
                        </li>
                        <span class="clearfix"></span>
                    </ul>
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
</section>
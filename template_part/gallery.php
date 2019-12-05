<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    <?php
                        $query = "SELECT * FROM tbl_cimages WHERE status = 1";
                        $result = $db->select($query);
                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                
                        

                     ?>


                    <div class="col-lg-6 assets/images-item">
                        <div class="gallery-img">
                            <img src="admin/<?php echo $row['images'] ?>" class="img-fluid" alt="">
                            <div class="overlay">
                                <div class="social">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-comments-o"></i></a>
                                    <a href="#"><i class="fa fa-download"></i></a>
                                </div>
                                <div class="social-engagment">
                                    <h3><?php echo $row['title']?></h3>
                                    <p>
                                        <span><i class="fa fa-download"></i> 1,123 Download </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 25k Likes </span>
                                        <span><i class="fa fa-comments"></i> 13k Comments </span>
                                    </p>
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
            


            <?php
                $query = "SELECT * FROM tbl_imgtitle LIMIT 1";
                $result = $db->select($query);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        
                

             ?>
            <div class="col-lg-4">
                <div class="heading3">
                    <h3>Valentine</h3>
                    <h2><?php echo $row['title']?></h2>
                </div>
                <div class="ticket-details text-right">
                    <p><?php echo $fm->textshotener($row['body'],600)?></p>
                </div>
                <div class="button button3 text-right">
                    <a href="#" class="browse-all">browse all</a>
                    <a href="#">upload photos</a>
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
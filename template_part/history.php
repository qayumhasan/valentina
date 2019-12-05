<section id="history">
    <div class="container">

      <?php
        $query = "SELECT * FROM tbl_history WHERE status = 1 LIMIT 1";
        $result = $db->select($query);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                
        

     ?>
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <img src="admin/<?php echo $row['images'] ?>" class="img-fluid" alt="">
            </div>
            
            <div class="col-lg-6 col-md-7">
                <div class="heading">
                    <h3>History of</h3>
                    <h2><?php echo $row['title']?></h2>
                </div>
                <div class="history-details">
                    <p><?php echo $fm->textshotener($row['body'],800)?></p>
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
</section>  
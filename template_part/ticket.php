<section id="ticket">
    <div class="container">

     <?php
        $query = "SELECT * FROM tbl_couple WHERE status = 1 LIMIT 1";
        $result = $db->select($query);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                
        

     ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="letter">
                    <img src="admin/<?php echo $row['images'] ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heading3">
                    <h3>Valentine</h3>
                    <h2><?php echo $row['title']?></h2>
                </div>
                <div class="ticket-details text-right">
                    <p><?php echo $fm->textshotener($row['body'],600)?></p>
                </div>
                <div class="button button2 text-right">
                    <a href="#" data-toggle="modal" data-target="#exampleModal4">get ticket</a>
                    <a href="#">get quote</a>
                    <!-- Modal -->
                    <div class="">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe56" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabe16"></h5>
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="heading heading3 col-lg-12 text-center pl-0 pr-0">
                                                    <div class="col-lg-12">
                                                        <h2>Get The ticket</h2>
                                                    </div>
                                                </div>
                                                   <form action="action.php" method="post">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput23" placeholder="His Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleFormControlInput38" placeholder="Her Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput99" placeholder="His E-mail">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleFormControlInput48" placeholder="Her E-mail">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" id="exampleFormControlInput49" placeholder="Your Message Here"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="submit-join text-center">
                                                        <button type="submit" class="btn btn-secondary">Buy Ticket</button>
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
            echo "<h1 style='color:red; text-align:center;'>No Post found!!!</h1>";
        }
         ?>
    </div>
</section>   
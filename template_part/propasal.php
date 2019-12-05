<section id="proposal">
    <div class="container">
        <div class="row">
            <div class="col-11 ml-auto col-md-12 col-sm-12">
                   <?php
                        $query = "SELECT * FROM tbl_gift WHERE status = 1 LIMIT 1";
                        $result = $db->select($query);
                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                
                        

                     ?>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="proposal-content">
                            <div class="heading2">
                                <h3>Valentine</h3>
                                <h2><?php echo $row['title']?></h2>
                            </div>
                            <div class="proposal-details">
                                <p><?php echo $fm->textshotener($row['body'],900)?></p>
                                <div class="button">
                                <a href="#" data-toggle="modal" data-target="#exampleModal3">send gift</a>    
                                <a href="#" data-toggle="modal" data-target="#exampleModal">send proposal</a>
                                <!-- Modal -->
                                <div class="">
                                    <div class="col-lg-12">
                                            <div class="">
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe56" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabe7"></h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                 <div class="heading heading3 col-lg-12 pl-0 pr-0">
                                                                        <div class="col-lg-12 text-center">
                                                                            <h2>proposal form</h2>
                                                                        </div>
                                                                    </div>
                                                                    <form>
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput67" placeholder="Your Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput78" placeholder="Your boy/girlfriend Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput69" placeholder="Your E-mail">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput70" placeholder="Your boy/girlfriend E-mail">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control" id="exampleFormControlInput61" placeholder="Your Proposal"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                       <div class="submit-join text-center">
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
                                <!-- Modal -->
                                <div class="">
                                    <div class="col-lg-12">
                                            <div class="">
                                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe56" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabe8"></h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="heading col-lg-12 pl-0">
                                                                    <div class="col-lg-6">
                                                                        <h2>Which you gift</h2>
                                                                    </div>
                                                                </div>
                                                                <form>
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-10">
                                                                            <div class="brand-name col-12 text-left pl-0">
                                                                                <ul>
                                                                                    <li>
                                                                                        <div class="checkbox checkbox-primary">
                                                                                            <input id="checkbox22" type="checkbox">
                                                                                            <label for="checkbox22">Chocolate</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="checkbox checkbox-primary">
                                                                                            <input id="checkbox33" type="checkbox">
                                                                                            <label for="checkbox3">Toys</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="checkbox checkbox-primary">
                                                                                            <input id="checkbox44" type="checkbox">
                                                                                            <label for="checkbox4">Clothes</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="checkbox checkbox-primary">
                                                                                            <input id="checkbox55" type="checkbox">
                                                                                            <label for="checkbox55">Food</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="checkbox checkbox-primary">
                                                                                            <input id="checkbox66" type="checkbox">
                                                                                            <label for="checkbox66">Accessories</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="checkbox checkbox-primary">
                                                                                            <input id="checkbox77" type="checkbox">
                                                                                            <label for="checkbox77">Money</label>
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
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput238" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput33" placeholder="Last Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput29" placeholder="Your E-mail">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput35" placeholder="Your Phone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput36" placeholder="Address (From where we collect your gift)">
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
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput58" placeholder="Last Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput79" placeholder="His/Her E-mail">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" id="exampleFormControlInput80" placeholder="His/Her Phone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput41" placeholder="Address ( Where we send you gift)">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="submit-join text-center">
                                                                        <button type="submit" class="btn btn-secondary">send gift</button>
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
                    </div>
                    <div class="gift">
                        <div class="gift-img">
                            <img src="assets/images/gift-img.png" class="img-fluid" alt="">
                        </div>
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
</section>  
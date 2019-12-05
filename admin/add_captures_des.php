<?php include 'template_part/header.php'; ?>

        <!-- Navigation -->
<?php include 'template_part/navbar.php'; ?>     

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <h1 class="page-header">Add Title & Description</h1>
            </div>
                <!-- /.col-lg-12 -->
        </div>

        <div class="row">
        	<div class="col-lg-12">

        		  <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $title = $_POST['title'];
                        $history = $_POST['hisdesc'];
                        
                       
                        
                        if ($title==''||$history=='') {
                          echo "<span style='color: red;font-size: 20px;'>Fild must not be empty!!</span> ";
                        } else{
                         
                          $query = "INSERT INTO tbl_imgtitle(title,body) VALUES ('$title','$history')";
                          $result =$db->insert($query);
                      }

                        




                        

                    }
                            
                ?>





        		<form action="" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label>Title</label>
				    <input type="text" class="form-control" name="title" placeholder="Enter Title">
				    
				  </div>

				  <div class="form-group">
				    <label>Description</label>
				    
				    <textarea class="form-control" rows="5" name="hisdesc"></textarea>
				  </div>

				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
        	</div>
        </div>
    </div>
</div>




<?php include 'template_part/footer.php'; ?>
<?php include 'template_part/header.php'; ?>

        <!-- Navigation -->
<?php include 'template_part/navbar.php'; ?>     

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <h1 class="page-header">Update Site Logo</h1>
            </div>
                <!-- /.col-lg-12 -->
        </div>
<?php
      if (isset($_GET['edit_id'])) {
          $upid=$_GET['edit_id'];
      }
      $query = "SELECT * FROM tbl_logo WHERE id='$upid'";
      $result = $db->select($query);
      $row = mysqli_fetch_assoc($result);

       ?>
        <div class="row">
        	<div class="col-lg-12">

        		  <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $status = $_POST['status'];
                        $permit = array('png');
                        $file_name = $_FILES['images']['name'];
                        $file_size = $_FILES['images']['size'];
                        $file_temp = $_FILES['images']['tmp_name'];

                        $expload = explode('.',$file_name);
                        $ext_name =end($expload);
                        $create_name= substr(md5(time()),'0','10').'.'.$ext_name;

                        if ($file_name==''||$status=='') {
                          echo "<span style='color: red;font-size: 20px;'>Fild must not be empty!!</span> ";
                        }elseif ($file_size > 100000000) {
                          echo "<span style='color: red;font-size: 20px;'>file must be less than 1kb!!</span> ";
                        }elseif (in_array($ext_name,$permit)===false) {
                          echo "<span style='color: red;font-size: 20px;'>You can only uploads:".implode(',',$permit)."</span> ";
                        }



                        else{
                          $upload_path ="uploads/logo/".$create_name;
                          move_uploaded_file($file_temp, $upload_path);
                       


                          $query ="UPDATE tbl_logo
                                    SET 
                                   
                                    images ='$upload_path',
                                    status ='$status'
                                    WHERE id =$upid;


                                  ";
                          $result = $db->update($query);
                      }

                        




                        

                    }
                            
                ?>





        		<form action="" method="post" enctype="multipart/form-data">

  				  <div class="form-group col-lg-6">
            <label>Enter Banner Image </label>
            <input type="file" name="images">
          </div>
          <div class="form-group col-lg-6">
            <label>Preview Banner Image </label><br>
            <img src="<?php echo $row['images'];?>" width="150px;">
          </div>
            <div class="form-group">
            <div class="form-check">
              <label>Publication Status</label>
              <br/>
              <select name="status">
                <option>Select Publication Status</option>
                <option value="1">PUBLIC</option>
                <option value="0">Unpublics</option>
              </select>
            </div>
          </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
        	</div>
        </div>
    </div>
</div>




<?php include 'template_part/footer.php'; ?>
<?php include 'template_part/header.php'; ?>

        <!-- Navigation -->
<?php include 'template_part/navbar.php'; ?>     

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <h1 class="page-header">Add Captures Images</h1>
            </div>
                <!-- /.col-lg-12 -->
        </div>

        <div class="row">
        	<div class="col-lg-12">

        		  <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $title = $_POST['title'];
                        $status = $_POST['pstatus'];
                       
                        $permit = array('jpg','jpeg','png');
                        $file_name = $_FILES['images']['name'];
                        $file_size = $_FILES['images']['size'];
                        $file_temp = $_FILES['images']['tmp_name'];

                        $expload = explode('.',$file_name);
                        $ext_name =end($expload);
                        $create_name= substr(md5(time()),'0','10').'.'.$ext_name;

                        if ($title==''||$status==''||$file_name=='') {
                          echo "<span style='color: red;font-size: 20px;'>Fild must not be empty!!</span> ";
                        }elseif ($file_size > 100000000) {
                          echo "<span style='color: red;font-size: 20px;'>file must be less than 1kb!!</span> ";
                        }elseif (in_array($ext_name,$permit)===false) {
                          echo "<span style='color: red;font-size: 20px;'>You can only uploads:".implode(',',$permit)."</span> ";
                        }



                        else{
                          $upload_path ="uploads/images/".$create_name;
                          move_uploaded_file($file_temp, $upload_path);
                          $query = "INSERT INTO tbl_cimages(title,images,status) VALUES ('$title','$upload_path','$status')";
                          $result =$db->insert($query);
                      }

                        




                        

                    }
                            
                ?>





        		<form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
            
          </div>

          <div class="form-group col-lg-6">
            <label>Enter Services Image </label>
            <input type="file" name="images">
          </div>

          <div class="form-group col-lg-6">
            <div class="form-check">
              <label>Publication Status</label>
              <br/>
              <select name="pstatus">
                <option>Select Banner Status</option>
                <option value="1">PUBLIC</option>
                <option value="0">Unpublics</option>
              </select>
            </div>
          </div>
          <div class="form-group col-lg-6" style="opacity: 0">
            <button type="submit" class="btn btn-primary text-left">Submit</button>
          </div>

           <button type="submit" class="btn btn-primary text-left">Submit</button>
          
        </form>
        	</div>
        </div>
    </div>
</div>




<?php include 'template_part/footer.php'; ?>
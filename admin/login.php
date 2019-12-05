<?php 
    include '../lib/session.php';
    Session::init();
?>
<?php
    include '../lib/database.php';
    include '../lib/formate.php';
 ?>
 <?php
    $db = new Database;
    $fm = new Formate;
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom assets/ -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                        <?php
                            if ($_SERVER['REQUEST_METHOD']=='POST') {
                                $email = $fm->validation($_POST['email']);
                                $pass = $fm->validation($_POST['password']);

                                $email = mysqli_real_escape_string($db->link,$email);
                                $pass = mysqli_real_escape_string($db->link,$pass);

                                $query = "SELECT * FROM tbl_user WHERE email ='$email' AND pass ='$pass'";
                                $result = $db->select($query);
                                if ($result !=false) {
                                    $value = mysqli_fetch_array($result);
                                    $row = mysqli_num_rows($result);
                                    if ($row>0) {
                                        
                                        Session::set('login',true);
                                        Session::set('user_email',$value['email']);
                                        Session::set('user_id',$value['id']);
                                        Session::set('username',$value['username']);
                                        header('location:index.php');
                                        
                                    }else{
                                        echo "<span style='color: red;'>No result found!</span>";
                                    }
                                }else{
                                    echo "<span style='color: red;'>Email or Password not match!</span>";
                                }
                            }
                         ?>

                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-success btn-block">Submit</button>
                                <!-- Change this to a button or input when using this as a form -->
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

</body>

</html>

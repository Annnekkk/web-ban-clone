<?php include('../config.php');?>
<head>
  <meta charset="utf-8">
     <link rel="apple-touch-icon" sizes="180x180" href="<?=$site['site_domain'];?><?=$site['site_favicon'];?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$site['site_domain'];?><?=$site['site_favicon'];?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$site['site_domain'];?><?=$site['site_favicon'];?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản Trị Website | ZangYT </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="../src/scripts/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
html,body{
  background: -webkit-linear-gradient(left, #0036ff, #00fcff);
}
.card {
    border-radius: 10px;
    border: 1px solid #389AF0;
}
</style>
<body>
<div class="account-pages my-5 pt-sm-5">


<?php

if (isset($_POST["submit"]))
{
    $username = str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['username']))));
    $password = str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['password']))));
    $password = md5($password);
    if ($username == "" || $password =="") 
    {
        echo '<script type="text/javascript">swal("Lỗi", " Không được để trống tên đăng nhập hoặc mật khẩu", "error");
        setTimeout(function(){ location.href = "login.php" },2000);</script>';
    }
    else
    {
        $sql = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."' AND `level` = 'admin'  ";
        $query = mysqli_query($ketnoi,$sql);
        $num_rows = mysqli_num_rows($query);

        if ($num_rows == 0) 
        {
            echo '<script type="text/javascript">swal("Lỗi", " Bạn Không Có Quyền Đăng Nhập !!!", "error");
            setTimeout(function(){ location.href = "" },2000);</script>';
            die();
        }
        else
        {
            
            $_SESSION['admin'] = $username;
            echo '<script type="text/javascript">swal("Thành Công","Đăng Nhập Thành Công","success");
                setTimeout(function(){ location.href = "index.php" },10);</script>';
        }
    }
}
?> 



 <div class="container">
    <div class="row justify-content-center">
            <div class="col-xl-5 col-sm-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <center>
                                <h4 class="mb-4">Đăng nhập tài khoản</h4>
                            </center>

      <form action="" method="post">
       <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tài khoản:</label>
          <input type="text" class="form-control" name="username" 
                                                placeholder="Nhập tài khoản" required="">
                                                </div>
 <div class="form-group">
                                            <label>Mật khẩu:</label>
          <input type="password" class="form-control" name="password"
                                                placeholder="Nhập mật khẩu" required="">
                                        </div>

        <div class="row">
          <!-- /.col -->
         <div class="col-12">
             <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1" checked="">
                                                    <label class="custom-control-label" for="customControlInline">Ghi
                                                        nhớ đăng nhập?</label>
                                                </div>
                                            </div>
                                            </div>
                    <div class="field">
            <input type="submit" name="submit" class="btn btn-success btn-block waves-effect waves-light" value="Đăng Nhập">
                                        </div>
          <!-- /.col -->
        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
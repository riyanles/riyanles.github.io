<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Page | Portflio</div>
      <div class="card-body">
        <form action="<?php echo base_url('index.php/login/do_login');?>" method="post">
          <div class="form-group">
            <div class="form-group">
              <input type="text" name="username"  class="form-control" placeholder="User Name" required="required" autofocus>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required="required">
              
            </div>
            <?php $error_msg = $this->session->flashdata('gagal'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" > <span aria-hidden="true">×</span></button>
                </div>
            <?php endif ?>
          </div>
          
         
          <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
          
        </form>
       
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2019 06:45:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function () {
            $('#email').click(function () {
               $('#sendotp').attr('disabled', 'disabled');
            });

            $('#sendotp').click(function () {
               $('#otp').removeAttr('disabled');
            });
         });
</script>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Forgot Password</b>
    <?php
    if($this->session->flashdata('errMsg')!="")
    {
      ?>
<!--   <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?php echo $this->session->flashdata("errMsg") ?>
                </div>   -->
      <?php
    }else if($this->session->flashdata('Msg')!=""){
      ?>
  <!-- <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?php echo $this->session->flashdata("Msg") ?>
                  
                </div> -->
      <?php
    }
 ?>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form data-parsley-validate="" method="post">
      <div class="form-group has-feedback">
        <input type="email" required="" data-parsley-massage="Input Can't be Empty" id="email" class="form-control" placeholder="Enter Email Address" name="facultyemail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
<!--       <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="New Password" name="newpassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype-Password" name="repassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
 -->
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="sendotp" class="btn btn-success btn-block btn-flat">Send Otp</button>
        </div>
          <!-- <a href="<?php echo site_url() ?>/login/registration">New Register????</a> -->
      </div>  
      
      <div class="form-group has-feedback">
        <input style="margin-top:15px;" id="otp" disabled="" type="password" class="form-control" placeholder="Enter Otp" name="otppassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit Otp</button>
        </div>
          <a href="<?php echo site_url() ?>/login/registration">New Register????</a>
      </div>
    </form>
    <!-- /.social-auth-links -->
 </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script type="text/javascript">
  function enabled() 
  {
    document.getElementById("otpenable").disabled = false;
  }

</script>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2019 06:45:08 GMT -->
</html>

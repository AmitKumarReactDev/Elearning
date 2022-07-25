<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2019 06:45:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login </title>
  <!-- Tell the browser to be responsive to screen width -->
<style>
    .facultyimage{
    display:block;
    width:50%;
    margin:10px auto;
    border-radius:50%;
  }
</style>
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
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Registration</b>
  </div>
     <div class="login-box-body">
  <!-- /.login-logo -->
    <form action="<?php echo site_url() ?>/login/registred" enctype="multipart/form-data"  method="post">
      <div class="custom-file">
        <img  src="<?php echo base_url()?>/img/img.png" height="150px" id="profile-img-tag" class="facultyimage" width="250"></img>
        <!-- <label for="facultyphoto"> Upload Your Photo</label> -->
        <!-- <input type="file" style="display:none;" class="custom-file-input" id="facultyphoto" placeholder="" name="facultyphoto"  onchange="profileimage(this);"> -->
        <input type="file" name="facultyphoto" id="profile-img">
        <!-- <label class="custom-file-label">Upload Your Photo</label> -->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="name" name="facultyname">
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="facultyemail">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="facultypassword">
      </div>
      <div class="form-group has-feedback">
        <input type="date" title="select date of birth" class="form-control" placeholder="Date of birth" name="facultydob">
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="qualification" name="facultyqualification">
      </div>
      <div class="form-group has-feedback">
        <input type="radio" value="Male" class="form-control"name="facultygender">  Male
        <input type="radio" value="female" class="form-control"name="facultygender">  Female
      </div>
      <div class="row">
        <!-- /.col -->  
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
        </div>
          <a href="<?php echo site_url() ?>/login/">Already created????</a>
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
<!-- <script type="text/javascript">
    function triggerclick() 
    {
      document.querySelector('#facultyphoto').click();
    }
    function profileimage(e) 
    {
      if(e.files[0])
      {
        var reader = new FileReader();
        reader.onload=function(e){
            document.querySelector('#facultyimage').setAttribute('src',e.target.result); 
        }
      }
      // reader.readAsDataUrl(e.files[0]);
    }
</script> -->
 
 <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2019 06:45:08 GMT -->
</html>

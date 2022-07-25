<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- parsley js -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/js/parsley.css"> -->
  <!-- <script src="<?php echo base_url() ?>/dist/js/parsley.js"></script> -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\dist/css/AdminLTE.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url() ?>\dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php //echo base_url() ?>\https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo $this->session->userdata('facultyinfo')['faculty_name'] ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $this->session->userdata('facultyinfo')['faculty_name'] ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo site_url() ?>/login/logout">Logout</a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
  <!--       <?php 
          // if($edit!="")
          // {
          //   $this->session->unset_userdata('facultyinfo');

            ?>

            <div class="pull-left image">
          <img src="<?php echo base_url()?>/FacultyPhoto/<?php echo $this->session->userdata('facultyinfo')['faculty_photo']?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('facultyinfo')['faculty_name'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
   -->        <!-- } -->
        <div class="pull-left image">
          <img src="<?php echo base_url()?>/FacultyPhoto/<?php echo $this->session->userdata('facultyinfo')['faculty_photo']?>" class="img-circle" alt="User Image">
        </div>

        <?php 
        ?>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('facultyinfo')['faculty_name'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="<?php echo site_url() ?>/Faculty_course">
            <i class="fa fa-edit"></i> <span>Faculty Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\Faculty_course\add"><i class="fa fa-circle-o"></i> Add Faculty Course</a></li>
            <li><a href="<?php echo site_url() ?>\Faculty_course\"><i class="fa fa-circle-o"></i> View Faculty Course</a></li>
            <li><a href="<?php echo site_url() ?>\coursematerial\add"><i class="fa fa-circle-o"></i> Add Faculty Course Material</a></li>
            <li><a href="<?php echo site_url() ?>\coursematerial\"><i class="fa fa-circle-o"></i> View Faculty Course Material</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/courseMaterial">
            <i class="fa fa-edit"></i><span>Stream Material</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\Material\add"><i class="fa fa-circle-o"></i> Add Material</a></li>
            <li><a href="<?php echo site_url() ?>\Material"><i class="fa fa-circle-o"></i> View Material</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/exam">
            <i class="fa fa-edit"></i> <span>Stream Question</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\faculty\examadd"><i class="fa fa-circle-o"></i> Add Question</a></li>
            <li><a href="<?php echo site_url() ?>\faculty\examlist\"><i class="fa fa-circle-o"></i> View Question</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/exam">
            <i class="fa fa-edit"></i> <span>Course Question</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\courseexam\examadd"><i class="fa fa-circle-o"></i> Add Question</a></li>
            <li><a href="<?php echo site_url() ?>\courseexam\examlist\"><i class="fa fa-circle-o"></i> View Question</a></li>
          </ul>
        </li>
        <li class="treeview-menuview">
          <a href="<?php echo site_url() ?>/faculty/changepassword/">
            <i class="fa fa-edit"></i> <span>change password</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><i class="fa fa-circle-o"></i> Change Password</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/Profile">
            <i class="fa fa-edit"></i> <span>View Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\profile"><i class="fa fa-circle-o"></i> View Profile</a></li>
          </ul>
        </li>
       
               
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

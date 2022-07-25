<!DOCTYPE html>
<html>
<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2019 06:44:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- parsley js -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/dist/js/parsley.css">
  <!-- <script src="<?php echo base_url() ?>/dist/js/parsley.js"></script> -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>\dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
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
      <span class="logo-mini"><b>A</b>dmin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
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
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>\dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="<?php echo site_url() ?>/state">
            <i class="fa fa-edit"></i> <span>State</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\state\add"><i class="fa fa-circle-o"></i>Add State</a></li>
            <li><a href="<?php echo site_url() ?>\state"><i class="fa fa-circle-o"></i> View State</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="<?php echo site_url() ?>/studentDetail">
            <i class="fa fa-edit"></i> <span>Student Detail</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>   
          </a>
          <ul class="treeview-menu">         
          <li><a href="<?php echo site_url() ?>\studentDetail"><i class="fa fa-circle-o"></i> view Student Detail</a></li>
            </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo site_url() ?>/studentDetail">
            <i class="fa fa-edit"></i> <span>Student cousrs list</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>   
          </a>
          <ul class="treeview-menu">         
          <li><a href="<?php echo site_url() ?>\studentDetail/courselist"><i class="fa fa-circle-o"></i>view course list</a></li>
            </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo site_url() ?>/subject">
            <i class="fa fa-edit"></i> <span>Subject</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>   
          </a>
          <ul class="treeview-menu">         
          <li><a href="<?php echo site_url() ?>\subject\add"><i class="fa fa-circle-o"></i> Add subject</a></li>
            <li><a href="<?php echo site_url() ?>\subject"><i class="fa fa-circle-o"></i> View subject</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/city">
            <i class="fa fa-edit"></i> <span>city</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\city\add"><i class="fa fa-circle-o"></i> Add City</a></li>
            <li><a href="<?php echo site_url() ?>\city"><i class="fa fa-circle-o"></i> View City</a></li>
          </ul> 
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/stream">
            <i class="fa fa-edit"></i> <span>Stream</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\stream\add"><i class="fa fa-circle-o"></i> Add Stream</a></li>
            <li><a href="<?php echo site_url() ?>\stream"><i class="fa fa-circle-o"></i> View Stream</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="<?php// echo site_url() ?>/area">
            <i class="fa fa-edit"></i> <span>Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php// echo site_url() ?>\area\add"><i class="fa fa-circle-o"></i> Add Area</a></li>
            <li><a href="<?php //echo site_url() ?>\area"><i class="fa fa-circle-o"></i> View Area</a></li>
          </ul>
        </li>
         -->
         <li class="treeview">
          <a href="<?php echo site_url() ?>/area">
            <i class="fa fa-edit"></i> <span>Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\area\add"><i class="fa fa-circle-o"></i> Add Area</a></li>
            <li><a href="<?php echo site_url() ?>\area"><i class="fa fa-circle-o"></i> View Area</a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="<?php echo site_url() ?>/faculty">
            <i class="fa fa-edit"></i> <span>Faculty</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?php echo site_url() ?>\faculty\add"><i class="fa fa-circle-o"></i> Add Faculty</a></li> -->
            <li><a href="<?php echo site_url() ?>\faculty"><i class="fa fa-circle-o"></i> View Faculty</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url() ?>/exam/list">
            <i class="fa fa-edit"></i> <span>Question</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?php echo site_url() ?>\faculty\add"><i class="fa fa-circle-o"></i> Add Faculty</a></li> -->
            <li><a href="<?php echo site_url() ?>\exam\index\"><i class="fa fa-circle-o"></i> View Stream Question</a></li>
            <li><a href="<?php echo site_url() ?>\courseexam\index\"><i class="fa fa-circle-o"></i> View Course Question</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo site_url() ?>/p_course">
            <i class="fa fa-edit"></i> <span>Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/p_course/add"><i class="fa fa-circle-o"></i> Add Course</a></li>
            <li><a href="<?php echo site_url() ?>/p_course"><i class="fa fa-circle-o"></i> View Course</a></li>
          </ul>
          </li>
       <li class="treeview">
          <a href="<?php echo site_url() ?>/semester">
            <i class="fa fa-edit"></i> <span>Semester</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\semester\add"><i class="fa fa-circle-o"></i> Add Semester</a></li>
            <li><a href="<?php echo site_url() ?>\semester"><i class="fa fa-circle-o"></i> View Semester</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="<?php echo site_url() ?>/faculty_course">
            <i class="fa fa-edit"></i> <span>Faculty Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\faculty_course"><i class="fa fa-circle-o"></i> View Faculty Course</a></li>
            <!-- <ul class="treeview-menu"> -->
            <li><a href="<?php echo site_url() ?>\coursematerial\"><i class="fa fa-circle-o"></i> View Faculty Course Material</a></li>
          </ul>
          </li>

         <li class="treeview">
          <a href="<?php echo site_url() ?>/material">
            <i class="fa fa-edit"></i><span>Material</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>\material\index"><i class="fa fa-circle-o"></i> View Material</a></li>
          </ul>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>
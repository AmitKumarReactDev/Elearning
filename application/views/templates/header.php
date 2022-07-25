<!DOCTYPE html>
<html lang="zxx">
<head>
<style>
    .facultyimage{
    display:block;
    width:50%;
    margin:10px auto;
    border-radius:50%;
  }
 
 ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}

</style>
  <meta charset="utf-8">
  <title>Welcome</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url() ?>/images/favicon.html" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>/images/favicon.html" type="image/x-icon">

</head>
<body>
<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="#"><strong>CALL</strong> +91 88662-94801</a>
          <ul class="list-inline d-inline">
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
           <?php 

           if($this->session->userdata('studentid')=='') 
           {
            ?>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <?php
           } else {
              ?>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php echo site_url() ?>/login/logout">Logout</a></li>

              <?php
           }
            ?>
           <?php 
          if($this->session->userdata('studentid') == '')
          {
            ?>
                <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
                 <?php
                }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="<?php echo site_url()?>/"><img src="<?php echo base_url() ?>/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url()?>/">Home</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="<?php echo site_url()?>/courses">COURSES</a>
            </li>

            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Exam
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <?php
                
                    foreach($subjectlist as $row)
                    {
                    if($this->session->userdata('studentid')=='') 
                    { ?>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal"><?php echo $row['subject_name']?></a>
                      <?php 
                    }
                   else{
                      ?>
                      <a class="dropdown-item" href="<?php echo site_url() ?>/exam/examdesc/<?php echo $row['subject_id']?>"><?php echo $row['subject_name']?> </a>
                   <?php 
                   } 
                  }
                  ?>               
              </div>
            </li>
        <!--     <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Course Exam
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <?php
                
                foreach($courselist as $row)
                {
                if($this->session->userdata('studentid')=='') 
                { ?>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal"><?php echo $row['pcourse_name']?></a>
                  <?php 
                }
               else{
                  ?>
                  <a class="dropdown-item" href="<?php echo site_url() ?>/courseexam/examdesc/<?php echo $row['pcourse_id']?>"><?php echo $row['pcourse_name']?> </a>
               <?php 
               } 
              }
                  ?>               
              </div>
            </li> -->
              <?php 
               if($this->session->userdata('studentid')!='') 
                { 
              ?>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown" href="<?php echo site_url() ?>/stream">
               Stream
              </a>
            </li>
             <?php 
               }
             ?>
          
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="<?php echo site_url() ?>/faculty/index" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Teachers Corner
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url() ?>/faculty/index">Teacher</a>
              </div>
            </li>
              <?php 
               if($this->session->userdata('studentid')!='') 
                { 
              ?>
         
              <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Student Corner
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url() ?>/courses/appliedcourse">My Coures List</a>
              </div>
            </li>
            <?php
            }
            ?>
            <!-- <li class="nav-item @@contact">
              <a class="nav-link" href="<?php echo site_url()?>/contact">CONTACT</a>
  
            </li> -->
  

<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form  action="<?php echo site_url() ?>/login/registration" method="post" class="row" data-parsley-validate="" enctype="multipart/form-data">
                       <!-- <div class="col-12 custom-file">
                          <input type="file" class="form-control mb-3" id="" name="studentphoto" placeholder="Upload Your Photo">
                        </div -->
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" required="" data-parsley-pattern="^[a-zA-Z ]+$" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" required="" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password"  class="form-control mb-3" required="" id="signupPassword" name="password" placeholder="Password">
                        </div>
                        <div class="col-3">
                            Gender <br><input style="height:20px; width:20px;" type="radio" required="" class="form-control" id="signupPassword" name="gender" placeholder="Password">Male
                            <br><input style="height:20px; width:20px;" type="radio" required="" class="form-control" id="signupPassword" name="gender" placeholder="Password">Female
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url() ?>/Login/auth" data-parsley-validate="" class="row">
                    <div class="col-12">
                        <input type="email" required="" class="form-control mb-3" id="loginPhone" name="email" placeholder="enter a email">
                    </div>
                    <div class="col-12">
                        <input type="password" required=""  class="form-control mb-3" id="loginPassword" name="password" placeholder="enter a password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
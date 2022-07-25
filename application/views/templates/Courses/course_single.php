<?php
// print_r($coursematerial);
// die();
?>
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
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
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
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="<?php echo site_url()?>/courses">Our Courses</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"><?php echo $courselist['pcourse_name'] ?></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <!-- course thumb -->
        <img src="<?php echo base_url() ?>/Admin/image/CoursePhoto/<?php echo $courselist['p_course_photo'] ?>" class="img-fluid w-80" height="350" width="350">
      </div>
    </div>
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2><?php echo $courselist['pcourse_name'] ?></h2>
      </div>
      <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
        <ul class="list-inline text-xl-center">
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-book text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">COURSES</h6>
                <p class="mb-0">06 Month</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DURATION</h6>
                <p class="mb-0">03 Hours</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">FEE</h6>
                <p class="mb-0">From: $699</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
        <!-- <a href="#" class="btn btn-primary">Apply now</a> -->
        <?php 
        $flag = 0;
                if ($this->session->userdata('studentid')!='')
                {
                  foreach ($studentapplycoureslist as $sapply) 
                  {
                    if($sapply['pcourse_id']==$courselist['pcourse_id'])
                    {
                      $flag=1;
                    }
                    ?>

                    <?php
                  }
                  if($flag==1)
                  {
                    ?>
                      <span class="btn btn-primary btn-sm">Appiled</span>

                    <?php
                  }
                  elseif($flag==0)
                  {
                    ?>
                    <a href="<?php echo site_url() ?>/courses/applied/<?php echo $courselist['pcourse_id'] ?>" class="btn btn-primary btn-sm">Apply now</a>

                    <?php
                  }

                  ?>
                <?php 
                }
                else
                {
                  ?>

                  <a href="" id="apply" data-toggle='modal' data-target="#loginModal" class="btn btn-primary btn-sm">Apply now</a>

                  <?php
                }
                ?>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-5">
        <h5 style="background-color:orange; color:white; font-size:24px; text-align:center; ">term & condition</h5>
        <h3>Fees and Funding</h3>
        <p>once fee made will not refundable</p>
      </div>
      <?php 
      if($this->session->userdata('studentid')!="")
      {
        if($flag==1)
        {
          ?>
      <div style="background-color:orange;" class="col-lg-12">
        <h5 style="color:white; text-align:center; font-size:36px;">Course Description</h5>
      </div>
      <div style="font-size:30px; border-color:orange;  text-align:center; padding:30px; margin:20px; ">
          <table style="border-color:orange; border-radius:20px;" align="center" border="5">
            <tr>
              <th style="color:orange;">SERIAL NO</th>
              <th style="color:orange;">TOPIC NAME</th>
              <th style="color:orange;">DESCRIPTION</th>
            </tr>
            <?php 
            $i=1;
            foreach ($coursedescription as $cdetail) 
            {
              ?>
                <tr>
                  <th><?php echo $i++; ?></th>
                  <th><?php echo $cdetail['faculty_ctitle'] ?></th>
                  <th><?php echo $cdetail['faculty_cdesc'] ?></th>
                </tr>
              <?php
            }
             ?>
        </table>
      </div>
      <div style="background-color:orange;" class="col-lg-12">
        <h5 style="color:white; text-align:center; font-size:36px;">Material Download</h5>
      </div>
   
   <div style="font-size:30px; border-color:orange;  text-align:center; padding:30px; margin:20px; ">
   
     <table style="border-color:orange; border-radius:20px;" align="center" border="5">
             <tr>
            <th style="color:orange;">Topic Name</th>          
            <th style="color:orange;">Topic Description</th>          
            <th style="color:orange;">Topic pdf</th>          
        </tr>
        <?php
        foreach ($coursematerial as $cmaterial) 
        {
          ?>
          <tr>
            <td><?php echo $cmaterial['material_title'] ?></td>
            <td><?php echo $cmaterial['material_desc'] ?></td>
            <td><a href="<?php echo  base_url() ?>Faculty/image/ParticularCourseMaterial/<?php echo $cmaterial['material_pdf'] ?>"><img height="150" width="200" src="<?php echo base_url() ?>/images/logo.png"></a></td>
          </tr>
          <?php
        }
        ?>
         </table>
      </div>
 <div style="background-color:orange;" class="col-lg-12">
        <h5 style="color:white; text-align:center; font-size:36px;">Take Exam</h5>
      </div>
      <a href="<?php echo site_url() ?>/courseexam/examdesc/<?php echo $courselist['pcourse_id'] ?>"><img height="150" width="150" alt="exam" title="click and give exam" style="border-radius:20px; border-color:orange; " src="<?php echo base_url() ?>/images/mcq.jpg"></a>
    <br>
    <br>
    <br>
    <br>
    <br>
          <?php
        }
      }

       ?>
      <hr>
      <!-- teacher -->
      <div style="background-color:orange;" class="col-lg-12">
        <h5 style="color:white; text-align:center; font-size:36px;"> Course Faculty</h5>
      </div>
   
      <div class="col-lg-12">
        </br>
            <img style="border-color:orange; border-radius:20px; " class="mr-4 img-fluid" src="<?php echo base_url()?>/Admin/image/CoursePhoto/<?php echo $courselist['p_course_photo'] ?>"  alt="Teacher" height="250" width="300">
            <div style="float:right;" class="media-body">
              <h4 class="mt-0">Faculty Name:<span style="color:orange;"><?php echo $courselist['faculty_name'] ?></span></h4></br>
              <h4 class="mt-0">Qualification:<span style="color:orange;"><?php echo $courselist['faculty_qualification'] ?></span></h4></br>
              <h4 class="mt-0">DOJ:<span style="color:orange;"><?php echo $courselist['faculty_doj'] ?></span></h4></br>
              <h4 class="mt-0">email:<span style="color:orange;"><?php echo $courselist['faculty_email'] ?></span></h4></br>
              
            </div>

        <div class="border-bottom border-primary mt-4"></div>
      </div>
    </div>
  </div>
</section>
<!-- /section -->

<!-- related course -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Related Course</h2>
      </div>
    </div>

         <div class="row justify-content-center">

    <?php 
      foreach ($list as $list) 
      {
        ?>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <a href="<?php echo site_url()?>/Courses/course_single/<?php echo $list['pcourse_id']?>"><img class="card-img-top rounded-0" src="<?php echo base_url() ?>/Admin/image/CoursePhoto/<?php echo $list['p_course_photo'] ?>" height="150" width="150" alt="course thumb"></a>
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $list['pcourse_entry_time'] ?></li>
              <li class="list-inline-item"><a class="text-color" href="#"><?php echo $list['faculty_ctitle'] ?></a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title"><?php echo $list['pcourse_name'] ?></h4>
            </a>
            <p class="card-text mb-4"><?php echo $list['faculty_cdesc'] ?></p>
            
                  <a href="<?php echo site_url()?>/Courses/course_single/<?php echo $list['pcourse_id'] ?>" class="btn btn-primary btn-sm">Apply now</a>
          </div>
        </div>
      </div>
    <?php 
      }
   ?>
    </div>
   </div>
</section>
<!-- /related course -->
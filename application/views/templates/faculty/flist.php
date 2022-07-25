<?php 
  // print_r($pcourselist);
  // die();
?>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="<?php echo site_url()?>/faculty/">Our teacher</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list -->
        <ul class="list-inline text-center filter-controls mb-5">
           <?php
            foreach ($facultylist as $row) 
            {
              ?>            
              <li class="list-inline-item m-3 text-uppercase"><a href="<?php echo site_url()?>/faculty/pcoursedetail/<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name']?></a></li>
          <?php 
            }
          ?>
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container">
      <!-- teacher -->
     <?php
      foreach ($pcourselist as $row) 
      {
        ?>
        <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 ">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" height="250" width="250" src="<?php echo base_url() ?>/Faculty/FacultyPhoto/<?php echo $row['faculty_photo'] ?>" alt="teacher">
          <div class="card-body">
            <a href="<?php echo site_url()?>/faculty/faculty_single/<?php echo $row['faculty_id'] ?>">
              <h4 class="card-title"><?php echo $row['faculty_name'] ?></h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
      
      <!-- teacher --
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php echo base_url() ?>/images/teachers/teacher-2.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Din Martin</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!- teacher -->
      <!-- <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php echo base_url() ?>/images/teachers/teacher-3.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Raka Jim</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div> -->
      <!-- teacher --
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 bio-science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php echo base_url() ?>/images/teachers/teacher-1.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Devid Luis</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      teacher
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php echo base_url() ?>/images/teachers/teacher-2.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Zim Cook</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!- teacher -->
</section>
<!-- /teachers -->

<!-- footer -->
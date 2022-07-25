<?php 
 ?>
<!-- /header -->
<!-- Modal -->

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="<?php echo site_url()?>/courses">Our Courses</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  </div>
</div>
<!-- /course list -->
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
 
<?php 
  foreach ($list as $row) {
    
    ?>
  <div class="col-lg-2 col-sm-2 mb-2">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="" height="150" src="<?php echo base_url() ?>/Admin/image/CoursePhoto/<?php echo $row['p_course_photo'] ?>" alt="course thumb" height="150" width="200">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $row['pcourse_entry_time'] ?></li>
        </ul>
        <a href="<?php echo site_url()?>/Courses/course_single/<?php echo $row['pcourse_id'] ?>">
          <h4 class="card-title"><?php echo $row['pcourse_name'] ?></h4>
          <h4 class="card-title"><?php echo $row['faculty_ctitle'] ?></h4>
        </a>
        <p class="card-text mb-4"> <?php echo $row['faculty_cdesc'] ?></p>
        <?php 
              // if ($this->session->userdata('studentid')=='')
              // {
                ?>

        <!--           <button type="submit" class="btn btn-primary btn-sm" name="capply">Apply now</button>        -->
                    <!-- <a href="<?php echo site_url()?>/Courses/course_single/<?php echo $row['pcourse_id'] ?>" class="btn btn-primary btn-sm">Apply now</a>  -->
              <?php
              // }
              // else
              // {
              ?>
                    <a href="<?php echo site_url()?>/Courses/course_single/<?php echo $row['pcourse_id'] ?>" class="btn btn-primary btn-sm">View Detail</a>
      <?php
      // }
      ?>
      </div>
    </div>
  </div>

    <?php
  }
 ?>
  <!-- course item -->
  
</div>
<!-- /course list -->
  </div>
</section>
<!-- /courses -->
<!-- footer -->
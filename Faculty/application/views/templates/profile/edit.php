<?php 
// print_r($list);
// die();
?>
<style type="text/css">
  #displayprofile{
    display:block;
    width:70%;
    margin:10px auto;
    border-radius:60%;
  }
</style>
<script type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href=""></li>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
     </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/profile/edit/<?php echo $list['faculty_id']?>">
                <div class="form-group">
                 <label> <img src="<?php echo base_url()?>/FacultyPhoto/<?php echo $list['faculty_photo'] ?>" id="displayprofile" height="200px" width="100px" alt="image not found"></label>
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1"> Faculty Name</label>
                  <input readonly="" type="text"  value="<?php echo $list['faculty_name'] ?>"  class="form-control" name="facultyname" data-parsley-pattern="^[a-zA-Z ]+$" required="" id="exampleInputEmail1"  placeholder="Enter Faculty Name">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1"> Faculty gender</label>
                <div class="form-group has-feedback">
                <?php 
                  if ($list['faculty_gender']=="Male")
                  { ?>
               
                    <input type="radio" readonly="" value="Male" checked=""  name="facultygender"> Male
                  <!-- <input readonly="" hidden="" type="radio" value="female" name="facultygender" > <-- Female-> -->
              <?php 
                  }
                  elseif ($list['faculty_gender']=="Female")
                  { ?>
                    <!-- <div class="form-group has-feedback"> -->
                      <!-- <input type="radio" hidden="" readonly="" value="Male" name="facultygender"><--  Male-> -->
                    <input checked="" type="radio" readonly="" value="Female" name="facultygender">Female
                <?php
                  }
                  else{
                  ?>
                 <div class="form-group has-feedback">
                  <input type="radio" readonly="" value="Male" name="facultygender"> Male
                  <input type="radio" value="Female" readonly="" name="facultygender">Female
                  <?php 
                  }
                  ?>
                 </div>
                  <div class="form-group">
                  <label form="exampleInputEmail1">Faculty Qualification</label>
                  <input type="text" readonly="" value="<?php echo $list['faculty_qualification'] ?>" class="form-control" name="facultyqualification" id="exampleInputEmail1" placeholder="Enter Faculty Qualification">
                </div>
                  <div class="form-group">
                  <label form="exampleInputEmail1"> Faculty Birth Date</label>
                  <input type="date" readonly="" value="<?php echo $list
['faculty_dob'] ?>" class="form-control" name="facultydob" id="exampleInputEmail1">
                </div>
                  <div class="form-group">
                  <label form="exampleInputEmail1"> Faculty Email</label>
                  <input type="email" readonly="" value="<?php echo $list
['faculty_email'] ?>" class="form-control" name="facultyemail" id="exampleInputEmail1" placeholder="Enter Faculty Email Address">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="pupdate" type="submit" class="btn btn-primary">Edit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
<?php
  // print_r($courselist);
  // die();
?> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/course">View Course</a></li>
        <li class="active">Add Course</li>
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
              <h3 class="box-title">Course Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form data-parsley-validate="" role="form" method="post" action="<?php echo site_url() ?>/p_course/addrow">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <input type="text" required="" data-parsley-pattern="^[a-zA-Z ]+$" class="form-control" name="p_coursename" id="exampleInputEmail1" placeholder="Enter course name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Course Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/faculty_course">View Faculty Course</a></li>
        <li class="active">Add Faculty Course</li>
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
              <h3 class="box-title">Faculty Course Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/faculty_course/addrow">
              <div class="box-body">
                  <div class="form-group">
                      
                  </div>           
                   <div class="form-group">
                  <label>Select Course</label>
                  <select name="coursename" required="" class="form-control">
                    <option>--Select Course--</option>
                  <?php 
                  foreach ($courselist as $row) 
                  {
                    ?>
                      <option value="<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name'] ?></option>
                    <?php
                  }
                   ?>
                  </select>
                </div>
             <div class="form-group">
                  <label for="exampleInputEmail1">Enter a title name</label>
                  <input type="text" class="form-control" name="fctitlename" data-parsley-pattern="^[a-zA-Z ]+$" required=""  id="exampleInputEmail1" placeholder="Enter title name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Upload Course Photo</label>
                  <input type="file" class="form-control" name="faculty_cphoto" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title Description</label>
                  <textarea class="form-control"  required="" placeholder="enter title description....." name="fcdescname"></textarea>
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
 
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
            <form role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/faculty_course/update/<?php echo $fcourselist['faculty_cid'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Select Course</label>
                  <select name="pcoursename" required="" class="form-control">
                  <option>--Select Course--</option>
                    <?php 
                  foreach ($pcourselist as $row) 
                  {
                    if($row['pcourse_id']==$fcourselist['pcourse_id'])
                    {
                      ?>
                      <option  value="<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name'] ?></option>

                    <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name'] ?></option>  
                      <?php
                     }
                   }
                   ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Faculty Course Title</label>
                  <input type="text" class="form-control" name="fctitlename" data-parsley-pattern="^[a-zA-Z ]+$" required="" id="exampleInputEmail1" value="<?php echo $fcourselist['faculty_ctitle'] ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Faculty Course Description</label>
                  <input type="text" class="form-control" name="fcdescname"  required="" id="exampleInputEmail1" value="<?php echo $fcourselist['faculty_cdesc'] ?>" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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
 
<?php 
// print_r($subjectlist);
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        subject Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/subject">view subject</a></li>
        <li class="active">add subject</li>
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
              <h3 class="box-title">subject Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/subject/update/<?php echo $subjectlist['subject_id'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Select Semester</label>
                  <select name="semestername" class="form-control">
                  <?php 
                  foreach ($semesterlist as $row) 
                  {
                    if($row['semester_id']==$subjectlist['semester_id'])
                    {
                      ?>
                      <option selected="" value="<?php echo $row['semester_id'] ?>"><?php echo $row['semester_name'] ?></option>

                      <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['semester_id'] ?>"><?php echo $row['semester_name'] ?></option>

                      <?php
                    }
                  }
                   ?>
                  </select>
                  <label>Select Stream</label>
                  <select name="streamname" class="form-control">
                  <?php 
                  foreach ($streamlist as $row) 
                  {
                    if($row['stream_id']==$subjectlist['stream_id'])
                    {
                      ?>
                      <option selected="" value="<?php echo $row['stream_id'] ?>"><?php echo $row['stream_name'] ?></option>

                      <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['stream_id'] ?>"><?php echo $row['stream_name'] ?></option>

                      <?php
                    }
                  }
                   ?>
                  </select>            
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">subject Name</label>
                  <input type="text" class="form-control" name="subjectname" required="" data-parsley-pattern="^[a-zA-Z ]+$" id="exampleInputEmail1" value="<?php echo $subjectlist['subject_name'] ?>" placeholder="Enter subject name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">update</button>
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
 
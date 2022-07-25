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
            <form data-parsley-validate="" role="form" method="post" action="<?php echo site_url() ?>/subject/addrow">
              <div class="box-body">
                <div class="form-group">
                  <label>Select stream</label>
                  <select name="streamname" class="form-control">
                  <?php 
                  foreach ($streamlist as $row) 
                  {
                    ?>
                    <option value="<?php echo $row['stream_id'] ?>"><?php echo $row['stream_name'] ?></option>
                    <?php
                  }
                   ?>
                </select>

                  </div>
                <div class="form-group">
                  <label>Select semester</label>
                  <select name="semestername" class="form-control">
                  <?php 
                  foreach ($semesterlist as $row) 
                  {
                    ?>
                    <option value="<?php echo $row['semester_id'] ?>"><?php echo $row['semester_name'] ?></option>
                    <?php
                  }
                   ?>
                </select>

                  </div>
                <div class="form-group">
                
                     <label for="exampleInputEmail1">subject Name</label>
                  <input type="text" required="" data-parsley-pattern="^[a-zA-Z ]+$" class="form-control" name="subjectname" id="exampleInputEmail1" placeholder="Enter subject name">
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
 
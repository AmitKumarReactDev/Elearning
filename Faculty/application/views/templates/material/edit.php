 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Material Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/material">View Material</a></li>
        <li class="active">Add Material</li>
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
              <h3 class="box-title">Material Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url() ?>/material/update/<?php echo $materiallist['material_id'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Select Stream</label>
                  <select name="streamname" class="form-control">
                  <?php 
                  foreach ($streamlist as $row) 
                  {
                    if($row['stream_id']==$materiallist['stream_id'])
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
                  <label>Select Semester</label>
                  <select name="semestername" class="form-control">
                  <?php 
                  foreach ($semesterlist as $row) 
                  {
                    if($row['semester_id']==$materiallist['semester_id'])
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
                </div>
                <div class="form-group">
                  <label>Select Subject</label>
                  <select name="subjectname" class="form-control">
                  <?php 
                  foreach ($subjectlist as $row) 
                  {
                    if($row['subject_id']==$materiallist['subject_id'])
                    {
                      ?>
                      <option selected="" value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>

                    <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>  
                      <?php
                     }
                   }
                   ?>
                  </select>
                </div>
                                
                <div class="form-group">
                  <label for="exampleInputEmail1">Material File</label>
                  <input type="file" class="form-control" name="materialfilename" id="exampleInputEmail1" value="<?php echo $materiallist['material_pdf'] ?>" >
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
 
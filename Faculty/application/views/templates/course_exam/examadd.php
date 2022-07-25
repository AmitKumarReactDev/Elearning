<?php 
  // print_r($examlist);
  // die();
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Exam Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/courseexam/examlist">View Questions</a></li>
        <li class="active">Add Question</li>
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
              <h3 class="box-title">Question Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" parsley-data-validate="" action="<?php echo site_url() ?>/courseexam/examaddrow/">
              <div class="box-body">
                <div class="form-group">
                  <label>Select Course</label>    
                  <select name="pcoursename" required="" class="form-control">
                    <option>--Select Course--</option>
                <?php 
                  foreach ($examlist as $row) 
                  {            
                      ?>
                       <option value="<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name'] ?>
                       </option>
                    <?php
                      }
                    ?>
                  </select>
                </div>
              </div>
            <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Question</label>
                  <input type="text" required="" value="" class="form-control" name="questionname" id="exampleInputEmail1" placeholder="Enter question">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Option A</label>
                  <input type="text" value="" required="" class="form-control" name="questionmcq1" id="exampleInputEmail1" placeholder="Enter Option A">
                </div>
              </div>
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Option B</label>
                  <input type="text" value="" required="" class="form-control" name="questionmcq2" id="exampleInputEmail1" placeholder="Enter Option B">
                </div>
              </div>
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Option C</label>
                  <input type="text" value="" required="" class="form-control" name="questionmcq3" id="exampleInputEmail1" placeholder="Enter Option C">
                </div>
              </div>
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Option D</label>
                  <input type="text" value="" required="" class="form-control" name="questionmcq4" id="exampleInputEmail1" placeholder="Enter Option D">
                </div>
              </div>
            <div class="box-body">
                <div class="form-group">
                  <label>Select Answer</label>
                  <select name="answername" required="" class="form-control">
                    <option>--Select Option--</option>
                      <option value="a">Option A</option>
                      <option value="b">Option B</option>
                      <option value="c">Option C</option>
                      <option value="d">Option D</option>
                  </select>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Question</button>
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
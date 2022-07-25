 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        student_class Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/student_class">view student_class</a></li>
        <li class="active">add student_class</li>
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
              <h3 class="box-title">student_class Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/student_class/update/<?php echo $row['student_class_id']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">student_class Name</label>
                  <input type="text" value="<?php echo $row['student_class_name'] ?>" class="form-control" name="student_classname" required="" data-parsley-pattern="^[a-zA-Z ]+$" id="exampleInputEmail1" placeholder="Enter student_class name">
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
 
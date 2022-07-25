 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/faculty">View Faculty</a></li>
        <li class="active">Add Faculty</li>
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
              <h3 class="box-title">Faculty Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url() ?>/faculty/update/<?php echo $row['faculty_id']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Faculty Name</label>
                  <input type="text" value="<?php echo $row['faculty_name'] ?>" class="form-control" name="facultyname" id="exampleInputEmail1" placeholder="Enter faculty name">
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
 
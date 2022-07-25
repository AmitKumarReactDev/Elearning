 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stream Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/stream">View Stream</a></li>
        <li class="active">Add Stream</li>
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
              <h3 class="box-title">Stream Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url() ?>/stream/update/<?php echo $row['stream_id']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Stream Name</label>
                  <input type="text" value="<?php echo $row['stream_name'] ?>" class="form-control" name="streamname" id="exampleInputEmail1" placeholder="Enter stream name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stream Description</label>
                  <textarea name="streamDescription" class="form-control" placeholder="Enter stream description...">
                    <?php echo $row['stream_description'] ?>
                  </textarea>
                </div>
               
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
 
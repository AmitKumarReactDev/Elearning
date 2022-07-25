 <?php 
 // print_r($list);
 // die();
  ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        city Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/city">view city</a></li>
        <li class="active">add city</li>
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
              <h3 class="box-title">city Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" data-parsley-validate="" method="post" action="<?php echo site_url() ?>/city/addrow">
              <div class="box-body">
                <div class="form-group">
                  <label>Select State</label>
                  <select name="statename" id="state" class="form-control">
                  <option>--Select State--</option>
                  <?php 
                  foreach ($list as $row) 
                  {
                    ?>
                      <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state_name'] ?></option>
                    <?php
                  }
                   ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">city Name</label>
                  <input  type="text" data-parsley-pattern="^[a-zA-Z ]+$" required="" class="form-control" name="cityname" id="exampleInputEmail1" id="city" placeholder="Enter city name">
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
 
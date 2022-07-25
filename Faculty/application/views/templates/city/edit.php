 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        City Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/city">View City</a></li>
        <li class="active">Add City</li>
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
              <h3 class="box-title">City Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url() ?>/city/update/<?php echo $citylist['city_id'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Select State</label>
                  <select name="statename" class="form-control">
                  <?php 
                  foreach ($statelist as $row) 
                  {
                    if($row['state_id']==$citylist['state_id'])
                    {
                      ?>
                      <option selected="" value="<?php echo $row['state_id'] ?>"><?php echo $row['state_name'] ?></option>

                      <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state_name'] ?></option>

                      <?php
                    }
                  }
                   ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">City Name</label>
                  <input type="text" class="form-control" name="cityname" id="exampleInputEmail1" value="<?php echo $citylist['city_name'] ?>" placeholder="Enter city name">
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
 
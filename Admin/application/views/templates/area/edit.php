 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        area Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/area">view area</a></li>
        <li class="active">add area</li>
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
              <h3 class="box-title">area Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" data-parsley-validate="" method="post" action="<?php echo site_url() ?>/area/update/<?php echo $arealist['area_id'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Select city</label>
                  <select name="cityname" class="form-control">
                  <?php 
                  foreach ($citylist as $row) 
                  {
                    if($row['city_id']==$arealist['city_id'])
                    {
                      ?>
                      <option selected="" value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name'] ?></option>

                      <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name'] ?></option>

                      <?php
                    }
                  }
                   ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">area Name</label>
                  <input type="text" class="form-control" name="areaname" data-parsley-pattern="^[a-zA-Z ]+$" required="" id="exampleInputEmail1" value="<?php echo $arealist['area_name'] ?>">
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
 
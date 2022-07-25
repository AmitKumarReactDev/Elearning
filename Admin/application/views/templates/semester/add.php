 <?php 
 // print_r($list);
 // die(); 
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        semester Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/semester">view semester</a></li>
        <li class="active">add semester</li>
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
              <h3 class="box-title">semester Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form data-parsley-validate="" role="form" method="post" action="<?php echo site_url() ?>/semester/addrow">
              <div class="box-body">
                <div class="form-group">
             <div class="form-group">
                  <label>Select Stream</label>
                  <select name="streamname" class="form-control">
                  <?php   
                foreach ($list as $row) 
                  {
                    ?>
                    <option value="<?php echo $row['stream_id'] ?>"><?php echo $row['stream_name'] ?></option>
                    <?php
                  }
                   ?>
                </select>

                  </div>
                
                     <label for="exampleInputEmail1">semester Name</label>
                  <input type="text" required="" data-parsley-pattern="^[a-zA-Z ]+$" class="form-control" name="semestername" id="exampleInputEmail1" placeholder="Enter semester name">
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
 
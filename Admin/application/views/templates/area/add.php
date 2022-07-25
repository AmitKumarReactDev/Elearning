 <?php 
  ?>
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
            <form role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/area/addrow">
              <div class="box-body">
                <div class="form-group">
                  <label>Select state</label>
                  <select name="cityname" onchange="fillcity(this.value)" required="" class="form-control">
                  <option value="">--select state--</option>
                  <?php 
                  foreach ($statelist as $row) 
                  {
                    ?>
                    <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state_name'] ?></option>
                    <?php
                  }
                   ?>
                </select>

                  </div>
                <div class="form-group">
                  <label>Select City</label>
                  <select name="cityname" id="citybox" required="" class="form-control">
                    <option value="">--select city--</option>
                </select>

                  </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Area Name</label>
                  <input  type="text"  class="form-control" required="" data-parsley-pattern="^[a-zA-Z ]+$" name="areaname" id="exampleInputEmail1" placeholder="Enter area name">
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
<script src="<?php echo base_url() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    
    function fillcity(id) {
      // alert();
      $.ajax({
        url:"<?php echo site_url(); ?>/Area/fillcity/"+id,
        method:"GET",
        success:function(res,status){
          $("#citybox").html(res);
        },
            error:function(error){
              alert(error.statusText);
            }
      });
    }
  </script>
  
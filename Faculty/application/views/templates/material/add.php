<?php
// print_r($data['materiallist']);
// die();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Material Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/material/add">View Material</a></li>
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
            <form enctype="multipart/form-data" data-parsley-validate="" role="form" method="post" action="<?php echo site_url() ?>/material/addrow" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Select Stream</label>
                  <select name="streamname" onchange="fillstream(this.value)" class="form-control">
                    <option value="">--select stream--</option>
                  <?php 
                  foreach ($streamlist as $row) 
                  {
                    ?>
                    <option value="<?php echo $row['stream_id'] ?>"><?php echo $row['stream_name'] ?></option>
                    <?php
                  }
                  ?>
                </select>
                  </div>
                <div class="form-group">
                  <label>Select Semester</label>
                  <select name="semestername" onchange="fillsem(this.value)"  id="sembox" class="form-control">
                  <option value="">--select semester--</option>
                </select>
                
                  </div>
                <div class="form-group">
                  <label>Select Subject</label>
                  <select name="subjectname" id="subjectbox" class="form-control">
                  <option value="">--select subject--</option>
                </select>

                  </div>
                
                <div class="form-group">
                
                     <label form="exampleInputEmail1">Material File(pdf)</label>
                  <input type="file" class="form-control" name="materialfilename" id="exampleInputEmail1" placeholder="upload pdf file">
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
    
    function fillstream(id) {
      $.ajax({
        url:"<?php echo site_url(); ?>/material/fillsem/"+id,
        method:"GET",
        success:function(res,status){
          $("#sembox").html(res);
        },
            error:function(error){
              alert(error.statusText);
            }
      });
    }
    function fillsem(id) {
      $.ajax({
        url:"<?php echo site_url(); ?>/material/fillsubject/"+id,
        method:"GET",
        success:function(res,status){
          $("#subjectbox").html(res);
        },
            error:function(error){
              alert(error.statusText);
            }
      });
    }
  </script>
  
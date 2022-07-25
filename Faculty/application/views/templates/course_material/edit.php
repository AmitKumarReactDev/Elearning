<?php
  // print_r($courselist);
  
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
        <li><a href="<?php echo site_url() ?>/coursematerial">View Material</a></li>
        <li class="active">Edit Material</li>
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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url() ?>/coursematerial/update/<?php echo $materiallist['material_cid'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Select Course</label>
                  <select name="pcoursename" class="form-control">
                  <?php 
                  foreach ($courselist as $row) 
                  {
                    if($row['pcourse_id']==$materiallist['pcourse_id'])
                    {
                      ?>
                      <option selected="" value="<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name'] ?></option>

                    <?php
                    }
                    else
                    {
                      ?>
                      <option value="<?php echo $row['pcourse_id'] ?>"><?php echo $row['pcourse_name'] ?></option>  
                      <?php
                     }
                   }
                   ?>
                  </select>
                </div>
                                
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Material File</label>
                  <input type="file" class="form-control" name="materialfilename" id="exampleInputEmail1" value="<?php echo $materiallist['material_pdf'] ?>" >
                </div> -->
              <!-- </div> -->
               <div class="form-group">
                 <label form="exampleInputEmail1">Material Title</label>
                  <input type="text" class="form-control" name="materialtitle" id="exampleInputEmail1" placeholder="Enter Title" value="<?php echo $materiallist['material_title']?>">
                </div>
               <div class="form-group">
                 <label form="exampleInputEmail1">Material Description</label>
                  <input type="text" value="<?php echo $materiallist['material_desc']?>" class="form-control" name="materialdesc" id="exampleInputEmail1" placeholder="Enter Description">
                </div>
                <div class="form-group">
                 <label form="exampleInputEmail1">Material File(pdf)</label>
                  <input type="file" class="form-control" name="materialfilename" value="<?php echo $materiallist['material_pdf']?>" id="exampleInputEmail1" placeholder="upload pdf file">
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
 
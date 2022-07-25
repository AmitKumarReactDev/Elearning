<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Material Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/material/add">Add Material</a></li>
        <li class="active">View Material</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Material Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Edit</th>
                  <th>Stream</th>
                  <th>Semester</th>
                  <th>Subject</th>
                  <th>File Uploaded</th>
                  <!-- <th>File Download</th> -->
                  
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>
                    <?php
                      if ($row['material_status']=="Active") 
                      {
                        ?>
                          <td><i style="color:green;" class="glyphicon glyphicon-ok"></i></a></td>    
                      <?php 
                      } 
                      else
                      {
                      ?>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/material/edit/<?php echo $row['material_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <?php
                      }
                    ?>
                    <td><?php echo $row['stream_name'] ?></td>
                    <td><?php echo $row['semester_name'] ?></td>
                    <td><?php echo $row['subject_name'] ?></td>
                    <!-- <td><?php echo $row['material_pdf'] ?></td> -->
                    <td><a href="<?php echo base_url() ?>/image/CourseMaterial/<?php echo $row['material_pdf'] ?>" download ><?php echo $row['material_pdf'] ?></td>
                  </tr>

                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Edit</th>
                  <th>Stream</th>
                  <th>Semester</th>
                  <th>Subject</th>
                  <th>File Uploaded</th>
                  <!-- <th>File Download</th> -->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
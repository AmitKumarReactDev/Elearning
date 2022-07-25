 <?php 
  // print_r($datalist);
   ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Semester Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/semester/add">Add Semester</a></li>
        <li class="active">View Semester</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semester Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Stream Name</th>
                  <th>Semester Name</th>
                  <th>Semester Status</th>
                  <th>Semester Entry Date</th>
                  <th>Semester Update Date</th>
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>

                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/semester/delete/<?php echo $row['semester_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/semester/edit/<?php echo $row['semester_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['stream_name'] ?></td>
                    <td><?php echo $row['semester_name'] ?></td>
                    <?php
                      if ($row['semester_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/semester/activedeactive/<?php echo $row['semester_id'] ?>" class="btn btn-block btn-success"><?php echo $row['semester_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/semester/activedeactive/<?php echo $row['semester_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['semester_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                        <td><?php echo $row['semester_entry_time'] ?></td>
                        <td><?php echo $row['semester_update_time'] ?></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Semester Name</th>
                  <th>Semester Status</th>
                  <th>Semester Entry Date</th>
                  <th>Semester Update Date</th>
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
 
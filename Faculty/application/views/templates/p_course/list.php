 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/p_course/add">Add Course</a></li>
        <li class="active">View Course</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Course Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Course Photo</th>
                  <th>Course Name</th>
                  <th>Course Status</th>
                  <th>Course Entry Date</th>
                  <th>Course Update Date</th>
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>

                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/p_course/delete/<?php echo $row['pcourse_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/p_course/edit/<?php echo $row['pcourse_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['pcourse_name'] ?></td>
                    <?php
                      if ($row['pcourse_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/p_course/activedeactive/<?php echo $row['pcourse_id'] ?>" class="btn btn-block btn-success"><?php echo $row['pcourse_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/p_course/activedeactive/<?php echo $row['pcourse_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['pcourse_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                        <td><?php echo $row['pcourse_entry_time'] ?></td>
                        <td><?php echo $row['pcourse_update_time'] ?></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Course Name</th>
                  <th>Course Status</th>
                  <th>Course Entry Date</th>
                  <th>Course Update Date</th>
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
 
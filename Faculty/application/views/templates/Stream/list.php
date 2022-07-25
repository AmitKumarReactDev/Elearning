 <?php 
  // print_r($datalist);
   ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stream Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/stream/add">Add Stream</a></li>
        <li class="active">View Stream</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Stream Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Stream Name</th>
                  <th>Stream Description</th>
                  <th>Stream Status</th>
                  <th>Stream Entry Date</th>
                  <th>Stream Update Date</th>
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>

                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/stream/delete/<?php echo $row['stream_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/stream/edit/<?php echo $row['stream_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['stream_name'] ?></td>
                    <td><?php echo $row['stream_description'] ?></td>
                    <?php
                      if ($row['stream_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/stream/activedeactive/<?php echo $row['stream_id'] ?>" class="btn btn-block btn-success"><?php echo $row['stream_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/stream/activedeactive/<?php echo $row['stream_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['stream_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                        <td><?php echo $row['stream_entry_time'] ?></td>
                        <td><?php echo $row['stream_update_time'] ?></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Stream Name</th>
                  <th>Stream Description</th>
                  <th>Stream Status</th>
                  <th>Stream Entry Date</th>
                  <th>Stream Update Date</th>
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
 
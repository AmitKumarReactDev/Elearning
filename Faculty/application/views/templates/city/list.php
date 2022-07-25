 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        City Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/city/add">Add City</a></li>
        <li class="active">View City</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">City Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>City Name</th>
                  <th>State Name</th>
                  <th>City Status</th>
                  <th>City Entry Date</th>
                  <th>City Update Date</th>
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>

                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/city/delete/<?php echo $row['city_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/city/edit/<?php echo $row['city_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['city_name'] ?></td>
                    <td><?php echo $row['state_name'] ?></td>
                    <?php
                      if ($row['city_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/city/activedeactive/<?php echo $row['city_id'] ?>" class="btn btn-block btn-success"><?php echo $row['city_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/city/activedeactive/<?php echo $row['city_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['city_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                        <td><?php echo $row['city_entry_time'] ?></td>
                        <td><?php echo $row['city_update_time'] ?></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>City Name</th>
                  <th>State Name</th>
                  <th>City Status</th>
                  <th>City Entry Date</th>
                  <th>City Update Date</th>
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
 
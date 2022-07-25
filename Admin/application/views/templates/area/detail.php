 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        area Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">View area</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">area Detail</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>area Name</th>
                  <td><?php echo $list['area_name'] ?></td>
                </tr>
                <tr>
                  <th>City Name</th>
                  <td><?php echo $list['city_name'] ?></td>
                </tr>
                <tr>
                  <th>area Entry Date</th>
                  <td><?php echo $list['area_entry_time'] ?></td>
                </tr>
                <tr>
                  <th>area Update Time</th>
                  <td><?php echo $list['area_update_time'] ?></td>
                </tr>
                <tr>
                  <th>area Status</th>
                   <?php
                      if($list['area_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/area/activedeactive/<?php echo $list['area_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['area_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/area/activedeactive/<?php echo $list['area_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['area_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                    </tr>
                    <tr>
                       <td><a href="<?php echo site_url()?>/area">go to back</a></td>
                </tr>
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
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        State Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
       <!--  <li><a href="<?php //echo site_url() ?>/state_course/add">add state_course</a></li>
        --> <li class="active">View state </li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">State Detail</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>State Name</th>
                  <td><?php echo $list['state_name'] ?></td>
                </tr>
                <tr>
                  <th>State Entry Time</th>
                  <td><?php echo $list['state_entry_time'] ?></td>
                </tr>
                <tr>
                  <th>State Update Time</th>
                  <td><?php echo $list['state_update_time'] ?></td>
                </tr>
                <tr>
                  <th>state Status</th>
                   <?php
                      if($list['state_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/state_course/activedeactive/<?php echo $list['state_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['state_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/state/activedeactive/<?php echo $list['state_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['state_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                </tr>
              </table>
               <tr>
                  <a href="<?php echo site_url()?>/state">go to back</a>
                </tr>
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
 
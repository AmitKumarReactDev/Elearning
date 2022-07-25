 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subject
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">View Subject</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subject</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>Subject Name</th>
                  <td><?php echo $list['subject_name'] ?></td>
                </tr>
                <tr>
                  <th>Semester Name</th>
                  <td><?php echo $list['semester_name'] ?></td>
                </tr>
                <tr>
                  <th>Stream Name</th>
                  <td><?php echo $list['stream_name'] ?></td>
                </tr>
                <tr>
                  <th>Subject Entry Date</th>
                      <td><?php echo $list['subject_entry_time']?></td>
                </tr>
                <tr>
                      <th>Subject Update Date</th>
                      <td><?php echo $list['subject_update_time']?></td>
                   </tr>
                   <tr>   
                  <th>Subject Status</th>
                   <?php
                      if($list['subject_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/subject/activedeactive/<?php echo $list['subject_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['subject_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/subject/activedeactive/<?php echo $list['subject_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['subject_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                </tr>
                <tr>
                    <td><a href="<?php echo site_url()?>/subject">go to back</a></td>
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
 
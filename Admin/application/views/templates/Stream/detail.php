 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stream
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
       <!--  <li><a href="<?php //echo site_url() ?>/stream_course/add">add stream_course</a></li>
        --> <li class="active">View stream </li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Stream</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>Student Name</th>
                  <td><?php echo $list['stream_name'] ?> </td>
                </tr>
                <tr>
                  <th>stream Entry Time</th>
                  <td><?php echo $list['stream_entry_time'] ?></td>
                </tr>
                <tr>
                  <th>Stream Update Time</th>
                  <td><?php echo $list['stream_update_time'] ?></td>
                </tr>
                <tr>
                  <th>Stream Status</th>
                   <td>
                   <?php
                      if($list['stream_status']=="Active")
                      { ?>
                    
                      <a href="<?php echo site_url() ?>/stream/activedeactive/<?php echo $list['stream_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['stream_status'] ?>
                      
                    </a>
                    <?php
                      }
                      else
                      {
                        ?>
                      <a href="<?php echo site_url() ?>/stream/activedeactive/<?php echo $list['stream_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['stream_status'] ?></a>
                       <?php
                      }
                      ?>
                    </td>                      
              </tr>
              </table>
               <tr>
                  <a href="<?php echo site_url()?>/stream">go to back</a>
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
      
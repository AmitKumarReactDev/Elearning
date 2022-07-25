 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
       <!--  <li><a href="<?php //echo site_url() ?>/Course_course/add">add Course_course</a></li>
        --> <li class="active">View Course </li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Course Detail</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>Course Photo</th>
                  <td><img height="150px" width="150px" src="<?php echo base_url()?>/image/CoursePhoto/<?php echo $list['p_course_photo'] ?>"></td>
                </tr>
                <tr>
                  <th>Course Name</th>
                  <td><?php echo $list['pcourse_name'] ?></td>
                </tr>
                <tr>
                  <th>Course Entry Time</th>
                  <td><?php echo $list['pcourse_entry_time'] ?></td>
                </tr>
                <tr>
                  <th>Course Update Time</th>
                  <td><?php echo $list['pcourse_update_time'] ?></td>
                </tr>
                <tr>
                  <th>Course Status</th>
                   <?php
                      if($list['pcourse_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/p_course/activedeactive/<?php echo $list['pcourse_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['pcourse_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/p_course/activedeactive/<?php echo $list['pcourse_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['pcourse_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                </tr>
              </table>
               <tr>
                  <a href="<?php echo site_url()?>/p_course">go to back</a>
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
 
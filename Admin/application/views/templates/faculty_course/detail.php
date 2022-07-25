 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Course Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">View faculty Course</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faculty Course Detail</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>Faculty Name</th>
                  <td><?php echo $list['faculty_name'] ?></td>
                </tr>
                <tr>
                  <th>Faculty Photo</th>
                  <td><img src="<?php echo base_url() ?>../Faculty/FacultyPhoto/<?php echo $list['faculty_photo'] ?>" alt="photo not found" height="150" width="150"></td>
                </tr>
                <tr>
                  <th>Course Name</th>
                  <td><?php echo $list['pcourse_name'] ?></td>
                </tr>
                <tr>
                  <th>Course Title</th>
                  <td><?php echo $list['faculty_ctitle'] ?></td>
                </tr>
                <tr>
                  <th>Course Description</th>
                  <td><?php echo $list['faculty_cdesc'] ?></td>
                </tr>
                <tr>
                  <th>Faculty Status</th>
                   <?php
                      if($list['faculty_cstatus']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/faculty_course/activedeactive/<?php echo $list['faculty_cid'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['faculty_cstatus'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/faculty_course/activedeactive/<?php echo $list['faculty_cid'] ?> " class="btn btn-block btn-danger"><?php echo $list['faculty_cstatus'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                </tr>
                <tr>
                    <td><a href="<?php echo site_url()?>/faculty_course">go to back</a></td>
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
 
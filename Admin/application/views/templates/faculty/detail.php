<?php
  // print_r($list);
  // die();
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">View Faculty</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faculty Detail</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>Faculty Name</th>
                  <td><?php echo $list['faculty_name'] ?></td>
                </tr>
                <tr>
                  <th>Faculty Photo</th>
                  <!-- <td><?php echo $list['faculty_photo'] ?></td> -->
                  <td><img src="<?php echo base_url() ?>../Faculty/FacultyPhoto/<?php echo $list['faculty_photo'] ?>" height="60px" width="80px"></td>
                </tr>
                <tr>
                  <th>Faculty Gender</th>
                  <td><?php echo $list['faculty_gender'] ?></td>
                </tr>
                <tr>
                  <th>Faculty Qualification</th>
                  <td><?php echo $list['faculty_qualification'] ?></td>
                </tr>
                <tr>
                    <th>Faculty Date Of Birth</th>
                    <td><?php echo $list['faculty_dob']; ?></td>
                </tr>
                <tr>
                    <th>Faculty Date Of Join</th>
                    <td><?php echo $list['faculty_doj']; ?></td>
                </tr>
                <tr>
                    <th>Faculty Email</th>
                    <td><?php echo $list['faculty_email']; ?></td>
                </tr>
                <tr>
                    <th>Faculty Entry Time</th>
                    <td><?php echo $list['faculty_entry_time']; ?></td>
                </tr>
                <tr>
                    <th>Faculty Update Time</th>
                    <td><?php echo $list['faculty_update_time']; ?></td>
                </tr>
                <tr>
                  <th>Faculty Status</th>
                   <?php
                      if($list['faculty_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/faculty/activedeactive/<?php echo $list['faculty_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['faculty_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/faculty/activedeactive/<?php echo $list['faculty_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['faculty_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                </tr>
                  <tr>
                    <td><a href="<?php echo site_url()?>/faculty">go to back</a></td>
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
 
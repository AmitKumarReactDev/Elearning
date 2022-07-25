<?php
  // print_r($list);
  // die();

?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Material Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">View Material</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Material Detail</h3>
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
                  <th>Material Name</th>
                  <td><a href="<?php echo base_url()?>../Faculty/image/CourseMaterial/<?php echo $list['material_pdf'] ?>" download><?php echo $list['material_pdf'] ?></a></td>
                  <!-- <td><?php echo $row['stream_name'] ?></td> -->
                </tr>
                <tr>
                  <th>Course Name</th>
                  <td><?php echo $list['pcourse_name'] ?></td>
                </tr>
                <tr>
                  <th>Material Entry Date</th>
                  <td><?php echo $list['material_entry_time'] ?></td>
                </tr>
                <tr>
                  <th>Material Update Time</th>
                  <td><?php echo $list['material_update_time'] ?></td>
                </tr>
                <tr>
                  <th>Material Status</th>
                   <?php
                      if($list['material_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/coursematerial/activedeactive/<?php echo $list['material_cid'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['material_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/coursematerial/activedeactive/<?php echo $list['material_cid'] ?> " class="btn btn-block btn-danger"><?php echo $list['material_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                    </tr>
                    <tr>
                       <td><a href="<?php echo site_url()?>/coursematerial">go to back</a></td>
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
 
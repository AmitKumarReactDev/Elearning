 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course Detail
       </h1>
       <?php
    if($this->session->flashdata('errMsg')!="")
    {
      ?>
  <!-- <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?php echo $this->session->flashdata("errMsg") ?>
                </div>   -->
      <?php
    }else if($this->session->flashdata('Msg')!=""){
      ?>
  <!-- <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?php echo $this->session->flashdata("Msg") ?>
                  
                </div> -->
      <?php
    }
 ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/p_course/add">Add Course</a></li>
        <li class="active">View Course</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Course Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Course Name</th>
                  <th>Course Photo</th>
                  <th>Course Status</th>
                  <th>More Detail</th>
                 </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row)
                {
                  ?>
                  <tr>

                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/p_course/delete/<?php echo $row['pcourse_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/p_course/edit/<?php echo $row['pcourse_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['pcourse_name'] ?></td>
                    <td><img height="150px" width="150px" src="<?php echo base_url()?>/image/CoursePhoto/<?php echo $row['p_course_photo'] ?>"></td>
                    <?php
                      if ($row['pcourse_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/p_course/activedeactive/<?php echo $row['pcourse_id'] ?>" class="btn btn-block btn-success"><?php echo $row['pcourse_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/p_course/activedeactive/<?php echo $row['pcourse_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['pcourse_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                    <td><a href="<?php echo site_url() ?>/p_course/detail/<?php echo $row['pcourse_id']?>">Detail</a></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Course Name</th>
                  <th>Course Photo</th>
                  <th>Course Status</th>
                  <th>More Detail</th>
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
 
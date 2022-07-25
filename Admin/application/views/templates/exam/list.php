 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Exam Question Detail
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
        <!-- <li><a href="<?php echo site_url() ?>/exam/add">Add area</a></li> -->
        <li class="active">View area</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Question Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Faculty Name</th>
                  <th>Faculty Photo</th>
                  <th>Subject</th>
                  <!-- <th>Faculty</th> -->
                  <th>Question Name</th>
                  <th>Question Status</th>
                  <th>More</th>
                 </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($examlist as $row) 
                {
                  ?>
                  <tr>
                    <td><?php echo $row['faculty_name'] ?></td>
                    <td><img src="<?php echo base_url() ?>../Faculty/FacultyPhoto/<?php echo $row['faculty_photo'] ?>" height="60px" width="80px"></td>
                    <td><?php echo $row['subject_name'] ?></td>
                       <!--  <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/exam/delete/<?php echo $row['exam_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/exam/edit/<?php echo $row['exam_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>-->
                     <td><?php echo $row['question_name'] ?></td>
                    <?php
                      if ($row['question_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/exam/activedeactive/<?php echo $row['exam_id'] ?>" class="btn btn-block btn-success"><?php echo $row['question_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/exam/activedeactive/<?php echo $row['exam_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['question_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                <td><a href="<?php echo site_url() ?>/exam/detail/<?php echo $row['exam_id'] ?>">Detail</a></td>
                </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Faculty Name</th>
                  <th>Faculty Photo</th>
                  <th>Subject</th>
                  <!-- <th>Faculty</th> -->
                  <th>Question Name</th>
                  <th>Question Status</th>
                  <th>More</th>
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
 
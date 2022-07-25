<?php 
  // print_r($list);
  // die();

?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        exam Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">View exam</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">exam Detail</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <tr>
                <th>Faculty Photo</th>
                     <td><img src="<?php echo base_url() ?>../Faculty/FacultyPhoto/<?php echo $list['faculty_photo'] ?>" height="60px" width="80px"></td>
               </tr>
               <tr>
                 <th>Faculty Name</th>
                 <td><?php echo $list['faculty_name'] ?></td>
               </tr>
                <tr>
                  <th>Course Name</th>
                  <td><?php echo $list['pcourse_name'] ?></td>
                </tr>
                <tr>
                  <th>Question Name</th>
                  <td><?php echo $list['question_name'] ?></td>
                </tr>
                <tr>
                  <th>Question Option A</th>
                  <td><?php echo $list['question_mcq1'] ?></td>
                </tr>
                <tr>
                  <th>Question Option B</th>
                  <td><?php echo $list['question_mcq2'] ?></td>
                </tr>
                <tr>
                  <th>Question Option C</th>
                  <td><?php echo $list['question_mcq3'] ?></td>
                </tr>
                <tr>
                  <th>Question Option D</th>
                  <td><?php echo $list['question_mcq4'] ?></td>
                </tr>
                <tr>
                  <th>Question Answer</th>
                  <td><?php echo $list['question_answer'] ?></td>
                </tr>
                <tr>
                  <th>Question Entry Date</th>
                  <td><?php echo $list['question_entry_time'] ?></td>
                </tr>
                <tr>
                  <th>exam Update Time</th>
                  <td><?php echo $list['question_update_time'] ?></td>
                </tr>
                <tr>
                  <th>exam Status</th>
                   <?php
                      if($list['question_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/courseexam/activedeactive/<?php echo $list['exam_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $list['question_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/courseexam/activedeactive/<?php echo $list['exam_id'] ?> " class="btn btn-block btn-danger"><?php echo $list['question_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                    </tr>
                    <tr>
                       <td><a href="<?php echo site_url()?>/courseexam">go to back</a></td>
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
 
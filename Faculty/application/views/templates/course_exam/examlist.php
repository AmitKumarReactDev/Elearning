<?php
  // print_r($examlist);
  // die();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Question Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><i style="color:grey; opacity:0.8;"  class="fa fa-dashboard"></i> Home</li> -->
        <li><a href="<?php echo site_url() ?>/faculty/examadd">Add Question</a></li>
        <li class="active">View Question</li>
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
                  <th>Status</th>
                  <th>Course Name</th>
                  <th>Question Name</th>
                  <th>Question Mcq1</th>
                  <th>Question Mcq2</th>
                  <th>Question Mcq3</th>
                  <th>Question Mcq4</th>
                  <th>Question Answer</th>
                  <th>Entry Time</th>
                  <th>Update Time</th>
                  <!-- <th>Detail</th> -->
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($examlist as $row) 
                {
                  ?>
                  <tr>
                    <?php
                      if($row['question_status']=="Deactive")
                      { ?>
                        <td><a style="color:grey; opacity:0.6;" onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/courseexam/examedit/<?php echo $row['exam_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                      <?php
                      }
                      else
                      {
                      ?>
                      <td><i style="color:blue;" class="fa fa-fw fa-check"></i></td>
                      <?php 
                      }
                      ?>
                    <td><?php echo $row['pcourse_name'] ?></td>
                    <td><?php echo $row['question_name'] ?></td>
                    <td><?php echo $row['question_mcq1'] ?></td>
                    <td><?php echo $row['question_mcq2'] ?></td>
                    <td><?php echo $row['question_mcq3'] ?></td>
                    <td><?php echo $row['question_mcq4'] ?></td>
                    <td><?php echo $row['question_answer'] ?></td>
                    <td><?php echo $row['question_entry_time'] ?></td>
                    <td><?php echo $row['question_update_time'] ?></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Status</th>
                  <th>Subject Name</th>
                  <th>Question Name</th>
                  <th>Question Mcq1</th>
                  <th>Question Mcq2</th>
                  <th>Question Mcq3</th>
                  <th>Question Mcq4</th>
                  <th>Question Answer</th>
                  <th>Entry Time</th>
                  <th>Update Time</th>
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
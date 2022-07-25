<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subject Detail
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
        <li><a href="<?php echo site_url() ?>/subject/add">add subject</a></li>
        <li class="active">View subject</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">subject Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>delete</th>
                  <th>edit</th>
                  <th>subject Name</th>
                  <th>stream Name</th>
                  <th>semester Name</th>
                  <th>subject Status</th>
                  <th>More Detail</th>
                 </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>

                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/subject/delete/<?php echo $row['subject_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/subject/edit/<?php echo $row['subject_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['subject_name'] ?></td>
                    <td><?php echo $row['stream_name'] ?></td>
                    <td><?php echo $row['semester_name'] ?></td>
                    <?php
                      if ($row['subject_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/subject/activedeactive/<?php echo $row['subject_id'] ?>" class="btn btn-block btn-success"><?php echo $row['subject_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/subject/activedeactive/<?php echo $row['subject_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['subject_status'] ?></a></td>               
                       <?php
                      }
                      ?>
                      <td><a href="<?php echo site_url() ?>/subject/detail/<?php echo $row['subject_id'] ?>">More Detail</a></td>
                    <?php 
                      }
                     ?>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Subject Name</th>
                  <th>Stream Name</th>
                  <th>semester Name</th>
                  <th>Subject Status</th>
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
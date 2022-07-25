<?php 
// print_r($list);
// die(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Detail
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
      <!--   <li><a href="<?php echo site_url() ?>/faculty/add">add Faculty</a></li> -->
        <li class="active">View Faculty</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faculty Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Delete</th>
                  <!-- <th>Edit</th> -->
                  <th>Faculty Name</th>
                  <th>Faculty Photo</th>
                  <th>Faculty Status</th>
                 <th>More Detail</th>
                  <!-- <th>Faculty Entry Date</th>
                  < --th>Faculty Update Date</th>-->
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>
                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/faculty/delete/<?php echo $row['faculty_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                      <td><?php echo $row['faculty_name'] ?></td>
                     <td><img src="<?php echo base_url() ?>../Faculty/FacultyPhoto/<?php echo $row['faculty_photo'] ?>" height="60px" width="80px"></td>
                    
                    <?php
                      if ($row['faculty_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/faculty/activedeactive/<?php echo $row['faculty_id'] ?>" class="btn btn-block btn-success"><?php echo $row['faculty_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/faculty/activedeactive/<?php echo $row['faculty_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['faculty_status'] ?></a>
                    </td>

                       <?php
                      }
                      ?>
                  <!-- </tr> -->
                  
                    <td><a href="<?php echo site_url()?>/faculty/detail/<?php echo $row['faculty_id'] ?>">Detail</a></td>
                  </tr>
               <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Delete</th>
                  <th>Faculty Name</th>
                  <th>Faculty Photo</th>
                  <th>Faculty Status</th>
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
 
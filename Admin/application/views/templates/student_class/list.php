<?php 
  // print_r($studentlist);
  // die();
?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Detail
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
         <li class="active">View Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Name</th>
                  <th>email</th>
                  <th>Status</th>
                  <th>gender</th>
                  <th>joining Date</th>
                  </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($studentlist as $row) 
                {
                  ?>
                  <tr>
                        <td><?php echo $row['student_name'] ?></td>
     
                        <td><?php echo $row['student_email'] ?></td>
                   <?php
                      if($row['student_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/StudentDetail/activedeactive/<?php echo $row['student_id'] ?>" class="btn btn-block btn-success">
                    <?php echo $row['student_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                <a  class="btn btn-block btn-danger"href="<?php echo site_url() ?>/StudentDetail/activedeactive/<?php echo $row['student_id'] ?>"><?php echo $row['student_status'] ?></a>
                    </td>        
                       <?php
                      }
                      ?>
                      <td><?php echo $row['student_gender'] ?></td>
                      <td><?php echo $row['student_entry_time'] ?></td>
              <?php
               }
               ?>
               
              </tr>
                </tbody>
                <tfoot>
                <tr>
                   <th>Name</th>
                  <th>email</th>
                  <th>Status</th>
                  <th>gender</th>
                  <th>joining Date</th>
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
 
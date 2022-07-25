<?php
  // print_r($materiallist);
  // die();
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Material Detail
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
       <!--  <li><a href="<?php //echo site_url() ?>/faculty_course/add">add faculty_course</a></li>
        --> <li class="active">View Material</li>
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
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Material Name</th>
                  <th>Course Name</th>
                  <th>Faculty Name</th>
                  <th>Material Status</th>
                  <th>More Detail</th>
                </tr>
                </thead>
                <tbody>
              <?php 
                foreach ($materiallist as $row) 
                {
                  ?>
                  <tr> 
                  <td><a href="<?php echo base_url()?>../Faculty/image/ParticularCourseMaterial/<?php echo $row['material_pdf'] ?>" download><?php echo $row['material_pdf'] ?></a></td>
                  <td><?php echo $row['pcourse_name'] ?></td>
                  <td><?php echo $row['faculty_name'] ?></td>
                    <?php
                      if($row['material_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/coursematerial/activedeactive/<?php echo $row['material_cid'] ?>" class="btn btn-block btn-success">
                    <?php echo $row['material_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/coursematerial/activedeactive/<?php echo $row['material_cid'] ?> " class="btn btn-block btn-danger"><?php echo $row['material_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                        <td><a href="<?php echo site_url() ?>/coursematerial/detail/<?php echo $row['material_cid'] ?>">More Detail</a></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Material Name</th>
                  <th>Course Name</th>
                  <th>Faculty Name</th>
                  <th>Material Status</th>
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
 
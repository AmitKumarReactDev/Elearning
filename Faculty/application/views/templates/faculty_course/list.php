<?php
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Faculty Course Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><i style="color:grey; opacity:0.8;"  class="fa fa-dashboard"></i> Home</li> -->
        <li><a href="<?php echo site_url() ?>/faculty_course/add">Add Faculty Course</a></li>
        <li class="active">View Faculty Course</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faculty Course Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Status</th>
                  <!-- <th>Edit</th> -->
                  <th>Name</th>
                  <th>Title</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>
                    <?php
                      if($row['faculty_cstatus']=="Deactive")
                      { ?>
                        <td><a style="color:grey; opacity:0.6;" onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/faculty_course/edit/<?php echo $row['faculty_cid'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
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
                    <td><?php echo $row['faculty_ctitle'] ?></td>
                    <td><?php echo $row['faculty_cdesc'] ?></td>
                  </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Status</th>
                  <!-- <th>Edit</th> -->
                  <th>Name</th>
                  <th>Title</th>
                  <th>Detail</th>
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
 
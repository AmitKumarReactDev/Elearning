 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Area Detail
       </h1>
  <?php
    if($this->session->flashdata('errMsg')!="")
    {
      ?>
  <!-- <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <?php echo $this->session->flashdata("errMsg") ?>
                </div> -->  
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
        <li><a href="<?php echo site_url() ?>/area/add">Add area</a></li>
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
              <h3 class="box-title">Area Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php echo site_url()?>/area/deleteall/">
              <table align="center" id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>delete</th>
                  <th>edit</th>
                  <th>area Name</th>
                  <th>area Status</th>
                  <th>More</th>
                 </tr>
                </thead>
                <tbody>
              <?php 

                foreach ($list as $row) 
                {
                  ?>
                  <tr>
                    <!-- <td><input type="checkbox" name=""></td> -->
                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/area/delete/<?php echo $row['area_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/area/edit/<?php echo $row['area_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['area_name'] ?></td>
                    <?php
                      if ($row['area_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/area/activedeactive/<?php echo $row['area_id'] ?>" class="btn btn-block btn-success"><?php echo $row['area_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/area/activedeactive/<?php echo $row['area_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['area_status'] ?></a>
                    </td>                      
                       <?php
                      }
                      ?>
                <td><a href="<?php echo site_url() ?>/area/detail/<?php echo $row['area_id'] ?>">Detail</a></td>
                </tr>
                  <?php
                }
               ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>delete</th>
                  <th>edit</th>
                  <th>area Name</th>
                  <th>area Status</th>
                  <th>More</th>
                </tr>
                </tfoot>
              </table>
              </form>
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
  <script type="text/javascript">
    function select() 
    {
      alert('ok');
    }
  </script>
 <!-- <script type="text/javascript"> -->
  <!--  $('#select').click(function()
   {
      alert('ojkk');

    });
 <!- < --/script> -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        State Detail
       </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/state/add">add state</a></li>
        <li class="active">View state</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
<?php
  if($this->session->flashdata('errMsg')!="")
  {
    ?>
  <!--             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata("errMsg") ?>
              </div>   -->
    <?php
  }
  else if($this->session->flashdata('Msg')!=""){
    ?>
         <!--    <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata("Msg") ?>
                
              </div> -->
    <?php
  }
 ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">State Detail</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <form method="post">    
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>  
                  
                  <!-- <input type="submit" value="Select All" name="selectall" class="btn btn-primary"></th></th> -->
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
              <?php 
                foreach ($list as $row) 
                {
                  ?>
                  <tr>
                    <!-- }
                    ?> -->
                    <!-- <td><input type="checkbox" name="selectall[]"></td> -->
                    <td><a onclick="return confirm('Are You Sure')" href="<?php echo site_url() ?>/state/delete/<?php echo $row['state_id'] ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                    <td><a onclick="return confirm('are you sure')" href="<?php echo site_url() ?>/state/edit/<?php echo $row['state_id'] ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                    <td><?php echo $row['state_name'] ?></td>
                    <?php
                      if ($row['state_status']=="Active")
                      { ?>
                    <td>
                      <a href="<?php echo site_url() ?>/state/activedeactive/<?php echo $row['state_id'] ?>" class="btn btn-block btn-success"><?php echo $row['state_status'] ?></a>
                    </td>                      
                    <?php
                      }
                      else{
                        ?>
                    <td>
                      <a href="<?php echo site_url() ?>/state/activedeactive/<?php echo $row['state_id'] ?>" class="btn btn-block btn-danger"><?php echo $row['state_status'] ?></a>
                    </td>

                       <?php
                      }
                      ?>
                      <td><a href="<?php echo site_url() ?>/state/detail/<?php echo $row['state_id'] ?>">More</a></td>
                  <?php
                    }
                    ?>
                      
                        
                </tr>
                </tbody>
                <tfoot>
              <!--   <tr>  
                  <th><input type="submit" value="Select All" name="selectall" class="btn btn-primary"></th></th> -->
                      <!-- <th><a href="<?php echo site_url()?>/state/multidelete/12">Delete</a></th>  -->
                  <!-- <th class="glyphicon glyphicon-remove">Delete</th> -->
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Detail</th>
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
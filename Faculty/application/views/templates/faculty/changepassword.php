 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
             <?php
  if($this->session->flashdata('errMsg')!="")
  {
    ?>
       <!-- <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata("errMsg") ?>
              </div> -->
  <?php
  }
   else if($this->session->flashdata('Msg') != "")
      {
      ?>
            <!-- <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata("Msg") ?>
                </div> -->
    <?php 
      }
 ?>
            <form data-parsley-validate="" role="form" method="post" action="<?php echo site_url() ?>/Faculty/changePasswordCheck">
              <div class="box-body">
          <div class="form-group has-feedback">
        <input type="password" required="" class="form-control" placeholder="Enter old password" name="oldpassword">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" required="" class="form-control" id="setnewpassword" data-parsley-equalto="#retypepassword" placeholder="New Password" name="newpassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     <div class="form-group has-feedback">
        <input type="password" required="" class="form-control" id="retypepassword" placeholder="Retype-Password" data-parsley-equalto="#setnewpassword" name="repassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 

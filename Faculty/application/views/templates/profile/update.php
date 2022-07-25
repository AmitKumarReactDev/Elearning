?p<hp 
  // print_r($profilelist);
  // die();
?>
<style type="text/css">
  #displayprofile
  {
    display:block;
    width:70%;
    margin:10px auto;
    border-radius:60%;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile Detail
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
              <h3 class="box-title">Profile Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" role="form" method="post" data-parsley-validate="" action="<?php echo site_url() ?>/profile/update/<?php echo $profilelist['faculty_id']?>">
              <div class="form-group">
        <label for="exampleInputEmail1"><img  src="<?php echo base_url()?>/FacultyPhoto/<?php echo $profilelist['faculty_photo'] ?>" height="150px" id="facultyprofile" width="250"></img>
                <input type="file" name="facultyphoto">
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1"> Faculty Name</label>
                  <input  type="text"  value="<?php echo $profilelist['faculty_name'] ?>" data-parsley-pattern="^[a-zA-Z ]+$" required=""  class="form-control" name="facultyname" id="exampleInputEmail1"  placeholder="Enter Faculty Name">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1"> Faculty gender</label>
                <?php 
                  if ($profilelist['faculty_gender']=="Male")
                  { ?>
               
                <div class="form-group has-feedback">
                  <input type="radio" value="Male" checked=""  name="facultygender">  Male
                  <input type="radio" value="female" name="facultygender" >  Female
              <?php 
                  }
                  elseif ($profilelist['faculty_gender']=="Female")
                  { ?>
                    <div class="form-group has-feedback">
                      <input type="radio" value="Male" name="facultygender">  Male
                    <input checked="" type="radio" value="Female" name="facultygender">Female
                <?php
                  }
                  else{
                  ?>

                 <div class="form-group has-feedback">
                  <input type="radio" value="Male" required="" name="facultygender"> Male
                  <input type="radio" value="Female" required="" name="facultygender">Female
                  <?php 
                  }
                  ?>
                 </div>
                  <div class="form-group">
                  <label form="exampleInputEmail1">Faculty Qualification</label>
                  <input type="text" value="<?php echo $profilelist['faculty_qualification'] ?>" class="form-control" name="facultyqualification" data-parsley-pattern="^[a-zA-Z ]+$" required="" id="exampleInputEmail1" placeholder="Enter Faculty Qualification">
                </div>
                  <div class="form-group">
                  <label form="exampleInputEmail1"> Faculty Birth Date</label>
                  <input type="date" value="<?php echo $profilelist
                    ['faculty_dob'] ?>" required="" class="form-control" name="facultydob" id="exampleInputEmail1">
                </div>
                  <div class="form-group">
                  <label form="exampleInputEmail1"> Faculty Email</label>
                  <input type="email" required="" value="<?php echo $profilelist
                  ['faculty_email'] ?>" class="form-control" name="facultyemail" id="exampleInputEmail1"  placeholder="Enter Faculty Email Address">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="update" type="submit" class="btn btn-primary">Update</button>
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
<!-- <script type="text/javascript">
    function triggerclick() 
    {
      document.querySelector('#facultyphoto').click();

    }
    function facultyimage(e) 
    {
      if(e.files[0])
      {
        var reader = new FileReader();
        reader.onload=function(e){
          document.querySelector('#displayprofile').setAttribute('src',e.target.result);
        }
      }
      reader.readAsDataUrl(e.files[0]);
    }
</script>  -->
 <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#facultyprofile').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#facultyphoto").change(function(){
        readURL(this);
    });
</script>
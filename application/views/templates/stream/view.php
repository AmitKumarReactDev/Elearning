<?php
// print_r($semesterlist);
 // die();
  // if (isset($_REQUEST['semesterlist'])) 
  // {
  //   echo "hello";
  //   die();
  //   # code...
  // }
?>  
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="<?php echo site_url()?>/courses">Stream</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
      </div>

    </div>
  </div>
</section>
<br>
  <div class="container" id="result" align="center">
  <form method="post" action="<?php echo site_url() ?>/stream/materail">
    
    <table style="text-align:center;" class=" table table-hover">
      <!-- <caption class="table-thead">Result</caption> -->
      <tr>
        <th><a href="<?php echo site_url()?>/stream/demo/">Stream name</a></th>
          <td>
            <select name="stream" required="" onchange="fillstream(this.value)" class="browser-default custom-select">
              <option selected="" value="noselect">Select Stream</option>
              <?php
                foreach($streamlist as $row) {
                ?>
                <option value="<?php echo $row['stream_id']; ?> "><?php echo $row['stream_name'];  ?></option>
               <?php
                }
              ?>
              <!-- <option value="1">One</option> -->
            </select>
          </td>
      </tr>
      <tr>
        <th>Semester Name</th>
          <td>
            <select id="semester" onchange="fillsem(this.value)" class="browser-default custom-select">
              <option value="">--select semester--</option>
            </select>
          </td>
      </tr>
      <tr>
        <th>Subject Name</th>
          <td>
            <select id="subject" name="subjectId" onchange="fillmaterail(this.value)" class="browser-default custom-select">
              <option value="">--select subject--</option>
            </select>
          </td>
      </tr>
  
    </table>
    <input type="submit" name="downloadresult" value="Download Material" class="btn btn-success">
  </form> 
  </div><br>
<script src="<?php echo site_url() ?>/js/jquery.min.js"></script>
<script type="text/javascript">
    
    function fillstream(id) {
      $.ajax({
        url:"<?php echo site_url(); ?>/Stream/fillsem/"+id,
        method:"GET",
        success:function(res,status){
          $("#semester").html(res);
        },
            error:function(error){
              alert(error.statusText);
            }
      });
    }
    function fillsem(id) {
      $.ajax({
        url:"<?php echo site_url(); ?>/Stream/fillsubject/"+id,
        method:"GET",
        success:function(res,status){
          $("#subject").html(res);
        },
            error:function(error){
              alert(error.statusText);
            }
      });
    }
  </script>
  
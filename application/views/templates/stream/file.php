<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="<?php echo site_url()?>/courses">Material</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
      </div>

    </div>
  </div>
</section>
<br>
  <div class="container" id="result" align="center">
  <form method="post" action="<?php echo site_url() ?>/stream/materail">
    
    <table style="text-align:center;" class="table table-hover">
    <?php 
    foreach ($list as $row) 
    {
      ?>
      <div style="height:150px; width:150px;">
        <img height="100" width="100" src="<?php echo base_url() ?>/Faculty/image/logo/download.png"><a href="<?php echo base_url() ?>/Faculty/image/courseMaterial/<?php echo $row['material_pdf'] ?>"><?php echo $row['material_pdf'] ?></a>
      </div>
      <?php
    }
     ?>
    </table>
   </form> 
  </div>

  
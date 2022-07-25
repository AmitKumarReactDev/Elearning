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
    <?php 
    foreach ($list as $row) 
    {
      ?>
      <a href=""><?php echo $row['material_pdf'] ?></a>
      <?php
    }
     ?>
    </table>
   </form> 
  </div>

  
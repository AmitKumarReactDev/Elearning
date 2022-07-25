<!-- /header --> 
<!-- Modal -->
<?php
  // print_r($examlist);
  // die();
?>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="<?php echo site_url()?>/courses">Examination</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
      </div>

    </div>
  </div>
</section>

 <!-- /page title -->

<!-- courses -->
<section class="section">
<div class="container" style="border:groove;">
  <!-- course item -->

  <table class="table table-striped" >
      <div class="container">
        <!-- <h3><strong></strong></h3> -->
          <label class="text-primary"><h3>Subject  :  <?php echo $examlist[0]['pcourse_name'] ?></h3></label>
      </div>
      <form method="post" action="<?php echo site_url()?>/courseexam/examresult/">
  <?php
  $count=1;
    foreach($examlist as $row)
    {
      ?>
      <tr style="float:left;">
        <input type="hidden" name="pcourseid" value="<?php echo $row['pcourse_id'] ?>">
        <td><input type="hidden" name="ans[]" value="<?php echo $row['question_answer'] ?>"></td>
        <td><b><?php echo "Question"."\t".$count.'.'."\t".$row['question_name'].'?' ?></b></td>
      </tr>
      <tr>
        <td><input type="radio" name="opt[<?php echo $row['exam_id'] ?>]" value="<?php echo $row['question_mcq1'] ?>">
        <?php echo $row['question_mcq1'] ?></td>
        <td><input type="radio" name="opt[<?php echo $row['exam_id'] ?>]" value="<?php echo $row['question_mcq2'] ?>">
        <?php echo $row['question_mcq2'] ?></td>
        <td><input type="radio" name="opt[<?php echo $row['exam_id'] ?>]" value="<?php echo $row['question_mcq3'] ?>">
        <?php echo $row['question_mcq3'] ?></td>
      <td><input type="radio" name="opt[<?php echo $row['exam_id'] ?>]" value="<?php echo $row['question_mcq4'] ?>">
        <?php echo $row['question_mcq4'] ?></td>
      </tr>
        <?php 
        $count++;
        }
        ?>
      <tr>
    <td align="center"><input type="submit" class="btn btn-success" name="submit" style="border-radius:20px; width:180px;" value="submit Answer">  <input type="reset" class="btn btn-danger" style="border-radius:20px; width:180px;" name="reset"></td>
  </tr>
 </form>
 </table> 
</div>
</section>
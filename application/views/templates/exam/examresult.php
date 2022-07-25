<?php 
	// print_r($resultlist);
	// die();
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#result
		{
			margin-left:30%;	
		}
	</style>
	<title>Exam Result</title>
</head>
 --<body>-->
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

<br>

	<div class="container" id="result" style="height:30%;width:40%;border:groove;" align="center"> 
		<label class="text-info"><strong>subject Result : <?php echo $resultlist['subjectname'] ?></strong></label>
		<table style="text-align:center;" class=" table table-hover">
			<!-- <caption class="table-thead">Result</caption> -->
			<tr>
				<th class="">Description</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>Total Question</td>
				<td><?php echo $resultlist['totalquestion'] ?></td>					
			</tr>
			<tr>
				<td>Attemped Question</td>
				<td><?php echo $resultlist['totalatempt'] ?></td>					
			</tr>
			<tr>
				<td>Un-Attemped Question</td>
				<td><?php echo $resultlist['totalunatempt'] ?></td>					
			</tr>
			<tr>
				<td>Correct Answer</td>
				<td><?php echo $resultlist['cans'] ?></td>					
			</tr>
			<tr>
				<td>Wrong Answer</td>
				<td><?php echo $resultlist['wans'] ?></td>					
			</tr>
		</table>
	</div>
<div id="printableArea">
	<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
		<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
	       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
	       <br><br>
	       <span style="font-size:25px"><i>This is to certify that</i></span>
	       <br><br>
	       <span style="font-size:30px"><b><?php echo $this->session->userdata['studentinfo']['student_name']; ?></b></span><br/><br/>
	       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
	       <span style="font-size:30px"></span> <?php echo $resultlist['subjectname'] ?> <br/><br/>
	       <span style="font-size:20px">with score of <b>First Class</b></span> <br/><br/><br/><br/>
	       <span style="font-size:25px"><i>dated</i></span><br>
	      <span style="font-size:30px"><?php echo date('Y-m-d') ?></span>
		</div>
	</div>
</div>

		<input type="button" onclick="printDiv('printableArea')" name="downloadresult" value="download Result" class="btn btn-success">
	<!-- </div><br> -->
<!-- </body>
</html> -->
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

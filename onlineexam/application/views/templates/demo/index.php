<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<title></title>
</head>
<body>
<form>
	<select name="state" id="stateid">
		<option>select state</option>
		<option value="gujrat">gujrat</option>
		<option value="MH">MH</option>
	</select>
	<select name="state" id="citydata">
	</select>
</form>
</body>
</html>
<script type="text/javascript">
 $(document).ready(function() {

        $("#stateid").change(function(){

            var value =$("#stateid").val();
     		// alert(value);
            $.ajax({
                url: "<?php echo site_url() ?>/demo/fillcity/"+value, 
                type: "POST",
                success: function(res){
  					$("#citydata").html(res);
                }
            });
        });
        });


</script>
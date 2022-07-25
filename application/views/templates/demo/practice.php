<!DOCTYPE html>
<html>
<head>
	<title>crud practice</title>
</head>
<body>
	
	<form method="post" action="<?php echo site_url()?>/demo/ins">
		Name<input type="text" name="name">
		<input type="submit" name="submit">
	</form>
	<a href="<?php echo site_url()?>/demo/select"><p style="color:red">View Data</p></a>
	<script type="text/javascript"></script>
</body>
</html>
<?php
	// print_r($list);
	// die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		view
	</title>
</head>
<body>
		<form method="post" action="<?php echo site_url()?>/demo/update/<?php echo $list['id']?>">
			
			Name: <input type="text" name="name" value="<?php echo $list['Name']?>">
			<input type="submit" name="s" value="update">
		</form>
		


				<a href="<?php echo site_url()?>/demo/index">Insert Data.....!</a>
</body>
</html>
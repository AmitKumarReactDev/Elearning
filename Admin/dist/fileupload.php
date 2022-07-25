<?php
	$con=mysqli_connect("localhost","root","","file");
	if(isset($_REQUEST['s']))
	{
		$name=$_FILES['file']['name'];
		$i=1;
		foreach ($name as $name1) {
			$tmp_name=$_FILES['file']['tmp_name'][$i];
			$path="img/".$name1;
			move_uploaded_file($tmp_name,$path);
			$q="insert into files(filename)values('$path')";
			mysqli_query($con,$q);
			$i++;
		}
		header("location:fileupload.php");
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>file upload</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>Name</td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>File</td>
			<td><input type="file" multiple="" name="file[]"></td>
		</tr>
		<tr>
			<td><input type="submit" name="s" value="Upload"></td>
		</tr>
	</table>
	</form>
</body>
<table>

	<tr>
		<td></td>
	</tr>
</table>
</html>
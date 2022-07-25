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
		<table>
				<th>Name</th>
				<th>Delete</th>
				<th>Update</th>

			<?php
				foreach ($list as $row)
				{
				?>
				<tr>
					<td><?php echo $row['Name']?></td>
					<td><a href="<?php echo site_url()?>/demo/del/<?php echo $row['id']?>">Click Here</a></td>
					<td><a href="<?php echo site_url()?>/demo/edit/<?php echo $row['id']?>">Click Here</a></td>
			</tr>		
			<?php
				}
			?>
		</table>
		<a href="<?php echo site_url()?>/demo/index">Insert Data.....!</a>
</body>
</html>
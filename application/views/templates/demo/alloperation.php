<?php 
//ob_start();
	mysql_connect("localhost","root","");
	mysql_select_db("registeration");
	if (isset($_REQUEST['s'])) 
	{
		$name=$_REQUEST['nm'];
		$city=$_REQUEST['ct'];
		$hobby=$_REQUEST['h'];
		$hobbies=implode("/",$hobby);	
		$em=$_REQUEST['em'];
		$password=$_REQUEST['ps'];
		$gender=$_REQUEST['g'];
		$in="insert into record values('','$name','$city','$hobbies','$em','$password','$gender');";
		mysql_query($in);
	    header("location:alloperation.php");		
	}
	if(isset($_REQUEST['multidelete'])) 
	{
		$multi=$_REQUEST['chkdel'];
		foreach ($multi as $id) 
		{
		  	$del="delete from record where id='$id';";
		 	$qry=mysql_query($del);

		}
		header("location:alloperation.php");
	}	
		
	if(isset($_REQUEST['del']))
	{
		$id=$_REQUEST['del'];
		$qry="delete from record where id='$id'";
		mysql_query($qry);
		header("location:alloperation.php");

	}
	if(isset($_REQUEST['sb']))
	{
		$search=$_REQUEST['search'];
		 $q="select * from record where name like '$search%' or city like '$search%' or hobbie like '$search%' or email like '$search%' or gender like '$search%';";
		 	$data=mysql_query($q) or die(mysql_error());
	}
	else
	{
		$qry="select * from record";
		$data=mysql_query($qry);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>insert select delete update</title>
</head>
<body>
	
	<form method="post">		
		<table align="center" border="1" cellspacing="1" cellpadding="0" style="text-align:center;">
			<tr>
				<td colspan="2"><h3 style="color:green;">Registration Form</h3></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="nm"></td>
			</tr>
			<tr>
				<td>City</td>
				<td><select name="ct">
					<option value="no">--Select City--</option>
					<option>surat</option>
					<option>bharuch</option>
					<option>baroda</option>
				</select></td>
			</tr>
			<tr>
				<td>Hobbies</td>
						<td><input type="checkbox" name="h[]" value="cricket">Cricket
						<input type="checkbox"  name="h[]" value="coding">Coding
				</td>
			</tr>

				<tr>
				<td>
					Password
				</td>
				<td><input  type="password" name="ps"></td>
			</tr>
		<tr>
				<td>Email</td>
				<td><input type="email" name="em" ></td>
	
			</tr>
			<tr> 
				<td>Gender</td>

				<td><input type="radio" name="g" value="male">Male
				 <input type="radio" name="g" value="female">Female</td>
			</tr>
			<tr>
				<th colspan="2" style="background:white;;"><input class="he" type="submit" value="Insert" name="s">
				<input class="he" type="reset" value="Reset" name="r">
				</th>
			</tr>	
		</table>
	
<table border="1" cellspacing="1" cellpadding="2">
		<td><input type="text" placeholder="Search Here..." name="search"><input class="btn" type="submit" value="Search" name="sb"></td>
	
	<tr>
		<?php
		if(isset($_REQUEST['select']))
		{
			?>
			<td><button style="width:100%; color:black;background:darkcyan;" name="deselect">DeSelect All</button></td>
		<?php	
		}
		else
		{
		?>
		<td><button style="width:100%; color:black;background:darkcyan;" name="select">Select All</button></td>
		<?php
		}
		?>
		<th rowspan="1">Action</th>
		<th rowspan="1">Update</th>
		<th rowspan="1">Name</th>
		<th rowspan="1">City</th>
		<th rowspan="1">Hobbies</th>
		<th rowspan="1">Email</th>
		<th rowspan="1">Gender</th>
		<th rowspan="1">Password</th>
		<br>
		<br>
	</tr>
	<tr>
	<?php
		while ($row=mysql_fetch_array($data))
	    {
	    	if (isset($_REQUEST['select']))
	    	{
	    		?>
	    		<td><input type="checkbox" checked="" name="chkdel[]" value="<?php echo $row['id']?>"></td>	
	    	<?php
	    	}
	    	else
	    	{
			?>
			<td><input type="checkbox" name="chkdel[]" value="<?php echo $row['id']?>"></td>
			<?php
			}
			?>
			<td><a style="color:red;" onclick="confirm('are you sure to Delete')" href="alloperation.php?del=<?php echo $row['id']?>">Delete</a></td>
			<td><a style="color:blue;" onclick="confirm('are you sure for Edit')" href="update.php?ed=<?php echo $row['id']?>">Edit</a></td>

			<td><?php echo $row['name']?></td>
			<td><?php echo $row['city']?></td>
			<td><?php echo $row['hobbie']?></td>	
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['password']?></td>
		</tr>
		<?php 
		}
		?>
	  <td><input onclick="confirm('are you sure to delete data')" value="Delete" style="color:black; background-color:burlywood; width:100%;" type="submit" name="multidelete"></td>
	
</table>
</form>
</body>
</html>
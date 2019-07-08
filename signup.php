<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
		<table align="center" border="2px solid" >
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td>Cnic No:</td>
				<td><input type="text" name="cnic" id="cnic"></td>
			</tr>
			<tr>
				
				<td colspan="2" align="right"><input type="submit" name="submit" value="CHECK" id="submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>



<?php
$con=mysqli_connect('localhost','root','','e-vote');
if($con==TRUE)
{
	echo "Data Base Connected";
}
else
{
echo "Data Base Not Connected";	
}
	$name=$_POST['name'];
	$cnic=$_POST['cnic'];
if (isset($_POST['submit']))
{
	$query="SELECT * FROM haris WHERE NAME='$name' AND CNIC='$cnic';";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	 if($row<1)
	 {
	 	?>
	 	<script>
	 	alert('You are not registered:');
	 	window.open('signup.php','_self');
	 	</script>
	 	<?php
	 }

else($row>0)
{
	 header('location:c2.php');
}
}
?>
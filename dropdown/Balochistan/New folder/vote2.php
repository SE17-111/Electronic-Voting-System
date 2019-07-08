<?php
$con=mysqli_connect('localhost','root','','e-vote');
$name = $_POST['NAME'];
$father = $_POST['FNAME'];
$mother = $_POST['MNAME'];
$cnic = $_POST['CNIC'];
$sql = "SELECT * FROM balochistan where NAME='$name' and FNAME='$father' and MNAME='$mother' and CNIC='$cnic'";
	$result=mysqli_query($con,$sql);
	$check = 0;
	if($check == 0)
	{
		while($row=mysqli_fetch_array($result))

			if($row['NAME']==$name && $row['FNAME']==$father && $row['MNAME']==$mother && $row['CNIC']==$cnic)
			{	
				$check = 1;
				header('location: navigation.php');	
			}	
	}
	if($check == 0)
	{	
	 	?>
	 	<script>
	 	alert('Invalid Data Retry');
	 	window.open('form.php','_self');
	 	</script>
	 	<?php
	 	
	}
?>
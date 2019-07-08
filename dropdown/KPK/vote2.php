<?php
$con=mysqli_connect('localhost','root','','e-vote');
$name = $_POST['name'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$cnic = $_POST['cnic'];
$sql = "SELECT * FROM kpk where NAME='$name' and FNAME='$father' and MNAME='$mother' and CNIC='$cnic'";
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
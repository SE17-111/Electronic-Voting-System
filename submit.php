<?php
$con=mysqli_connect('localhost','root','','e-vote');

$name = $_POST['name'];
$cnic = $_POST['cnic'];
$sql = "SELECT * FROM haris where NAME='$name' and CNIC='$cnic'";
	$result=mysqli_query($con,$sql);
	$check = 0;
	if($check == 0){
		while($row=mysqli_fetch_array($result))

			if($row['NAME']==$name && $row['CNIC']==$cnic)
			{	
				$check = 1;
				header('location: c2.php');	
			}	
	}
	if($check == 0)
	{
		?>
	 	<script>
	 	alert('You are not registered:');
	 	window.open('check.php','_self');
	 	</script>
	 	<?php
	}
?>
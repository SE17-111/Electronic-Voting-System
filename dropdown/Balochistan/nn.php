<?php
$con = mysqli_connect('localhost','root','','e-vote');
$cnic = $_POST['cnic'];
$sql = "SELECT * FROM slection_criteria where CNIC = '$cnic' and Vote = '0'";
$n1 = 1;
$n2 = 0;
	$result = mysqli_query($con,$sql);
	$check = 0;
	if($check == 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			if($row['Vote'] == $n2 && $row['CNIC'] == $cnic)
			{	
				$check = 1;

				$query = "UPDATE selection_criteria SET Vote = '$n1' WHERE CNIC = '$cnic'";
				?>
	 			<script>
	 			alert('Your vote has successfully casted');
	 			window.open('index.html','_self');
	 			</script>
	 			<?php
			}	
			elseif ($row['Vote'] == $n1 && $row['CNIC'] == $cnic) 
			{
				$check = 1;
				?>
	 				<script>
	 				alert('You have already casted your vote:');
	 				window.open('index.html','_self');
	 				</script>
	 				<?php

			}
		}
	}
	if($check == 0)
	{	
	 	?>
	 	<script>
	 	alert('Invalid Cnic No');
	 	window.open('navigation.php','_self');
	 	</script>
	 	<?php
	}
?>	
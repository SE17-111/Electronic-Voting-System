<?php
$con = mysqli_connect('localhost','root','','e-vote');
$cnic = $_POST['cnic'];
$sql = "SELECT * FROM haris2 where CNIC = '$cnic' and VOTE = '0'";
$n1 = 1;
$n2 = 0;
	$result = mysqli_query($con,$sql);
	$check = 0;
	if($check == 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			if($row['VOTE'] == $n2 && $row['CNIC'] == $cnic)
			{	
				$check = 1;

				$query = "UPDATE haris2 SET VOTE = '$n1' WHERE CNIN = '$cnic'";
				?>
	 			<script>
	 			alert('Your vote has successfully casted');
	 			window.open('index.php','_self');
	 			</script>
	 			<?php
			}	
			elseif ($row['VOTE'] == $n1 && $row['CNIC'] == $cnic) 
			{
				$check = 1;
				?>
	 				<script>
	 				alert('You have already casted your vote:');
	 				window.open('index.php','_self');
	 				</script>
	 				<?php

			}
		}
	}
	if($check == 0)
	{	
	 	?>
	 	<script>
	 	alert('InValid Cnic No');
	 	window.open('navigaion2.php','_self');
	 	</script>
	 	<?php
	}
?>	
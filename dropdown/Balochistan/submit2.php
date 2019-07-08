<?php
$con=mysqli_connect('localhost','root','','e-vote');

$name = $_POST['NAME'];
$fname = $_POST['FNAME'];
$mname = $_POST['MNAME'];
$cnic = $_POST['CNIC'];
$sql = "SELECT * FROM sindh where NAME='$name' FNAME='fname' MNAME='mname' and CNIC='$cnic'";
	$result=mysqli_query($con,$sql);
	$check = 0;
	if($check == 0){
		while($row=mysqli_fetch_array($result))

			if($row['NAME']==$name && $row['FNAME']==$fname && $row['MNAME'] ==$mname && $row['CNIC']==$cnic )
			{	
				$check = 1;
					
				?>
	 	<script>
	 	alert('registered:');
	 	window.open('form.php','_self');
	 	</script>
	 	<?php

			}	
	}
	if($check == 0)
	{
		?>
	 	<script>
	 	alert('not registered:');
	 	window.open('form.php','_self');
	 	</script>
	 	<?php
	}
?>
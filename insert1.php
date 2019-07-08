<?php

	$n1=$_POST['name'];
	$n2=$_POST['father'];
	$n3=$_POST['male'];
	$n4=$_POST['city'];
	$n5=$_POST['number'];
	$n6=$_POST['date'];
	$n7=$_POST['address'];

	
	$con=mysqli_connect('localhost','root','','e-vote');
	$query ="INSERT INTO `nadra`(`NAME`, `FATHER NAME`, `GENDER`, `CITY`, `IDENTITY NO`, `DATE OF BIRTH`, `ADDREESS`) VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7')";
	$run =mysqli_query($con,$query);
	if($con==TRUE)
	{
		echo "Connected";
	}
	if($run==TRUE)
	{
		echo "Data Inserted ";
	}
	else
	{
		echo "Data Not inserted";
	}
?>
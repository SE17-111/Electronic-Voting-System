<!DOCTYPE>
<html>
<head> <title>Registration Form</title>  </head>
<style>
	table tr td {
		text-align: center; font-size:20px;
	}
	table tr td textarea {
		width: 20px;
		height: 50px;
	}
</style>
<body>
    <form method="post" action="insert1.php">
    <table align="center" border="5px solid" width="800px" height="600px">
        <th align="center" colspan="2"><p><h2><b>Registration Form</b></h2></p></th>
        <tr><td>Name:</td>  <td><input type="text" name="name" required="required"></td></tr>
        <tr><td>Father Name:</td> <td><input type="text" name="father" required="required"></td></tr>
		<tr><td>Gender:</td><td >Male<input type="radio" name="male"> </td><td>Female<input type="radio" name="female"></td></tr>
        <tr><td>City:</td>  <td><input type="text" name="city" required="required"></td></tr>
        <tr><td>Identity No:</td><td><input type="Number" name="number" required="required"></td></tr>
        <tr><td>Date Of Birth:</td> <td><input type="date" name="date" required="required"></td></tr>
        <tr><td>Adress:</td> <td><input type="textarea" name="address" required="required"></td></tr>
        <tr><td style="float: right;"><input type="submit" name="submit"></td></tr>
        </table>
    </form>
    
    
    </body>
</html>
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
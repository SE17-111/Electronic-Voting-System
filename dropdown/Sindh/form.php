<!DOCTYPE html>
<html>
<head>
<style type="text/css">

	body
	{
		background-color: rgb(240,240,240);
	}
	

	fieldset
{
	box-shadow: 7px 8px 25px; 
	border-radius: 45px 0px 45px;
	border: 2px solid #333;

	background-color: white;
	border-color:  white ;
	margin-top: 70px;
	margin-left: 550px; 
	height: 520px;
	width: 450px;
}
	legend
{
		text-shadow: 4px 3px 15px; 
		text-align: center;
		font-size: 37px;
		color: #333;
	
}

	table
	{
		position: relative;
		align:center;
	}
	
	input:hover
	{
			box-shadow: 15px 8px 25px; 
	
		height: 28px;
		width: 170px;
		background-color:#cfcfcf;
		transition: width 0.4s ease-in-out; 	

	}
	td
	{
		padding-top: 12px;
	}
	input
	{
		box-shadow: 4px 3px 15px; 
	
		text-indent: 15px;
		font-size: 15px;
		cursor: pointer;
		border-radius:10px 20px 15px 20px; 
		padding: 12px 50px;
		margin-top: 20px;
		margin-left: 80px;
		align:center;
		width: 170px;
		height: 25px;
	}

	input:focus
{
		box-shadow: 15px 8px 25px; 
	
	font-size: 15px;
	width: 225px;
	height: 28px;
	border-radius: 10px 20px 15px 20px;
	letter-spacing: 2px;
	transition: width 0.8s ease-in-out;	
}

.input
{
			box-shadow: 4px 3px 15px; 
cursor: pointer;
		

	text-indent: 1px;
	margin-top: 8px;
	margin-left: 90px;
	width: 130px;
	height: 50px;
}
	
	.input:focus
{
		box-shadow: 15px 8px 25px; 
	
	border-color: 4px ridge #999;
	width: 190px;
	height: 55px;
	border-radius: 10px 20px 15px 20px;
	transition: width  0.6s ease-in-out;		
}
.input:hover

{
		box-shadow: 15px 8px 25px; 
	
	color: white;
	border-color: 4px ridge #999;
	border-radius: 10px 20px 15px 20px;
	width: 160px;
	height: 55px;
	transition: width  0.6s ease-in-out;		
	background-color: red;
}



</style>
	<title></title>
</head>
<body>
<form method="post" action="vote2.php">
<fieldset>	
<legend>
	Cast Your Vote
</legend>
	<table>
		<tr>
			<td>
				<input type="text" name="name" 	id="name" placeholder="Enter Your Name" required="required">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="father" 	id="father"  placeholder="Enter Your Father Name" required="required">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="mother" 	id="mother" placeholder="Enter Your Mother Name" required="required">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="cnic" 	id="cnic" placeholder="Enter Your CNIC #" required="required">
			</td>
		</tr>
		<tr>
		<td>
		<pre>        <input type="submit" name="submit" id="submit" class="input"></pre>
			</td>
		</tr>
		
	</table>
</fieldset>
</form>
</body>
</html>
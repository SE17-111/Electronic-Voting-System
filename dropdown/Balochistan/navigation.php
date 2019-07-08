<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
<style type="text/css">
	fieldset
	{
		margin-left: 520px;
		margin-top: 50px;
		height: 440px;
		width: 430px;
			box-shadow: 7px 8px 25px; 
		border-radius: 45px 0px 45px;
		border: 2px solid #333;
	}
		legend
	{
		text-shadow: 4px 3px 15px; 
		text-align: center;
		font-size: 26px;
		color: #333;

	}
	select
	{
		text-indent: 12px;
		box-shadow: 3px 2px 13px; 
		border-radius: 40px 10px 25px;
		margin-left: 10px;
		width:95px; 
		height:26px;
	}
	

table
{
	margin-top: 55px;
	margin-left: 60px;
}	
td
{
	text-shadow: 2px 1px 10px; 
	text-shadow: 
	height: 60px;
	font-size: 25px;
}
		.submit

		{
			font-weight: 5px;
			font-size: 18px;
			box-shadow: 4px 3px 15px; 
			width:120px;
			height:47px;
			margin-left: 160px;
			border-radius: 10px 20px 15px 20px;
			margin-top: 30px;
}
		.submit:hover
	
		{
	
		box-shadow: 15px 8px 25px; 
		padding: 9px 22px;
		color: white;
		border-radius: 10px 20px 15px 20px;
		width: 145px;
		height: 53px;
		transition: width  0.8s ease-in-out;		
		background-color: green;

		}
		
		#cnic
		{
			margin-left: 40px;
			height: 47px;
			margin-top: 20px;
			width: 220px;
		box-shadow: 4px 3px 15px; 
		text-indent: 15px;
		font-size: 15px;
		cursor: pointer;
		border-radius:10px 20px 15px 20px; 

		}
		#cnic:hover
		{
	 	
			height: 50px;
		}

</style>
</head>
<body>

<fieldset>
	<form method="post" action="nn.php">
	<legend>
		SELECTION CRITERIA	
	</legend>
<table>
	<tr>
		<td>
			Select Your City
		</td>
		<td>
			<select name="referrer" id="hear-about">
<option value="Karachi" id="Karachi">Karachi</option>
<option value="Hyderabad" id="Hyderabad">Hyderabad</option>
<option value="Sukkur" id="Sukkur">Sukkur</option>
<option value="Nawabshah" id="Nawabshah">Nawabshah</option>
</select>

		</td>
	</tr>
	<tr>
		<td>
			Vote For NA
		</td>
		<td>
				<select name="referrer" id="hear-about">
<option value="243">243</option>
<option value="244">244</option>
<option value="245">245</option>
<option value="246">246</option>
</select>
			
		</td>
	</tr>
	<tr>
		<td class="selectmember">
			Select Your Member
		</td>
		<td>
				<select name="referrer" id="hear-about">
<option value="Imran Khan" id="Imran Khan">Imran Khan (PTI)</option>
<option value="Farooq Satar" id="Farooq Satar">Farooq Satar (MQM)</option>
<option value="Mustafa Kamal" id="Mustafa Kamal">Mustafa Kamal (PSP)</option>
<option value="Shehla Raza" id="Shehla Raza">Shehla Raza (PPP)</option>
</select>
			
		</td>
	<tr>
		<td>
			Vote For PS
		</td>
		<td>
			<select name="referrer" id="hear-about">
<option value="222" id="222">222</option>
<option value="223" id="223">223</option>
<option value="224" id="224">224</option>
<option value="225" id="225">225</option>
</select>

		</td>
	</tr>
		<tr>
		<td class="selectmember">
			Select Your Member
		</td>
		<td>
				<select name="referrer" id="hear-about">
<option value="Imran Khan" id="Imran Khan">Imran Khan (PTI)</option>
<option value="Farooq Satar" id="Farooq Satar">Farooq Satar (MQM)</option>
<option value="Mustafa Kamal" id="Mustafa Kamal">Mustafa Kamal (PSP)</option>
<option value="Shehla Raza" id="Shehla Raza">Shehla Raza (PPP)</option>
</select>		
		</td>
	</tr>
<tr>
	<td>
	
		<input type="text" name="cnic" id="cnic" placeholder="Enter your Cnic Number" required="required">
	</td>
</tr>
</table>
<input type="submit" value="VOTE" name="submit"  class="submit">
</form>
</fieldset>



	</body>
</html>
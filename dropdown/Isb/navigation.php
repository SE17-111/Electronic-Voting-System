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
<option value="Islamabad" id="Islamabad">Islamabad</option>
</select>

		</td>
	</tr>
	<tr>
		<td>
			Vote For NA
		</td>
		<td>
				<select name="referrer" id="hear-about">
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
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
<option value="Shahid Khaqan Abbasi" id="Shahid Khaqan Abbasi">Shahid Khaqan Abbasi (PML-N)</option>
<option value="Choudhary Hanif" id="Choudhary Hanif">Choudhary Hanif (PPP)</option>
<option value="Farooq Haider" id="Farooq Haider">Farooq Haider (IND)</option>
</select>
			
		</td>
	<tr>
		<td>
			Vote For PS
		</td>
		<td>
			<select name="referrer" id="hear-about">
<option value="58" id="58">58</option>
<option value="59" id="59">59</option>
<option value="56" id="56">56</option>
</select>

		</td>
	</tr>
		<tr>
		<td class="selectmember">
			Select Your Member
		</td>
		<td>
				<select name="referrer" id="hear-about">
<option value="Raza Haroon" id="Raza Haroon">Raza Haroon (PTI)</option>
<option value="Ahmed Ali" id="Ahmed Ali">Ahmed Ali (PML-N)</option>
<option value="Fakhru Din G Ibrahim" id="Fakhru Din G Ibrahim">Fakhru Din G Ibrahim (IND)</option>
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
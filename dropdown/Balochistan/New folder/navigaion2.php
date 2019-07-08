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
			box-shadow: 3px 2px 13px; 
		border-radius: 40px 10px 25px;
		margin-left: 20px;
		width:70px; 
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
			margin-top: 50px;
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

</style>
</head>
<body>





<form method="post" action="nn.php">
<ul>
	<li>
		<a href="../index.html">Home</a>
	</li>
	<li class="dropdown">
    <a href="">Province</a>
    <div class="dropdown-content">
      <a href="../dropdown/Balochistan/navigaion2.html">Balochistan</a>
      <a href="../dropdown/punjab/navigaion2.html">Punjab</a>
      <a href="../dropdown/Sindh/navigaion2.html">Sindh</a>
      <a href="../dropdown/KPK/navigaion2.html">KPK</a>
      <a href="../dropdown/Isb/navigaion2.html">Islamabad</a>
    </div>
  </li>
	</li>
	<li>
		<a href="../checkvote/polling.html">Check Vote</a>
	</li>
	<li>
		<a href="../Contact us/contact.html">Contact us</a>
	</li>
	<li>
		<a href="../Team/navigaion2.html">Team</a>
	</li>
	<li>
		<a href="../Feedback/navigaion2.html">Feedback</a>
	</li>
	<li>
		<a href="#About us">About us</a>
	</li>
</ul>
<fieldset>
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
<option value="lahore" id="lahore" id="google">Hyderabad</option>
<option value="Islamabad" id="Islamabad">Sukkur</option>
<option value="rawalpindi" id="rawalpindi">Nawabshah</option>
</select>

		</td>
	</tr>
	<tr>
		<td>
			Vote For NA
		</td>
		<td>
			<select name="referrer" id="hear-about">
<option value="1" id="1">1</option>
<option value="2" id="2">2</option>
<option value="3" id="3">3</option>
<option value="4" id="4">4</option>
</select>

		</td>
	</tr>
		<tr>
		<td>
			Select Your Party
		</td>
		<td>
				<select name="referrer" id="hear-about">
<option value="PTI" id="PTI">PTI</option>
<option value="APML" id="APML">APML</option>
<option value="PMLN" id="PMLN">PMLN</option>
<option value="PPP" id="PPP">PPP</option>
</select>
			
		</td>
	</tr>

	<tr>
		<td>
			Vote For PS
		</td>
		<td>
			<select name="referrer" id="hear-about">
<option value="1" id="1">1</option>
<option value="2" id="2">2</option>
<option value="3" id="3">3</option>
<option value="4" id="4">4</option>
</select>

		</td>
	</tr>
	<tr>   <td>Cnic: <input type="text" name="cnic" id="cnic"></td></tr>

</table>
<input type="submit" value="VOTE"  class="submit">
</fieldset>
</form>



	</body>
</html>
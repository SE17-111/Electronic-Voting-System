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
		width:450px; 
		height:350px;
		background-color: white;
		box-shadow: 7px 8px 25px; 
		border-radius: 45px 0px 45px;
		border: 2px solid #333;
	}
	legend

{
	font-size: 44px;
	color: black;
	text-shadow: 4px 3px 15px; 
	text-align: center;
}

input[type="text"]:hover
{	
	height: 30px;
	box-shadow: 15px 8px 25px; 
	cursor: pointer;
	background-color: rgb(240,240,240);
}

input:focus
{
	box-shadow: 4px 3px 15px; 
	background-color: white; 
	width: 260px;
	height: 30px;
	padding: 16px 29px;
	border-radius: 10px 20px 15px 20px;
	letter-spacing: 2px;
	transition: width 0.5s ease-in-out;	
}
input
{	
	box-shadow: 5px 8px 25px; 
	color: black;
	margin-top: 30px;
	margin-left: 20px;
	width: 230px;
	height: 25px;
	padding: 16px 29px;
	border-radius: 10px 20px 15px 20px;
	letter-spacing: 2px;
}
td
{	
		padding: 1px;
}

.div2
{	
	position:absolute;
	margin-top: 120px;
	opacity: 0.7;
	border-radius: 10px 20px 25px;
	margin-left: 530px;
	padding:0px;
	/*background-color: #f1f1f1;*/
	width: 530px;
	height: 530px;
}
input[type="submit"]:focus
{
	border-color: 4px ridge #999;
	width: 350px;
	height: 55px;
	padding: 13px 23px;
	border-radius: 10px 20px 15px 20px;
	letter-spacing: 3px;
	transition: width 0.4s ease-in-out;		
}
input[type="submit"]:hover
{
	border-radius: 10px 20px 15px 20px;
	box-shadow: 5px 9px 15px; 
	background-color: #333;
	height: 60px;
	width: 155px;
	transition: width 0.4s ease-in-out;
}
input[type="submit"]
{
	margin-top: 15px;
	text-indent: 9px;
	border-radius: 10px 20px 15px 20px;
	margin-left: 75px;
	box-shadow: 5px 9px 15px; 
	color: white;
	width: 135px;
	height: 55px;
	background-color: green;
}

	.voter
		{
			position: relative;
			margin-top: 60px;
			float: right;
			margin-right: 60px;
			width:250px;
			height: 500px;
		}
		h1

		{
			color: green;
			text-shadow: 1px 2px 6px; 
		
			font-size:22px;  
		}
		p
		{
			font-size: 17px;
		}


</style>
	<link rel="stylesheet" type="text/css" href="polling2.css">
	<title></title>
</head>
<body>

<ul>
	<li>
		<a href="../index.html">Home</a>
	</li>
	<li class="dropdown">
    <a href="">Province</a>
    <div class="dropdown-content">
      <a href="../dropdown/Balochistan/navigaion2.php">Balochistan</a>
      <a href="../dropdown/punjab/navigaion2.php">Punjab</a>
      <a href="../dropdown/Sindh/navigaion2.php">Sindh</a>
      <a href="../dropdown/KPK/navigaion2.php">KPK</a>
      <a href="../dropdown/Isb/navigaion2.php">Islamabad</a>
    </div>
  </li>
	<li>
		<a href="polling.php">Check Vote</a>
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
	<li class="dropdown">
		<a href="">News</a>
		<div class="dropdown-content">
      <a href="../party logo/navigaion.html">Political Parties</a>
      <a href="../Check registration/navigaion.html">Check Registration</a>
      <a href="../About ecp/navigaion2.html">Constitutional Provisions</a>
    </div>
	</li>
	<li>
		<a href="../Chief/navigaion2.html">About us</a>
	</li>
</ul>



<div class="voter">
<h1>
ELIGIBILITY TO BE A VOTER :
	
</h1>
<p>
A person shall be entitled to be enrolled as a voter in an electoral area if he—
	
</p>

<p>
(a) is a citizen of Pakistan;
	
</p>
<p>
(b) is not less than eighteen years of age;
	
</p>
<p>
(c) possesses a National Identity Card issued by the National Database and Registration Authority at any time till the last day fixed for inviting claims, objections and applications for preparation, revision or correction of electoral rolls;
	
</p>
<p>
(d) is not declared by a competent court to be of unsound mind;
	
</p>
<p>
(e) is or is deemed under section 27 to be resident in the electoral area.
	
</p>
<p>
Explanation.—The National Identity Card issued by the National Database and Registration Authority shall be deemed to be valid for the purpose of registration as a voter or for casting vote in an election, notwithstanding the expiry of its validity period. 	
</p>
</div>



<div class="div2">
	<fieldset>
		<legend>
		Login	
		</legend>
		
	
	<form method="post" action="submit1.php">
		<table align="center">
			<tr>
		<td><input type="text"  name="name" id="name" placeholder="       Enter Your name" required="required">
			</td></tr>
			<tr>
			<td>
				<input type="text" name="cnic" id="cnic" placeholder="          45309-434****-9" required="required" size="13">	
			</td>
		</tr>
		<tr>
				<td>
				<pre>   <input type="submit" name="submit" id="submit" value="Check"></pre>	
				</td>
		</tr>
		</table>
	</form>
	</fieldset>
	
</div>

</body>
</html>

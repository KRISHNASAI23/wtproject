<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('Location:main.php#popup');
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="back3.css">
</head>
<body bgcolor="pink">
<form name="f1" action="details1.php" method="POST">
<table align="center">
<tr align="center">
<td>
<h1>Welcome to Recruitment Portal</h1>
<td>
<td align="right">
<a href="login.php">Logout</a>
</td>
</tr>
<tr>
<td>
<h2><marquee>Enter Your Details</marquee></h2>
</td>
</tr>
<tr>
<td>
<h3>FIRSTNAME</h3>
</td>
<td>
<input type="text" name="firstname" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>LASTNAME</h3>
</td>
<td>
<input type="text" name="lastname" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>DATEOFBIRTH</h3>
</td>
<td>
<input type="date" name="dateofbirth"/>
</td>
</tr>
<tr>
<td>
<h3>NATIONALITY</h3>
</td>
<td>
<input type="text" name="nationality" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>MOBILE NO</h3>
</td>
<td>
<input type="text" name="mobileno" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>EMAIL ADDRESS</h3>
</td>
<td>
<input type="text" name="email" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>SCHOOL</h3>
</td>
<td>
<input type="text" name="school" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>COLLEGE</h3>
</td>
<td>
<input type="text" name="college" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>SSC PERCENTAGE</h3>
</td>
<td>
<input type="number" name="ssc" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>INTERMEDIATE MARKS</h3>
</td>
<td>
<input type="number" name="inter" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>EAMCET RANK</h3>
</td>
<td>
<input type="number" name="eamcet" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>PHOTO</h3>
</td>
<td>
<input type="file" name="image" access=".img,.jpg,.jpeg,.png"/>
</td>
</tr>
<tr align="center">
<td>
<input type="Submit" value="Submit" name="Submit">
<input type="Reset" value="Reset" name="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>


<?php
if(isset($_POST['Submit']))
{
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$dob=$_POST['dateofbirth'];
	$na=$_POST['nationality'];
	$mn=$_POST['mobileno'];
	$em=$_POST['email'];
	$sch=$_POST['school'];
	$clg=$_POST['college'];
	$ssc=$_POST['ssc'];
	$inter=$_POST['inter'];
	$eam=$_POST['eamcet'];
	$img=$_POST['image'];
	$con=new mysqli("localhost","root",'',"mydb");
	$sql="insert into validate(firstname,lastname,dateofbirth,nationality,mobileno,email,school,college,ssc,inter,eamcet,image,status)values
	('$fn','$ln','$dob','$na','$mn','$em','$sch','$clg','$ssc','$inter','$eam','$img','Not Eligible');";
	if($con->query($sql)===true)
	{
		echo "<h1>Details Entered Successfully<h1>";
	}
	    else
	    {
		     echo "Error:".$sql."<br>".$con->error;
	    }
	$con->close();
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back6.css">
</head>
<body>
<form action="login1.php" method="POST">
<table border="0" width="100%" cellspacing="20">
<tr>
<td align="center">
<img src="admin1.jpg" width="100" height="100">
</td>
</tr>
<tr>
<td align="center">
<input type="text" name="t1" maxlength="25" placeholder="Enter username"/><br><br>
<input type="password" name="t2" placeholder="Enter Password"/><br><br>
<button name="login" value="click">SIGN IN</button>
</table>
</body>
</html>

<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","mydb");
	$user=$_POST['t1'];
	$pass=$_POST['t2'];
	$res=mysqli_query($con,"SELECT * from administrator WHERE username='$user' AND password='$pass'");
	$row=mysqli_fetch_assoc($res);
	if(!$row)
	{
		echo "<h1>Enter valid credentials</h1>";
	}
	else
	{
		session_start();
		$_SESSION['user']=$user;
		header('Location: home1.php');
		
	}
}
?>
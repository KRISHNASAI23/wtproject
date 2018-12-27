<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('Location:main.php#popup');
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="back7.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<h1 align="center">Sree Vidyanikethan Engineering College</h1>
</td>
<td align="right">
<a href="main.php">Logout</a>
</td>
</tr>
<tr align="center">
<td>
<h3>Welcome Admin</h3>
</td>
</tr>
<tr>

<tr>
<td>
<a href="Collegedetails.php">College_Details</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="student.php">Student_Details</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="status.php">Final_list</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="check.php">Finalize List</a>
</td>
</tr>
<table align="center">
<tr>
<td>
<img src="logo-1.png" width="400" height="200"/>
</td>
</tr>
</table>
<table align="center">
<tr>
<td>
<h2 align="center">Welcome to Sree Vidyanikethan Family</h2>
</td>
</tr>
</body>
</html>
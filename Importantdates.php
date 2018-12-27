<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('Location:main.php#popup');
}
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="back8.css">
</head>
<body>
<h2>Important Dates</h2>
<h3>Applying Dates : Jan 12 - May 30 , 2018<br><hr><br>
Admission Dates : Jun 1 - Jul 20 , 2019 <br><hr><br>
Joining Dates : Jul 21 - Aug-30 , 2019 <hr></h3>
</body>
</html>
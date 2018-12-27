<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('Location:main.php#popup');
}
?>

<?php
$con=new mysqli("localhost","root","","mydb");
$sql="select * from validate";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{
	echo "<table border=2 width=90%>";
	echo "<tr><th>Firstname</th><th>Lastname</th><th>Email</th><th>Status</th></tr>";
	while($row=$ans->fetch_assoc())
	{
		echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['status']."</td></tr>";
	}
	echo "</table>";
}
else
{
	echo "no record found";
}
?>
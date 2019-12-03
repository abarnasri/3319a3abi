<?php
	session_start();
	include_once 'connecttodb.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Abarna's Doctor Database</title>
	<link rel="stylesheet" type="text/css" href="asn3.css">
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1> Abarna's Doctor Database </h1>


<br>
Order Doctors by: <br>
<br>
<form action="ordereddocs.php" method="post">
<form action="#" method="post">
<br>
<input name="radio" type="radio" value="First Name Increasing">First Name Increasing
<br>
<input name="radio" type="radio" value="First Name Decreasing">First Name Decreasing
<br>
<input name="radio" type="radio" value="First Name Ascending">Last Name Increasing
<br>
<input name="radio" type="radio" value="First Name Descending">Last Name Decreasing
<br>
<?php 
include'ordereddocs.php'; 
?>
<form>
<input name="submit" type="submit" value="Order Doctors">
</form>

</body>
</html>

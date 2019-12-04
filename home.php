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
<h1> Abarna's Doctor Database </h1>


<br>
Order Doctors by:
<br>
<form action="ordereddocs.php" method="post">
<br>
<input name="radio" type="radio" value='First Name Increasing'>First Name Increasing
<br>
<input name="radio" type="radio" value='First Name Decreasing'>First Name Decreasing
<br>
<input name="radio" type="radio" value='Last Name Ascending'>Last Name Increasing
<br>
<input name="radio" type="radio" value='Last Name Descending'>Last Name Decreasing
<br>
<?php 
include'ordereddocs.php'; 
?>
<form>
<input name="submit" type="submit" value="Order Doctors">
</form>

</body>
</html>

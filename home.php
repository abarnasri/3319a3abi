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
<input name="radio" type="radio" value='Last Name Increasing'>Last Name Increasing
<br>
<input name="radio" type="radio" value='Last Name Decreasing'>Last Name Decreasing
<br>

<form>
<input name="submit" type="submit" value="Order Doctors">
</form>

<br>
Doctors Licensed Before A Certain Date:
<br>
<form action="docslicbefore.php" method="post">
<br>
Enter Date (YYYY-MM-DD): <input type="text" name="date">
<br>
<form>
<input type="submit" value="Get Doctors Before This Date">
</form>
	
	
	

</body>
</html>

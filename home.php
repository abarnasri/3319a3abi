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
	<b>Order Doctors by:</b>
<form action="ordereddocs.php" method="post">
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
	<b>Doctors Licensed Before A Certain Date</b>
<form action="docslicbefore.php" method="post">
Enter Date (YYYY-MM-DD): <input type="text" name="date">
<br>
<form>
<input type="submit" value="Get Doctors Before This Date">
</form>
	
<br>
	<b>Enter New Doctor </b>
<form action="newdoc.php" method="post" enctype="multipart/form-data">
First Name: <input type="text" name="first">
<br>
Last Name: <input type="text" name="last">
<br>
Speciality: <input type="text" name="speciality">
<br>	
License Date (YYYY-MM-DD): <input type="text" name="licenDate">
<br>	
License No.(e.g. AA111): <input type="text" name="LicenNum">
<br>
Hospital Name: 
<input name="hosp" type="radio" value='ABC'>Victoria, London ON
<input name="hosp" type="radio" value='DDE'>Victoria, Victoria BC
<input name="hosp" type="radio" value='BBC'>St.Joseph, London ON
<br>
Add Image of Doctor: 
<form>
<input type="file" name="file" id="file"><br>
<input type="submit" value="Add Doctor">
</form>
	
	

</body>
</html>

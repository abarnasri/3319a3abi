<!DOCTYPE html>
<html>
<head>
	<title>Abarna's Doctor Database</title>
	<link rel="stylesheet" type="text/css" href="asn3.css">
</head>
<body>
<?php
include 'uploaddocimage.php';
include 'connecttodb.php';
?>
<h1>New Doctor:</h1>
<ol>
<?php
	//based on previous input submit button from home page
	$firstName = $_POST["first"];
	$lastName = $_POST["last"];
	$spec = $_POST["speciality"];
	$date = (string)$_POST["licenDate"];
	$licNum = $_POST["LicenNum"];
	$hosp = $_POST["hosp"];
	//do query
	$query1 = 'SELECT * FROM doctor';
	$result1=mysqli_query($connection,$query1);
	if (!$result1) {
		die("Database query failed.");
	}
	$query2 = 'INSERT INTO doctor VALUES("' . $licNum . '","' . $firstName . '","' . $lastName . '","' . $speciality . '", "' . $date . '", "'. $hosp .'", "' .$docimage. '")';
	$result2=mysqli_query($connection,$query2);
	//if query fails
	if (!$result2) {
		die("Database query failed.");
	}
	echo "Doctor Added.";
	mysqli_close($connection);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

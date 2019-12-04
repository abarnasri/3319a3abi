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
<h1>Doctor Information:</h1>
<ol>
<?php
	//based on previous submit button
	$docLicenseNum = $_POST["doctors"];
	//do query
	$query = 'SELECT * FROM doctor, hospital WHERE doctor.hosWorksAt=hospital.hosCode AND doctor.docLicNum="' . $docLicenseNum. '"';
	$result=mysqli_query($connection,$query);
	//if query fails
	if (!$result) {
		die("Database query failed.");
	}
	//go through each row and print out the necessary information
	while ($row=mysqli_fetch_assoc($result)){
		echo "<li>";
		echo "<b>Doctor Name: </b>" . $row["firstName"] . " " . $row["lastName"] . " " . "<b>License No.: </b>" . " " . $row["docLicNum"] . " " . "<b>License Date: </b>" . " " . $row["licenseDate"] . " " . "<b>Specialty: </b>" . " " . $row["speciality"] . " " . "<b>Hospital Name: </b>" . " " . $row["name"] . "</li>";
		echo '<img src="'.$row["docimage"].'" height="400" width="400">';
	}
	mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

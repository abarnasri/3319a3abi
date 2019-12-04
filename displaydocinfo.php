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
	$docLicenseNum = $_POST["doctors"];
	$query = 'SELECT * FROM doctor, hospital WHERE doctor.hosWorksAt=hospital.hosCode AND doctor.docLicNum="' . $docLicenseNum. '"';
	$result=mysqli_query($connection,$query);
	if (!$result) {
		die("Database query failed.");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo "<li>";
		echo "<b>Doctor Name: </b>" . $row["firstName"] . " " . $row["lastName"] . " " . "<b>License No.: </b>" . " " . $row["docLicNum"] . " " . "<b>License Date: </b>" . " " . $row["licenseDate"] . " " . "<b>Specialty: </b>" . " " . $row["specialty"] . " " . "<b>Hospital Name: </b>" . " " . $row["hosName"] . "</li>";
		echo '<img src="'.$row["docimage"].'" height="80" width="80">';
	}
	mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

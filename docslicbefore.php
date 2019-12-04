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
<h1>Doctors:</h1>
<ul>

<?php
	//based on submit button from home
	$date = $_POST["date"];
	//get all doctors licensed before given date
	$query = 'SELECT * FROM doctor WHERE licenseDate < "' . $date . '"';
	$result = mysqli_query($connection,$query);
	//if query fails 
	if (!$result) {
		die("Database query failed.");
	}
	//go through each row and print out the necessary information
	while ($row=mysqli_fetch_assoc($result)){
		echo "<li>";
		echo "<b>Doctor Name: </b>" . $row["firstName"] . " " . $row["lastName"] . " " . "<b>Speciality: </b>" . " " . $row["speciality"] . " " . "<b>License Date: </b>" . " " . $row["licenseDate"] . "</li>"; 
		echo '<img src="'.$row["docimage"].'" height="400" width="400">';
	}
	mysqli_free_result($result);
?>
</ul>
<?php
   mysqli_close($connection);
?>
</body>
</html>

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
<h1>Ordered Doctors:</h1>

<?php

	
if (isset($_POST['submit'])) { 
	if(($_POST['radio'])=='First Name Increasing') {
		$query = 'SELECT * FROM doctor ORDER BY firstName ASC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo '<form action="displaydocinfo.php" method="POST">';
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["docLicNum"];
			echo '">' . $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<input name="getinfo" type="submit" value="Display Doctor Info">';
	}
	
	if(($_POST['radio'])=='First Name Decreasing') {
		$query = 'SELECT * FROM doctor ORDER BY firstName DESC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo '<form action="displaydocinfo.php" method="POST">';
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["docLicNum"];
			echo '">' . $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<input name="getinfo" type="submit" value="Display Doctor Info">';
	}

	if(($_POST['radio'])=='Last Name Increasing') {
		$query = 'SELECT * FROM doctor ORDER BY lastName ASC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo '<form action="displaydocinfo.php" method="POST">';
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["docLicNum"];
			echo '">' . $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<input name="getinfo" type="submit" value="Display Doctor Info">';
	}

	if(($_POST['radio'])=='Last Name Decreasing') {
		$query = 'SELECT * FROM doctor ORDER BY lastName DESC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo '<form action="displaydocinfo.php" method="POST">';
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["docLicNum"];
			echo '">' . $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<input name="getinfo" type="submit" value="Display Doctor Info">';
	}
}
?>
<?php
   mysqli_close($connection);
?>
	
</body>
</html>

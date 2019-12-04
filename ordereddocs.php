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

if (isset($_POST['submit'])){
	$answer = $_POST['radio'];
	if ($answer == 'First Name Increasing'){
		$query = "SELECT * FROM doctor ORDER BY firstName ASC";
		$result = mysqli_query($connection,$query);
	}
	elseif ($answer == 'First Name Decreasing'){
		$query = "SELECT * FROM doctor ORDER BY firstName DESC";
		$result = mysqli_query($connection,$query);
	}
	elseif ($answer == 'Last Name Increasing'){
		$query = "SELECT * FROM doctor ORDER BY lastName ASC";
		$result = mysqli_query($connection,$query);
	}
	elseif ($answer == 'Last Name Decreasing'){
		$query = "SELECT * FROM doctor ORDER BY lastName DESC";
		$result = mysqli_query($connection,$query);
	}
	
	if (!$result) {
		die("Databases query failed.");
	}
	echo '<form action="docInfo.php" method="POST">';
	echo "<br>";	
	echo "<ol>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<input name="doc" type="radio" value="';
		echo $row[docLicNum];
		echo '">' . $row[firstName]. " " . $row[lastName];
		echo "<br>";
	}
	mysqli_free_result($result);
echo "</ol>";
echo '<input name="info" type="submit" value="See info">';
echo '</form>';
echo "<br>";
echo "<br>";
echo '<form action = "Home.php" method = "get">';
echo '<input type="submit" value = "Home Page">';
echo '</form>';
}

?>
<?php
   mysqli_close($connection);
?>
	
</body>
</html>

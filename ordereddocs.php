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
	if(isset($_POST['radio'])=='First Name Increasing') {
		echo '<form action="displaydocinfo.php" method="post">';
		$query = 'SELECT * FROM doctor ORDER BY firstName ASC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value=""';
			echo $row["licenseNum"];
			echo $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<?php'
		echo 'include'displaydocinfo.php'; 
		echo '?>';
		echo '<input name="submit" type="submit" value="Display Doctor Info">;
	}
	
	if(isset($_POST['radio'])=='First Name Decreasing') {
		echo '<form action="displaydocinfo.php" method="post">';
		$query = 'SELECT * FROM doctor ORDER BY firstName DESC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["licenseNum"];
			echo $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<form>';
		echo '<input name="submit" type="submit" value="Display Doctor Info">;
		echo '</form>';
	}

	if(isset($_POST['radio'])=='Last Name Increasing') {
		echo '<form action="displaydocinfo.php" method="post">';
		$query = 'SELECT * FROM doctor ORDER BY lastName ASC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["licenseNum"];
			echo $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<form>';
		echo '<input name="submit" type="submit" value="Display Doctor Info">;
		echo '</form>';
	}

	if(isset($_POST['radio'])=='Last Name Decreasing') {
		echo '<form action="displaydocinfo.php" method="post">';
		$query = 'SELECT * FROM doctor ORDER BY lastName DESC';
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("databases query failed.");
		}
		echo "<ol>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<br>";
			echo '<input type="radio" name="doctors" value="';
			echo $row["licenseNum"];
			echo $row["firstName"] . " " . $row["lastName"] . "<br>";
		}
		mysqli_free_result($result);
		echo "</ol>";
		echo '<form>';
		echo '<input name="submit" type="submit" value="Display Doctor Info">;
		echo '</form>';
	}
}
?>
</body>
</html>

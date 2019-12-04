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

<php?
	if (isset($_POST['getinfo'])){
		$docinfo = $_POST['getinfo'];
			$query = 'SELECT * FROM doctor, hospital WHERE doctor.hosWorksAt = hospital.hosCode AND doctor.docLicNum ="'.$docinfo. '"';
			$result=mysqli_query($connection,$query);
		if (!$result) {
         die("Database query failed.");
		}
		
		echo '<h3 align =:"center">';
		echo "Name: ". 
		
?>
		
</body>
</html>

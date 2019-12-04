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
  $firstName = $_POST["first"];
  $lastName = $_POST["last"];
  $spec = $_POST["speciality"];
  $date = (string)$_POST["licenDate"];
  $licNum = $_POST["LicenNum"];
  $hosp = $_POST["hosp"];
  





?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

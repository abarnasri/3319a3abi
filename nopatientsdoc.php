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
<h1>Doctors With No Patients: </h1>
<ol>
<?php
    $query = 'SELECT doctor.firstName, doctor.lastName FROM doctor WHERE doctor.docLicNum NOT IN (SELECT treats.docLicNum from treats)';
    $result=mysqli_query($connection,$query);
    //if query fails
	  if (!$result) {
		die("Database query failed.");
	  }
    //go through each row and print out the necessary information
    while ($row=mysqli_fetch_assoc($result)){
		  echo "<li>";
      echo "<b>Doctor Name: </b>" . $row["firstName"] . " " . $row["lastName"] . "</li>";
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

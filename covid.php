<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body style="background-color:#4978bc;">
<?php
include 'connectdb.php';
?>
<h1 style="color:white;"> Covid Vaccination Portal </h1>
<p style="color:white;">Book your appointment online and see additional information.</p>
<img src="covidimage.png">

<h2 style="color:white;"> Record a Vaccination </h2>
<p style="color:white;"> Enter your info below to access data <p>
<label for="OHIP" style="color:white;">OHIP Number:</label><br>
<input type="text" id="OHIP" name="OHIP"><br>
<input type="submit" value="Submit">
<p style="color:white;"> Not recognized? Click Here:<p>
<p><a href="http://localhost/patient.php">Patient Registration</a></p>

<h3 style="color:white;"> Vaccine Information </h3>
<p style="color:white;"> Click here to learn about vaccine locations: <p>
<p><a href="http://localhost/vaccinelocation.php">Vaccine Information</a></p>
</body>
<html>
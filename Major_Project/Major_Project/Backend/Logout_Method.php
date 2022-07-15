<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta http-equiv="refresh" content="5;../index.php">
	<script src="https://kit.fontawesome.com/844488b1fe.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Frontend/css/styles.css" rel="stylesheet" />
</head>
<body>
	<center><h1>logout succesful</h1><br>
<p>redirect to home page.....in 5s,Thank you.</p></center>

</body>
</html>
<?php
$dbHost = "localhost";
$dbDatabase = "osis_db";
$dbPasswrod = "";
$dbUser = "root";
$mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);


//global $connection;
$con = mysqli_connect($dbHost, $dbUser, $dbPasswrod, $dbDatabase) or die ("error");
// Check connection
if(mysqli_connect_errno($con))  echo "Failed to connect MySQL: " .mysqli_connect_error();

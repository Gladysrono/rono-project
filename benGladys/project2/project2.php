<?php
$server="127.0.0.1";
$user="root";
$pass="";
$databasename="project2";
$conn=mysqli_connect($server,$user,$pass) or die("could not establish a secure connection");
mysql_select_db($conn,$databasename) or die("could not connect to the database specified");


?>
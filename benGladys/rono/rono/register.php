<?php
$server="127.0.0.1";
$user="root";
$pass="";
$database="rono";
$conn=mysqli_connect($server,$user,$pass) or die("could not establish a secure connection to server");
mysqli_select_db($conn,$database) or die ("could not connect to the database");
if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];



$sql="INSERT INTO register (fname,dob,gender) VALUES('$fname','$dob','$gender')";

if(mysqli_query($conn,$sql)==TRUE){


echo"registration was successfull";
}

else{

echo"registration was not  successfull";
}




}





?>
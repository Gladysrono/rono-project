<?php

$server="127.0.0.1";
$user="root";
$pass="";
$database="myfirstproject";
$conn=mysqli_connect($server,$user,$pass) or die("could not establish a secure connection to server");
mysqli_select_db($conn,$database) or die ("could not connect to the database");
if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$sql="INSERT INTO project (fname,lname,email,phonenumber) VALUES('$fname','$lname','$email','$phone')";

if(mysqli_query($conn,$sql)==TRUE){

    echo"data saved successfully";
}

else{
    echo"data not saved successfully";
}




}




?>
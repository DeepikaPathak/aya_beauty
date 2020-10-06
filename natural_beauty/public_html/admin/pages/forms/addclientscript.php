<?php
//session_start();
    
require("../../../includes/common.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$project=$_POST['project'];
$cost=$_POST['cost'];
$duration=$_POST['duration'];
$description=$_POST['description'];

$query="INSERT INTO client (fname,lname,contact,project,email,cost,duration,description) VALUES ('$fname','$lname','$contact','$project','$email','$cost','$duration','$description')";

if (!mysqli_query($con,$query))
{
    echo '<script> alert("Client not registered! some error occured please try again!"); </script>';
    echo "<script> window.location.href='addclient.php'; </script>";
}
else{
    echo "<script> window.location.href='client.php'; </script>";
    //header('location:client.php');
}
?>
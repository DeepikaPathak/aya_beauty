<?php
//session_start();
    
require("../../../includes/common.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$project=$_POST['project'];
$startdate=$_POST['startdate'];
$duration=$_POST['duration'];

$query="INSERT INTO team (fname,lname,project,startdate,duration) VALUES ('$fname','$lname','$project',DATE '$startdate','$duration')";

if (!mysqli_query($con,$query))
{
    echo '<script> alert("Client not registered! some error occured please try again!"); </script>';
    echo "<script> window.location.href='addteam.php'; </script>";
}
else{
    echo "<script> window.location.href='team.php'; </script>";
    //header('location:team.php');
}
?>
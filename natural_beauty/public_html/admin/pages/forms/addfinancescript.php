<?php
//session_start();
    
require("../../../includes/common.php");
$project=$_POST['project'];
$dated=$_POST['date'];
$revenue=$_POST['revenue'];
$expenses=$_POST['expenses'];
$query="INSERT INTO finance (project,date,revenue,expenses) VALUES ('$project',DATE '$dated','$revenue','$expenses')";

if (!mysqli_query($con,$query))
{
    echo '<script> alert("Expenses not uploades! some error occured please try again!"); </script>';
    echo "<script> window.location.href='addteam.php'; </script>";
}
else{
    echo "<script> window.location.href='finance.php'; </script>";
    //header('location:finance.php');
}
?>
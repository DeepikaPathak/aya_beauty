<?php
	require('../../../includes/common.php');
if ($_GET)
{
    $id = mysqli_real_escape_string($con, $_GET['id']);
     $un = mysqli_real_escape_string($con, $_GET['un']);
    
    if($un=='1')
    $query = " UPDATE `manufacts` SET `status` = '1' WHERE `manufacts`.`id` = '". $id. "';";
    else
    $query = " UPDATE `manufacts` SET `status` = '0' WHERE `manufacts`.`id` = '". $id. "';";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    if($result)
    {
        if($un=='1')
            echo '<script>alert("Unbolcked successfully"); window.history.back();</script>';
        else
            echo '<script>alert("Blocked successfully"); window.history.back();</script>';
    }
    else
    {
       echo '<script>alert("Oops! something went wrong. try again"); window.history.back();</script>';
    }
    exit();
}
echo '<script>alert("Oops! something went wrong. try again"); window.history.back();</script>';


?>
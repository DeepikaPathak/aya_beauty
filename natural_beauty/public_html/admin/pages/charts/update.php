<?php
	require('../../../includes/common.php');
if ($_GET)
{
    $id = mysqli_real_escape_string($con, $_GET['id']);
    $p = mysqli_real_escape_string($con, $_GET['p']);

    $query = " UPDATE `manu_products` SET `increment` = '". $p. "' WHERE `manu_products`.`id` = '". $id. "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    if($result)
    {
       echo '<script>alert("Updated successfully"); window.history.back();</script>';

    }
    else
    {
       echo '<script>alert("Oops! something went wrong. try again"); window.history.back();</script>';

        
    }
    exit();
}
echo '<script>alert("Oops! something went wrong. try again"); window.history.back();</script>';


?>
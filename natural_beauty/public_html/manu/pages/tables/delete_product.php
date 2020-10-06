<?php
	require("../../../includes/common.php");
	$id = $_GET['id'];
	$query = "DELETE FROM manu_products WHERE id = $id ";
	$result = mysqli_query($con, $query);
	if($result)  {
		header('location: ../../manupage.php');
	}
	else  {
		echo "some error occured. Please try again";
	}


?>
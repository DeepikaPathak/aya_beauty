<?php
  require "../../../includes/common.php";
?>
<?php
	$id = $_POST['id'];
    $tech = $_POST['main'];

     $query = "UPDATE maintain
SET cost = $tech
WHERE id = $id";

  $result = mysqli_query($con, $query)or die($mysqli_error($con));

  
  if ($result) {
    
    header('location: maintainance.php');
  } else {  
 echo '<script> alert("Could not update maintainance cost! some error occured please try again!"); </script>';
              echo "<script> window.location.href='maintainance.php'; </script>";
   
    
  }
    
?>
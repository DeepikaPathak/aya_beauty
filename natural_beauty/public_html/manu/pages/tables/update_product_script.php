<?php
  //session_start();
  
  require("../../../includes/common.php");
  $id = $_GET['id'];

  // $p_name = $_POST['product_name'];
  // $p_name = mysqli_real_escape_string($con, $p_name);

  $b_price = $_POST['base_price'];
  $b_price = mysqli_real_escape_string($con, $b_price);

  $d_time = $_POST['delivery_time'];
  $d_time = mysqli_real_escape_string($con, $d_time);

  // $desc = $_POST['description'];
  // $desc = mysqli_real_escape_string($con, $desc);

  
  $query = "UPDATE manu_products
SET base_price = $b_price, delivery_time= $d_time
WHERE id = $id";

  $result = mysqli_query($con, $query)or die($mysqli_error($con));

  
  if ($result) {
    
    header('location: ../../manupage.php');
  } else {  

    echo "Error occured! Please try again...";
   
    
  }
?>

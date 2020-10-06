<?php
  require("../../../includes/common.php");
   $target_dir = "uploads/";//create this folder
   $prod_img = "";
  $e=0;
  if($_FILES['file_img1']['name']!=''){
         $img_name = $_FILES['file_img1']['name'];
       
         $img_arr = explode(".",$img_name);

        $img_type = strtolower($img_arr[1]);


        if($img_type=='png' || $img_type=='jpeg' || $img_type=='jpg' || $img_type=='gif'){
            $prod_img1 = time().'_'.$_FILES['file_img1']['name'];
            $prod_img1 = str_replace(' ', '_', $prod_img1);
             move_uploaded_file($_FILES['file_img1']['tmp_name'],$target_dir.$prod_img1);
         } else {
            $e=1;
       $img_error = 'Please Upload Valid Image Type';
      
         }
     }

     if($_FILES['file_img2']['name']!=''){
         $img_name = $_FILES['file_img2']['name'];
       
         $img_arr = explode(".",$img_name);

        $img_type = strtolower($img_arr[1]);


        if($img_type=='png' || $img_type=='jpeg' || $img_type=='jpg' || $img_type=='gif'){
            $prod_img2 = time().'_'.$_FILES['file_img2']['name'];
            $prod_img2 = str_replace(' ', '_', $prod_img2);
             move_uploaded_file($_FILES['file_img2']['tmp_name'],$target_dir.$prod_img2);
         } else {
            $e=1;
       $img_error = 'Please Upload Valid Image Type';
      
         }
     }

     if($_FILES['file_img3']['name']!=''){
         $img_name = $_FILES['file_img3']['name'];
       
         $img_arr = explode(".",$img_name);

        $img_type = strtolower($img_arr[1]);


        if($img_type=='png' || $img_type=='jpeg' || $img_type=='jpg' || $img_type=='gif'){
            $prod_img3 = time().'_'.$_FILES['file_img3']['name'];
            $prod_img3 = str_replace(' ', '_', $prod_img3);
             move_uploaded_file($_FILES['file_img3']['tmp_name'],$target_dir.$prod_img3);
         } else {
            $e=1;
       $img_error = 'Please Upload Valid Image Type';
      
         }
     }
  $category = $_POST['category'];
  $category = mysqli_real_escape_string($con, $category);

  $subcategory = $_POST['subcategory'];
  $subcategory = mysqli_real_escape_string($con, $subcategory);

  $p_name = $_POST['product_name'];
  $p_name = mysqli_real_escape_string($con, $p_name);

  $p_comp = $_POST['product_comp'];
  $p_comp = mysqli_real_escape_string($con, $p_comp);

  $b_price = $_POST['base_price'];
  $b_price = mysqli_real_escape_string($con, $b_price);

  $desc = $_POST['description'];
  $desc = mysqli_real_escape_string($con, $desc);
  
  if($e==0){
 $type = "manu";
 
  
  $query = "INSERT INTO products (category,subcategory,productName,productCompany,productPrice,productDescription,adder_id,adder_type, productImage1, productImage2, productImage3) 
            VALUES ('" . $category . "','" . $subcategory . "','" . $p_name . "','" . $p_comp . "','" . $b_price . "','" . $desc . "','" . $_SESSION['manu_id'] . "','" . $type . "','" . $prod_img1 . "','" . $prod_img2 . "','" . $prod_img3 . "')";//add one column and change this
// 
  $result = mysqli_query($con, $query);
//echo $result;

  
      if ($result) {
         echo '<script> alert("Product added successfully!"); </script>';
        echo "<script> window.location.href='../../manupage.php'; </script>";
        // header('location: ../../manupage.php');
      } else {  
        echo '<script> alert("Error occured! Please try again..."); </script>';
        echo "<script> window.location.href='../../manupage.php'; </script>";// change this 
      }
    
  }
  else{
    echo '<script> alert("Please Upload Valid Image Type"); </script>';
    echo "<script> window.location.href='sellprod.php'; </script>";//change this
  }
  
?>



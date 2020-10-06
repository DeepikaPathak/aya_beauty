<?php
  //session_start();
  
  require("includes/config.php");

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  $password = $_POST['psw'];
  $password = md5(mysqli_real_escape_string($con, $password));
  $password = ($password);
// Query checks if the email and password are present in the database.
  $query = "SELECT * FROM admin WHERE email='" . $email . "' AND password='" . $password . "'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));

  $num = mysqli_num_rows($result);
  // If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
  if ($num == 0) {
    $m = 'msg="Incorrect E-mail id or Password"';
         echo "<script>window.location.href='loginadmin.php?".$m."';</script>";
    // $error = "Incorrect E-mail id or Password";
    // header('location: loginadmin.php?msg=' . $error);
  } else {
     $query = "SELECT * FROM admin WHERE email='$email'";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                
                $row = mysqli_fetch_array($result);
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION["aid"] = $row["id"];
    echo "<script> window.location.href='admin/adminpage.php'; </script>";
    // header('location: admin/adminpage.php');
    
  }
?>


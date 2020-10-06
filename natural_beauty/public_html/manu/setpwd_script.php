<?php
  require '../includes/common.php';
?>

<?php
    if(isset($_GET['token'])){

        $token = $_GET['token'];
        $password = $_POST['psw'];
        $cpass = $_POST['cpsw'];
        $regex_pass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!%*?&])[A-Za-z\d@$#!%*?&]{8,}$/";
        
        if (!preg_match($regex_pass, $password)) {
            
                echo '<script> alert("Minimum 8 characters, at least 1 uppercase, 1 lowercase, 1 number and 1 special character is required"); </script>';
              echo "<script> window.location.href='setpwd.php'; </script>";
        // $m = 'msg="Minimum 8 characters, at least 1 uppercase, 1 lowercase, 1 number and 1 special character is required"';
        // echo "<script>window.location.href='setpwd.php?".$m."';</script>";

    }
     else if($password != $cpass)  {
           echo '<script> alert("Password not matched."); </script>';
              echo "<script> window.location.href='setpwd.php'; </script>";
        // $m = 'msg="Password not matched."';
        // echo "<script>window.location.href='setpwd.php?".$m."';</script>";

    } else{
        
        $password = mysqli_real_escape_string($con, $password);
            $password = MD5($password);
            
              $sql_query = " UPDATE manufacts SET password = '$password' WHERE token = '$token'";
          $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    
        if($result){
             echo '<script> alert("You have successfully updated your password. Please login to continue.."); </script>';
              echo "<script> window.location.href='../index.php'; </script>";
            //   $msg = "You have successfully updated your password. Please login to continue...";
            //   header('location: signin.php?msg=' . $msg);
        //       $m = 'msg="You have successfully updated your password. Please login to continue..."';
        // echo "<script>window.location.href='../index.php?".$m."';</script>";

         }
           else {
                echo '<script> alert("Cannot update. Please try again.."); </script>';
              echo "<script> window.location.href='../index.php'; </script>";
        //         $m = 'msg="Cannot update. Please try again.."';
        // echo "<script>window.location.href='../index.php?".$m."';</script>";

        //         $m = 'msg="Cannot update. Please try again..."';
        // echo "<script>window.location.href='../index.php?".$m."';</script>";

            //   $msg = "Cannot update. Please try again...";
            //   header('location: reset_password.php?msg=' . $msg);
         }  
            
    }

        
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    // $_SESSION['msg2'] = "You have successfully regitered. Please login to continue...";
    // header('location: signin.php');
    // header('location:index.php');
  }
  else{
       echo '<script> alert("Token not found from mail. Please try again..."); </script>';
              echo "<script> window.location.href='../index.php'; </script>";
    //   $m = 'msg="Token not found from mail. Please try again..."';
    //     echo "<script>window.location.href='../index.phpp?".$m."';</script>";
        //       $m = 'msg="Token not found from mail. Please try again..."';
        // echo "<script>window.location.href='../index.php?".$m."';</script>";
    // $msg = "Token not found from mail. Please try again...";
    //           header('location: reset_password.php?msg=' . $msg);
  }
?>
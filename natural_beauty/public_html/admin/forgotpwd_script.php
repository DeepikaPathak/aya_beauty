<?php
  require '../includes/common.php';
  
?>

<?php

   
    $email = mysqli_real_escape_string($con,$_POST['email']);
   
    // echo $phone ."<br>". $email ."<br>". $class ."<br>". $rollno ."<br>". $pass ."<br>";
    // die(print($name));

    $sql_query = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
  
    if ($num != 0) {
          $data = mysqli_fetch_array($result);
          $name = $data['name'];
          $token = $data['token'];

        //   $subject  = "Password Reset";
          $body  = "Hi, ".$name.". Click here to reset your password   http://trojanx.com.au/admin/setpwd.php?token=".$token." ";
        //   $sender_email  = 'From: sender_email_id@gmail.com' . "\r\n" .
        //     'MIME-Version: 1.0' . "\r\n" .
        //     'Content-type: text/html; charset=utf-8';
        //   if(mail($email, $subject, $body, $sender_email)) { 
        //         $msg =" We have sent you an email with a password reset link. Please click on that link to create a new password for your account.";
        //       header('location:recover_email.php?msg=' . $msg);
              
        $headers = "MIME-Version: 1.0" . "\r\n";

        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= "Reply-to:abcd@gmail.com" . "\r\n";


        if(mail("$email","TrojanX Password Reset",$body,$headers))
        {
             echo " <script>alert('A reset password link has been sent to your registered mail. Please check you mail...'); </script>";
               echo "<script> window.location.href='../index.php'; </script>";
        }
              
          else { 
              
                 echo '<script> alert("Email sending failed..."); </script>';
              echo "<script> window.location.href='forgotpwd.php'; </script>";
                //   echo "Email sending failed...";
          }
    } 
    else  {
                echo '<script> alert("This email id is not registered ....."); </script>';
              echo "<script> window.location.href='forgotpwd.php'; </script>";
            //   $msg = "This email id is not registered ..... ";
            //   header('location:recover_email.php?msg=' . $msg);
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    // $_SESSION['msg2'] = "You have successfully regitered. Please login to continue...";
    // header('location: signin.php');
    // header('location:index.php');
  }

?>
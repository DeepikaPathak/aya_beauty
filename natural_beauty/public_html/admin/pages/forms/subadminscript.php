<?php
//session_start();
    
require("../../../includes/common.php");
if( !function_exists('random_bytes') )
{
    function random_bytes($length = 6)
    {
        $characters = '0123456789';
        $characters_length = strlen($characters);
        $output = '';
        for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

        return $output;
    }
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gen'];
$email=$_POST['email'];
$dob=$_POST['date'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$token = bin2hex(random_bytes(15));
   

    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $regex_pass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!%*?&])[A-Za-z\d@$#!%*?&]{8,}$/";

    $query = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);

    if (!preg_match($regex_email, $email)) {
        $m = "Please enter a valid email id.";
        header('location: subadmin.html?m1=' . $m);
    } else if (!preg_match($regex_pass, $password)) {
        $m = "Minimum 8 characters, at least 1 uppercase, 1 lowercase, 1 number and 1 special character is required";
        header('location: subadmin.html?m2=' . $m);
    } else if($password != $cpassword)  {
        $m = "Password not matched.";
        header('location: subadmin.html?m3=' . $m);
    } else if($num != 0)  {
         $m = "Email Already Exists";
         header('location: subadmin.html?m4=' . $m);
    } else  {

            $password = mysqli_real_escape_string($con, $password);
            $password = MD5($password);
            $query = "INSERT INTO admin (fname,lname,email,password,gender,dob,token) VALUES ('$fname','$lname','$email','$password','$gender',DATE '$dob','$token')";
   
            $success = mysqli_query($con, $query) or die(mysqli_error($con));
            $query1 = "INSERT INTO chatdetail(name,usertype) 
            VALUES ('" . $name . "','admin')";
    
            $success1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            if($success) {
                
                 header('location: subadmin.html');
            }
            else{
              echo "You are not registered! some error occured please try again!";
        }
    }


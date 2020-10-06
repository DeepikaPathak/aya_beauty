<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <meta name="keywords" content="MediaCenter, Template, eCommerce">
      <meta name="robots" content="all">

      <title>AYA Natural Beauty | Sign-in  Admin|</title>

      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/green.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <!-- Demo Purpose Only. Should be removed in production : END -->

    
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
  
<style>

body {
  background: #030d17;
  color: #666666;
  font-family: "Open Sans", sans-serif;
}

input[type=email], input[type=password] {
  width: 76%;
  padding: 7px;
  background-color: transparent;
  border: 1px solid #d4c27a;
  border-radius: 10px;
  color:white;
 
}

input[type=email]:focus, input[type=password]:focus {
  border: 3px solid #e4d183ed;
  outline: none;

}

hr {
  border: 1px solid #e4d183ed;
  margin-bottom: 25px;
}


/* Set a style for all buttons */
button {
  background-color: #efc23f;
  color: black;
  padding: 7px 13px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 7px 13px;
  background-color: #efc23f;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  width: 15%;
}

.error {color: #FF0000;}
/* Add padding to container elements */


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.forgot{
color:#e4d183ed;
}
.forgot:hover{
color:white;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>


  </head>
    <body class="cnt-home">
  
    
  
    <!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
  <!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>




 <form action="loginadmin_script.php" method="post" style="border:1px solid #ccc">
  <div class="container" >
    <h1 align="center" style="color:#e4d183ed;">Login as a Admin</h1>
    <p align="center" style="color:#e4d183ed;">Please fill in the details to login.</p>
    <hr>
  
<?php
                                    if(isset($_GET['msg']))  {
                                       ?> <span class="error">* <?php echo $_GET['msg']; ?> </span> <?php
                                    }
                                    else  {
                                        echo "";
                                    }
                                ?>
      



      
  <div class="form-group">
    <label for="email" style="color:#e4d183ed;text-align: center;"><b>Email</b></label><br>
          <input type="email" placeholder="Enter Email" name="email" required><br>
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
   <label for="psw" style="color:#e4d183ed;"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required><br>
         </div><!-- 
  <label style="margin-left:21rem;">
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px;"> <p style="margin-top:-2rem; margin-left:1.5rem; color:#e4d183ed;">Remember me</p>
    </label> -->
    
  <div class="clearfix">
      <a href="index.html"><button type="button" class="cancelbtn" >Cancel</button></a>
      <button type="submit" class="signupbtn">Login</button>
    </div>
    <a href="forgotpwd.php"><p class="forgot">Forgot password?</p></a>
  </div>
</form>

   <?php include('includes/brands-slider.php');?>
</div>
</div>
<?php include('includes/footer.php');?>
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  
  <script src="assets/js/bootstrap.min.js"></script>
  
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  
  <script src="assets/js/echo.min.js"></script>
  <script src="assets/js/jquery.easing-1.3.min.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/scripts.js"></script>

  <!-- For demo purposes – can be removed on production -->
  
  <script src="switchstylesheet/switchstylesheet.js"></script>
  
  <script>
    $(document).ready(function(){ 
      $(".changecolor").switchstylesheet( { seperator:"color"} );
      $('.show-theme-options').click(function(){
        $(this).parent().toggleClass('open');
        return false;
      });
    });

    $(window).bind("load", function() {
       $('.show-theme-options').delay(2000).trigger('click');
    });
  </script>
  <!-- For demo purposes – can be removed on production : End -->

  

</body>
</html>
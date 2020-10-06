<!DOCTYPE html>
<!-- https://formspree.io/  -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Set Password | TrojanX</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
   
   <script src="index.js"></script>
  
<style>

body {
  background: #030d17;
  color: #666666;
  font-family: "Open Sans", sans-serif;
}

input[type=text], input[type=password] {
  width: 120%;
  padding: 7px;
  background-color: transparent;
  border: 1px solid #d4c27a;
  border-radius: 10px;
  color:white;
 
}

input[type=text]:focus, input[type=password]:focus {
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
  width: 100%;
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
.cancelbtn {
  width: 30%;
}

/* Add padding to container elements */
.container {
  padding: 84px;
  margin-top:-1.5rem;

}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 500px) {
  .cancelbtn {
     width: 80%;
  }
  input[type=text], input[type=password] {
  width: 100%;
 }
}

@media screen and (max-width: 800px) {
  input[type=text], input[type=password] {
  width: 100%;
 }
 .cancelbtn{
     margin-left:5%;
     width:60%;
 }
}
@media screen and (min-width: 800px) {
    .blockspace{
        display:none;
    }
  .cancelbtn{
     width:30%;
     margin-left:35%;
  }
  #pass{
     margin-right:5%; margin-left:25%;
     width:80%;
  }
  hr{
      
    width: 23rem;
    margin-left: 28%;
  }
}
.error {color: #FF0000;}

@media screen and (min-width: 1200px) {
  .cancelbtn{
     width:30%;
     margin-left:35%;
  }
  #pass{
     margin-right:5%; margin-left:32%;
  }
  hr{
      
    width: 23rem;
    margin-left: 20rem;
  }
  input[type=text], input[type=password] {
  width: 76%;
  }
}

</style>

</head>

<body>

  <!--==========================
    Header
  ============================-->
  
    <div class="container-fluid">

      <div id="logo" class="pull-left">
	  <img src="img/logot.png" style="width:13rem;margin-top:-1rem;margin-left: 0rem;">

      </div>
	 </div>



  <!--==========================
    Header End
  ============================-->
  <?php
					if(isset($_GET['token'])){
						$token = $_GET['token'];
					}
					

				?>

	 <form action="setpwd_script.php?token=<?php echo $token; ?>" method="post" style="border:1px solid #ccc">
  <div class="container" style="
    height: 42rem;margin-top:2rem;
">
      <div class="blockspace">
          <br><br><br><br><br><br>
      </div>
    <h1 align="center" style="color:#e4d183ed;">Forgot Password?</h1>
    <p align="center" style="color:#e4d183ed;">You can reset your password using this form..</p>
   <hr>	
    
	
			
			<div class="col-md-6 form-group" id="pass">
				<div class="form-group">
					<label for="psw" style="color:#e4d183ed;"><b>New Password</b></label><br>
					<input s type="password" placeholder="Enter Password" name="psw" required><br>
				</div>
			</div>
			
			<div class="col-md-6 form-group" id="pass">
				<div class="form-group">
					<label for="psw" style="color:#e4d183ed"><b>Confirm Password</b></label><br>
					<input  type="password" placeholder="Enter Password" name="cpsw" required><br>
				</div>
			</div>
			
	
	

    <div class="clearfix" style="margin-bottom: -1rem;">
      <!--<a href="index.html"><button type="button" class="cancelbtn" >Change Password</button></a>-->
      <button type="submit" class="cancelbtn" >Change Password</button>
      
    </div>
 </form>
	 
	 
</body>
</html>
	  

            
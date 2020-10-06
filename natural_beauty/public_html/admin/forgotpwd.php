<!DOCTYPE html>
<!-- https://formspree.io/  -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forgot Password | TrojanX</title>
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

input[type=text], input[type=email] {
  width: 76%;
  padding: 7px;
  background-color: transparent;
  border: 1px solid #d4c27a;
  border-radius: 10px;
  color:white;
 
}

input[type=text]:focus, input[type=email]:focus {
  border: 3px solid #e4d183ed;
  outline: none;

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
.cancelbtn, .signupbtn {
  width: 15%;
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
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

@media screen and (max-width: 800px) {
  .cancelbtn {
     width: 40%;
     margin-left:5%;
  }
  #emailform{
      margin-left:3%;
  }
}
@media screen and (min-width: 800px) {
 .cancelbtn{
        margin-left:35%;
   }
   #emailform{
       margin-left:70%;
       margin-right:-50%;
   }
   .cancelbtn{
       width:20%;
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
  

	 <form action="forgotpwd_script.php" method="post" style="border:1px solid #ccc">
      <div class="blockspace">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <h1 align="center" style="color:#e4d183ed;">Forgot Password?</h1>
    <p align="center" style="color:#e4d183ed;">Don't worry! We are here to help you..</p>
    <hr>
	
			<div class="col-md-6 form-group">
				<div class="form-group" id="emailform">
					<label for="email" style="color:#e4d183ed;"><b>Email</b></label><br>
					<input type="email" placeholder="Enter Email" name="email" required="true"><br>
					
				</div>
			</div>	

    <div class="clearfix" style="margin-bottom: 1rem;">
      <!--<a href="forgot_script.php"><button type="button" class="cancelbtn" >Reset my Password</button></a>-->
      <button type="submit" class="cancelbtn" >Reset my Password</button>
    </div>
 </form>
	 
	 
</body>
</html>
	  

            
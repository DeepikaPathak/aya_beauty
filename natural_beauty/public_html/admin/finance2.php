<?php
    //session_start();
    
    require("../includes/common.php");
    $id = $_SESSION['aid'];
    //echo $id;
    if(isset($_SESSION["aid"]))
    {
        $q = "select * from admin where id = $id";
    //echo $q;
        $result = mysqli_query($con, $q);// or die("Selecting user profile failed");
		$rowstart = mysqli_fetch_array($result);
		$_SESSION["name"]=$rowstart["name"];
		$name=$_SESSION["name"];
		$_SESSION["email"]=$rowstart["email"];
		$email=$_SESSION["email"];
    //  echo $row['log_id'];
    }
    else
    {
     echo "<script> window.location.href='../index.php'; </script>";
    // header('location:../index.php);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php
        require("../includes/g.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<title>Chat</title>
	<link rel="stylesheet" href="../css/style-chatpage.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    require("../../../includes/g.php");
  </head>
  <body>
    <div class="container-scroller">
        
      <?php require 'sidebar1.php' ?>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="img/logot.png" style="height:130%;width:130%"alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button"  href="pages/forms/subadmin.php">+ Add New Sub-Admin</a>
               
          
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
       
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/user_fallback.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $rowstart["name"]; ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>

                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <a class="nav-link" href="../logout_script.php"><p class="preview-subject mb-1" style="margin-left:-18px;">Log out</p></a>
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="login">
		<form action="" method="POST">
			
			<h3 >
				<?php 
					echo "Hi $name . . .";
				?>
			</h3>
			Chat with<br>
			
				<?php
					$query="SELECT * FROM chatdetail WHERE usertype != 'admin'";
					$result = mysqli_query($con, $query);  
					$num_user=mysqli_num_rows($result);
					if($num_user<1)
					{
						echo "No User Found.";
					}
					else
					{
						echo "<br><select name='chat-with'>";
						while($row=mysqli_fetch_object($result))
	           			{ 
							$query1 = "SELECT * FROM chatdetail WHERE name = '$name'";  
		           			$result1 = mysqli_query($con, $query1);  
		           			if(mysqli_num_rows($result1) == 1)  
					           {
					                $row1=mysqli_fetch_object($result1);
									$my_id=$row1->id;
					           }  
					        $other_id=$row->id; 
					        $status_query1="UPDATE chat_msg SET status=2 WHERE sender_id='$other_id' AND reciever_id='$my_id' AND status=1";
				            $status_result1=mysqli_query($con, $status_query1);
	           				$status_query="SELECT * FROM chat_msg WHERE sender_id='$other_id' AND reciever_id='$my_id' AND status='2'";
							$status_result=mysqli_query($con, $status_query);
							$num_message=mysqli_num_rows($status_result);
							//For Delivery Status End
				                echo "<option value='$row->id'>$row->name ($num_message Msg)</option>";
				            
	           			}
	           			echo "</select>";
						   echo "<br><br><input type='submit' name='continue' value='Continue'>";
					}
				?>

		</form>
		<br>
		
	</div>
          </div>
          <!-- content-wrapper ends -->
           <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">TrojanX</a>. All rights reserved.</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

<?php 
 if(isset($_POST["continue"])) 
 {
 	$_SESSION["opponent"]=$_POST['chat-with'];
 	echo "<script> window.location.href='chatadmin-box.php'; </script>";
 	//header('location:chatadmin-box.php');
 }


?>
<?php
        require("../../../includes/g.php");
    //session_start();
    
    require("../../../includes/common.php");
    $id = $_SESSION['aid'];
    //echo $id;
    if(isset($_SESSION["aid"]))
    {
        $q = "select * from admin where id = $id";
    //echo $q;
        $result = mysqli_query($con, $q);// or die("Selecting user profile failed");
		$rowstart = mysqli_fetch_array($result);
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
      <?php
        require("../../../includes/g.php");
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard | TrojanX</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:{background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <?php require 'sidebar2.php'; ?>
    <!--  <nav class="sidebar sidebar-offcanvas" id="sidebar">-->
    <!--     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">-->
    <!--      <a class="sidebar-brand brand-logo" href="index.html"><img style="height:10rem; width:10rem; margin-top:2rem; margin-left:1rem;" src="../../img/logot.png" alt="logo" /></a>-->
    <!--      <a class="sidebar-brand brand-logo-mini" href="index.html" style="color:white;">T</a>-->
    <!--    </div>-->
    <!--    <ul class="nav" style="margin-top:3rem;">-->
    <!--      <li class="nav-item profile">-->
    <!--        <div class="profile-desc">-->
    <!--          <div class="profile-pic">-->
    <!--            <div class="count-indicator">-->
    <!--              <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">-->
    <!--              <span class="count bg-success"></span>-->
    <!--            </div>-->
    <!--            <div class="profile-name">-->
    <!--              <h5 class="mb-0 font-weight-normal">Heyy Hello</h5>-->
    <!--              <span>Gold Member</span>-->
    <!--            </div>-->
    <!--          </div>-->
             
    <!--        </div>-->
    <!--      </li>-->
    <!--     <li class="nav-item nav-category">-->
    <!--        <span class="nav-link">Navigation</span>-->
    <!--      </li>-->
    <!--      <li class="nav-item menu-items">-->
    <!--        <a class="nav-link" href="../../adminpage.html">-->
    <!--          <span class="menu-icon">-->
    <!--            <i class="mdi mdi-speedometer"></i>-->
    <!--          </span>-->
    <!--          <span class="menu-title">Dashboard</span>-->
    <!--        </a>-->
    <!--      </li>-->
         
    <!--      <li class="nav-item menu-items">-->
    <!--        <a class="nav-link" href="../../pages/forms/subadmin.html">-->
    <!--          <span class="menu-icon">-->
    <!--            <i class="mdi mdi-security"></i>-->
    <!--          </span>-->
    <!--          <span class="menu-title">Add Sub Admin</span>-->
    <!--        </a>-->
    <!--      </li>-->
		  <!-- <li class="nav-item menu-items">-->
    <!--        <a class="nav-link" href="../../pages/charts/manulist.html">-->
    <!--          <span class="menu-icon">-->
    <!--            <i class="mdi mdi-playlist-play"></i>-->
    <!--          </span>-->
    <!--          <span class="menu-title">List of Manufactures</span>-->
    <!--        </a>-->
    <!--      </li>-->
		  <!--<li class="nav-item menu-items">-->
    <!--        <a class="nav-link" href="../../pages/charts/manuprod.html">-->
    <!--          <span class="menu-icon">-->
    <!--            <i class="mdi mdi-playlist-play"></i>-->
    <!--          </span>-->
    <!--          <span class="menu-title">Manufacture Products</span>-->
    <!--        </a>-->
    <!--      </li>-->
          
    <!--      <li class="nav-item menu-items">-->
    <!--        <a class="nav-link" href="../../pages/charts/orderstatus.html">-->
    <!--          <span class="menu-icon">-->
    <!--            <i class="mdi mdi-chart-bar"></i>-->
    <!--          </span>-->
    <!--          <span class="menu-title">Order Status</span>-->
    <!--        </a>-->
    <!--      </li>-->
    <!--     <li class="nav-item menu-items">-->
    <!--        <a class="nav-link" href="../../pages/charts/maintainance.html">-->
    <!--          <span class="menu-icon">-->
    <!--            <i class="mdi mdi-screwdriver"></i>-->
    <!--          </span>-->
    <!--          <span class="menu-title">Maintainance Charges</span>-->
    <!--        </a>-->
    <!--      </li>-->
         
          
    <!--    </ul>-->
    <!--  </nav>-->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../img/logot.png" style="height:130%;width:130%"alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <!--<li class="nav-item dropdown d-none d-lg-block">-->
              <!--  <a class="nav-link btn btn-success create-new-button"  href="addfinance.php">+ Add Expenses</a>-->
               
              <!--</li>-->
              
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
                      <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
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
                    <img class="img-xs rounded-circle" src="../../assets/images/user_fallback.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
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
                      <a class="nav-link" href="../../../logout_script.php"><p class="preview-subject mb-1" style="margin-left:-16px;">Log out</p></a>
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Manufacturer Payout </h3>
              <nav aria-label="breadcrumb">
                
              </nav>
            </div>
            
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Fill out the Dates</h4>
                    <form class="forms-sample" action="" target="_self" method ="post">
					    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">From</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="startdate" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">To</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="enddate" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                      <button type="submit" name='continue' value='Continue' class="btn btn-primary mr-2">Apply</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <?php 
                if(isset($_POST["continue"])) 
                {
                
                //session_start();
                require("../../../includes/common.php");
                $startdate=$_POST['startdate'];
                $enddate=$_POST['enddate'];
                // echo $startdate."<br>";
                // echo $enddate."<br>";
                // exit();
                
                // $sdate= date_create($startdate);
                // $sdate=date_format($sdate,"Ymd");
                // $edate= date_create($enddate);
                // $edate=date_format($edate,"Ymd");
                $timestamp1 = strtotime($startdate);
                $y1 = date("Y", $timestamp1); 
                $m1 = date("m", $timestamp1);
                $d1 = date("d", $timestamp1);
                // echo $y1." ".$m1." ".$d1."<br>";
                
                $timestamp2 = strtotime($enddate);
                $y2 = date("Y", $timestamp2); 
                $m2 = date("m", $timestamp2);
                $d2 = date("d", $timestamp2);
                //  echo $y2." ".$m2." ".$d2."<br>";
                 
                 //mktime(hour, minute, second, month, day, year)
                $start=mktime(00, 01, 01, $m1, $d1, $y1);
                $start = date("Y-m-d H:i:s", $start);
                // echo $start."<br>";
                
                //2020-09-28 05:09:30
               
                // 2020-09-09 01:01:01
                // 2020-09-29 11:59:59

                
                 $end=mktime(23, 59, 59, $m2, $d2, $y2);
                   $end = date("Y-m-d H:i:s", $end);
                //  echo $end."<br>";
                
               
                // $pivot=0;
                // $i=0;
                // $pname=array();
                $q = "SELECT * FROM purchased
                            WHERE time BETWEEN '$start' AND '$end' ";
                // $q = "SELECT * FROM purchased WHERE time >= $start AND time <= $end ";
                $result = mysqli_query($con, $q);
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                    echo "No transaction occured between this time period";
                    exit();
                } 
                else {
                    // echo "Please wait this module is under maintenance";
                    
            ?>
            <?php
            $sql = "SELECT DISTINCT manufacts.name, manufacts.email, manufacts.id, purchased.manuid FROM purchased INNER JOIN manufacts ON manufacts.id = purchased.manuid INNER JOIN manu_products ON manufacts.id = manu_products.manu_id WHERE purchased.paymentstatus = 'Completed' AND purchased.time BETWEEN '$start' AND '$end'";
            $res = mysqli_query($con, $sql);
            
            ?>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Payout to Manufacturers Status</h4>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Manufacturer's Name</th>
                                    <th>Manufacturer's Email</th>
                                    <th>Payout Amount</th>
                                    <th>Profit to Admin</th>
                                </tr>
                                </thead>
                               
                                <tbody>
                                    <?php 
                                    $count = 0;
                                    while($row = mysqli_fetch_array($res))  {
                                       $manuid= $row['id'];
                                   
                                    $q = "SELECT SUM(p_baseprice) as cost,SUM(totalpay) as prof FROM purchased  WHERE paymentstatus = 'Completed' AND purchased.time BETWEEN '$start' AND '$end'  AND purchased.manuid = '$manuid' ";
                                    $result = mysqli_query($con, $q);
                                    // echo "asdf";
                                    $rd = mysqli_fetch_array($result);
                                                                            ?>
                                <tr>
                                    <td>
                                    <span class="pl-2"><?php echo ++$count; ?></span>
                                    </td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td>$<?php echo $row['email']; ?></td>
                                    
                                
                                    <td>$<?php echo $rd['cost']; ?></td> 
                                    <td>$<?php echo round($rd['prof']-$rd['cost'],4); ?></td> 
                                </tr>  
                                <?php
                                        
                                    }
                                
                                ?>
                                </tbody>
                                <?php
                            }
                        }
                    
                ?>
                            </table>
                            </div>
                        </div>
                    </div>
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
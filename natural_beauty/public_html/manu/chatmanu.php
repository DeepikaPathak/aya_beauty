<?php
    //session_start();
    
    require("../includes/common.php");
    $id = $_SESSION['mid'];
    //echo $id;
    if(isset($_SESSION["mid"]))
    {
        $q = "select * from manufacts where id = $id";
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
<html>
<head>
      <?php
        require("../includes/g.php");
        ?>
	<title>Chat</title>
	<link rel="stylesheet" href="css/style-chatpage.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<center>
	<div class="login">
		<form action="" method="POST">
			
			<h3>
				<?php 
					echo "Hi $name . . .";
				?>
			</h3>
			Chat with<br>
			
				<?php
					$query="SELECT * FROM chatdetail WHERE usertype = 'admin'";
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
		<p><a href="../logout_script.php">Logout</a></p>
		
	</div>
</center>
</body>
</html>

<?php 
 if(isset($_POST["continue"])) 
 {
 	$_SESSION["opponent"]=$_POST['chat-with'];
 	echo "<script> window.location.href='chatmanu-box.php'; </script>";
 	//header('location:chatmanu-box.php');
 }


?>

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
    // echo $id;
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
	<link rel="stylesheet" href="css/style-chat-box.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<center>
	<div class="login" style="position: relative;">

			<h4 style="text-align: left;float:left;">
				<?php
					$query = "SELECT * FROM chatdetail WHERE name = '$name'";  
					$result = mysqli_query($con, $query);
					$row= mysqli_fetch_array($result);     
           			if(mysqli_num_rows($result) == 1)  
			           {    
			           	$opponent=$_SESSION["opponent"];

			           	$query2="SELECT * FROM chatdetail WHERE id='$opponent'";
			           	$result2=mysqli_query($con, $query2);
			           	$row2= mysqli_fetch_array($result2);

			                
							$my_id=$row["id"];
							$_SESSION["chatid"]= $my_id;
                            $other_id=$opponent;
			                echo $name,"  with  ", $row2["name"];
			                
			           }  
			$chat_query="SELECT * FROM chat_msg WHERE (sender_id='$my_id' OR sender_id='$other_id') AND (reciever_id='$other_id' OR reciever_id='$my_id')";
			$chat_result=mysqli_query($con, $chat_query);
			$_SESSION["num-chat1"]=mysqli_num_rows($chat_result);
				?>
			</h4>


			<p style="text-align: right;float:right;"><a href="chatmanu.php">Exit Chat</a></p><br><br><hr>
			<?php //echo $_SESSION["num-chat1"]."=".$_SESSION["num-chat2"]; ?>

	<div id="my-chat-div" style="overflow-y: scroll;height:350px;">	
		<div class="result">
			
		</div>
	</div>
		<form class='chat-form' action="" style="bottom: 10px; position: absolute; width: 92%;left:4%;" method="POST">
				<input type="text" id="send-msg" name="send-msg" placeholder="Type Message..." required>
				<input type="submit" name="send" value="Send">
		</form>
	</div>
</center>

</body>
</html>

<?php
 if(isset($_POST["send"]))  
 {   
				

           $send_msg= mysqli_real_escape_string($con, $_POST["send-msg"]);  
            
           $query = "INSERT INTO chat_msg (sender_id, reciever_id, msg) VALUES ('$my_id', '$other_id', '$send_msg')";  
          
           if(!mysqli_query($con, $query))  
           {  
           	 echo '<script>alert("Unable to send.")</script>'; 
           }  
           
           
 } 
 
 ?>
<script src="js/script.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	function refresh_div() {
	
		jQuery.ajax({
			url:'ajax-chat.php',
			type:'POST',
			success:function(results) {
				jQuery(".result").html(results);
			}

		});
		
		
	}
	t = setInterval(refresh_div,1000);
</script>

<script type="text/javascript">
	var delayInMilliseconds = 2000; 

	setTimeout(function() {
		var objDiv = document.getElementById("my-chat-div");
		objDiv.scrollTop = objDiv.scrollHeight;
		
	}, delayInMilliseconds);
</script>




<?php
    //session_start();
    
    require("../includes/common.php");
    $id = $_SESSION["chatid"];
    //echo $id;
    if(isset($_SESSION["chatid"]))
    {        
    }
    else
    {
     echo "<script> window.location.href='../index.php'; </script>";
    // header('location:../index.php);
	}
?>

		
			
			<h4 style="text-align: left;float:left;">
				
			</h4>
			

			
			<?php
			$my_id=$id;
			$other_id=$_SESSION["opponent"];
			$chat_query="SELECT * FROM chat_msg WHERE (sender_id='$my_id' OR sender_id='$other_id') AND (reciever_id='$other_id' OR reciever_id='$my_id') ORDER BY date_time";
			$chat_result=mysqli_query($con, $chat_query);
			$_SESSION["num-chat2"]=mysqli_num_rows($chat_result);
			
			while($chat_row=mysqli_fetch_object($chat_result))
			{

				
				if($chat_row->sender_id==$my_id)
				{
					echo "<p class='sender-text'>$chat_row->msg</p>";
					echo "<p class='sender-chat-time'> $chat_row->date_time ";
					if($chat_row->status==1)
					{
						echo "✓</p>";
					}
					elseif($chat_row->status==2)
					{
						echo "✓✓</p>";
					}
					elseif($chat_row->status==3)
					{
						echo "✓✓✓</p>";
					}

				}
				elseif($chat_row->sender_id==$other_id)
				{
					echo "<p class='reciever-text'>$chat_row->msg</p>";
					echo "<p class='reciever-chat-time'> $chat_row->date_time </p>";
					$status_query="UPDATE chat_msg SET status=3 WHERE sender_id='$other_id' AND reciever_id='$my_id'";
					$status_result=mysqli_query($con, $status_query);
				}
			}
			?>
		


	</div>


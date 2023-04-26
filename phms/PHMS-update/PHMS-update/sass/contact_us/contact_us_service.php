<?php
       // echo "Thanks"
	   //echo '1';
		$username = $_POST['username'];		
		$mailId = $_POST['mailId'];
		$message = "Customer message : ".$_POST['message']."\n Customer EmailId : ".$mailId;
		$timestamp = date("Y-m-d H:i:s");
        $to_email = 'sainathindupuri@gmail.com';
		$subject = 'Customer issue '. $username;
		//$message = 'This mail is sent using the PHP mail function';
		$headers = 'From: noreply@pchms.com';
		$mail_status = mail($to_email,$subject,$message,$headers);
		if ($mail_status) { 
			echo "<script >alert('You have successfully submiited'); document.location ='contact_us.php'</script>";
		 }
		 else { 
			echo 0;  
		 }
		 ?>
		
	
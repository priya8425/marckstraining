<?php	
	
include('../configure.php');
if(isset($_POST['submit_email'])){
	$email=$_POST['email'];
	$otp=rand(100000,999999);
        $sql= "INSERT INTO registered_users(email,otp) VALUES ('$email','$otp')";
        if (mysqli_query($conn, $sql)){
          	echo "<script> alert ('New record has been added successfully !');</script>";

		  	require '../PHPMailer/PHPMailerAutoload.php';
	
			  $mail = new PHPMailer;
			  $mail->SMTPDebug = 0;                      //Enable verbose debug output
			  $mail->isSMTP();                                            //Send using SMTP
			  $mail->Host       = 'mail.marcksitservices.com';                     //Set the SMTP server to send through
			  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			  $mail->Username   = 'no-reply@marcksitservices.com';                     //SMTP username
			  $mail->Password   = 'D[OhrbjH6JnM';                               //SMTP password
			  $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
			  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		  
			  //Recipients
			  $mail->setFrom('no-reply@marcksitservices.com', 'Mailer');
			  $mail->addAddress($email);     //Add a recipient we can write here 'yadavpriya12@gmail.com' for check.
		  
			  //Conten
			  $mail->isHTML(true);                                  //Set email format to HTML
			  $mail->Subject = 'Here is the subject';
			  $mail->Body    = '<h3 style="color:green;">otp Details:-</h3><br />
								  <strong>Email:&emsp;</strong>'.$email.'<br /><br />
								  <strong>otp:&emsp;</strong><p>'.$otp.'</p><br /><br />';
			  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			  if($mail->send()){
				?>
				<form method="post" action="verifyotp.php">
					<div class="tableheader">Enter Your otp </div>
					<div class="tablerow"><input type="text" name="email" placeholder="Email" class="login-input" value="<?=$email;?>" 						readonly></div>
					<div class="tablerow"><input type="text" name="otp" placeholder="otp" class="login-input" required></div>
					<div class="tableheader"><input type="submit" name="submit" value="Submit" class="btnSubmit"></div>
				</form>
				<?php
				echo "<script> alert ('Message has been sent !');</script>";
				
			}else{
				echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}"; 
			}

       }
        else {
          echo "<script> alert ('connection failed !');</script>";
       }
    }
	

?>

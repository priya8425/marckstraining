<?php 
include("_includes/config.php");
?>
<?php session_start();
$res=mysqli_query($conn,"SELECT * FROM `users`");
 $row=mysqli_fetch_array($res);

	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require '../PHPMailer/PHPMailerAutoload.php';
?>


<?php
		
		if(isset($_POST['forget'])){
			
			$email=$_POST['mail'];
			$q=mysqli_query($conn,"select * from users where email='$email'");
			if(mysqli_num_rows($q)>0){
				
				
				$to=$email;
				$sub="Recover Password";
				$pass=rand(100000, 999999);
			
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'mail.marcksitservices.com';
         
				$mail->SMTPAuth   = true;                           
				$mail->Username   = 'no-reply@marcksitservices.com';          
				$mail->Password   = 'D[OhrbjH6JnM';                        
				$mail->SMTPSecure = ssl;          
				$mail->Port       = 465;
        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('no-reply@marcksitservices.com', 'ASENTERPRISES');
				$mail->addAddress($email, 'ASENTERPRISES');     //Add a recipient
				
				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'Reset Password';
				$mail->Body    = 'Hi,<br>Here is your new password : '.$pass;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if($mail->send()){
					$passwordhash=password_hash($pass,PASSWORD_BCRYPT);

					$q1=mysqli_query($conn,"update users set password= '$passwordhash' where email='$email'");
						if($q1){
                            session_destroy();   // function that Destroys Session 
                            header("Location:adminlogin.php");
						}
						else{
							echo"Error";
						}
				}
				
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			
			}
		}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AS | FORGIOT PASSWORD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
     <h3>ASENTERPRISES</h3>
    </div>
    <div class="card-body">
      <p class="login-box-msg"> You forgot your password? Here you can easily retrieve a new password.</p>
      <form method="post">
      
                <div class="form-group">
                <input type="email" name="mail" class="form-control" placeholder="Email">
                </div>
                 
                <!-- <div class="mt-6">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Submit" name="login">
                </div> -->
                <div class="col-12"><a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn" href="adminlogin.php">Cancel</a>
<button type="submit" onclick="fun()" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="forget" >Submit</button>
</div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                </div>
                
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

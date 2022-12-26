<?php
include('include/configure.php');
require 'PHPMailer/PHPMailerAutoload.php';
if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $email =$_POST['email'];
        $message = $_POST['message'];
        $sql= "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name',' $email','$message')";
        if (mysqli_query($conn, $sql)){
            $mail = new PHPMailer;
            // $mail->SMTPDebug = 3;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.marcksitservices.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'no-reply@marcksitservices.com';                     //SMTP username
            $mail->Password   = 'D[OhrbjH6JnM';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('no-reply@marcksitservices.com', 'Mailer');
            $mail->addAddress($email, 'Joe User');     //Add a recipient
            //$mail->addAddress('yadavpriya@gmail.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
           // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Conten
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = '<h3 style="color:green;">Contact Details:-</h3><br />
                                <strong>Name:&emsp;</strong>'.$name.'<br /><br />
                                <strong>Email:&emsp;</strong>'.$email.'<br /><br />
                                <strong>Message:&emsp;</strong><p>'.$message.'</p><br /><br />';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if($mail->send()){
                echo "<script> alert ('Message has been sent !');</script>";
                echo "<script>window.location='contact.php';</script>";
                
            }else{
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
            }
       }
       
    }


//Create an instance; passing `true` enables exceptions

?>
<?php

$jsonReponseData=array('actionStatus'=>'','message'=>'');
$fullName =""; // Sender Name
$emailId =""; // Sender's email ID
$mobileNos =""; // Subject of mail
$message =""; // Sender's Message

/*checking if mandatory fields missing*/
if (empty($_POST["fullName"]) || empty($_POST["emailId"]) || empty($_POST["message"])){
	$jsonReponseData['actionStatus']='error';
	$jsonReponseData['message']='Required data is missing!!!';	
}
else{
	$fullName = test_input($_POST["fullName"]);
	$emailId = test_input($_POST["emailId"]);
	$mobileNos = test_input($_POST["mobileNos"]);
	$message = test_input($_POST["message"]);
   
   //validating name and email id
   if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName) || !filter_var($emailId, FILTER_VALIDATE_EMAIL))
   {
	$jsonReponseData['actionStatus']='error';
	$jsonReponseData['message']='Either name or email id provided is invalid!!!';	
   }
   else
   {
	require_once 'PHPMailer/PHPMailerAutoload.php';  
	$mail             = new PHPMailer();
    $mail->Host       = 'mail.marcksitservices.com';
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'info@marcksitservices.com'; // SMTP username
    $mail->Password   = 'marcks@#123'; // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $subject ="Message From Student '".$fullName."'";
    $body    = "<h4>Student's Detail</h4>"
               ."<strong>Name: </strong>".$fullName."<br />"
               ."<strong>Email: </strong>".$emailId."<br />"
               ."<strong>Mobile Nos: </strong>".$mobileNos."<br />"
			   ."<strong>Message: </strong>".$message."<br />";
   $mail->setFrom('info@marcksitservices.com');
   $mail->addAddress('marckstraining@gmail.com');
   $mail->isHTML(true);
   $mail->Body    = $body;
   $mail->Subject = $subject;
   if ($mail->Send()) {
    $jsonReponseData['actionStatus']='success';
	$jsonReponseData['message']='Message received successfully, We will contact you soon';	
   }
   else{
	$jsonReponseData['actionStatus']='error';
	$jsonReponseData['message']='Unable to track your message, Please try later';	
   }
   }   	
}

header('Content-Type: application/json');
echo json_encode($jsonReponseData);

function test_input($data)
{
$data = trim($data);
$data =stripslashes($data);
$data =htmlspecialchars($data);
return $data;
}

?>
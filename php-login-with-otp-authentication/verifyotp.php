<?php
include('../configure.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $otp=$_POST['otp'];
    
        $sql = "SELECT * FROM registered_users WHERE email='$email'and otp='$otp'";
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result);  
      $count = mysqli_num_rows($result);
        if($count==1){
    
        echo "<SCRIPT> //not showing me this
            alert('sucessfully verified')
            window.location.replace('index.php');
        </SCRIPT>";
      }else{
        echo "<SCRIPT> //not showing me this
            alert('login Failed')
            window.location.replace('index.php');
        </SCRIPT>";
    
      }
    }
    
    
  
    


?>
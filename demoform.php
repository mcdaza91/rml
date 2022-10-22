<?php

if (isset($_POST['submit'])) {
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $mailTo = "jmalaga@reachmyleads.com, jmalaga18@outlook.com";
    $headers = array("From: support@reachmyleads.net", "Reply-To: service@reachmyleads.net", "X-Mailer: PHP/". PHP_VERSION);
    $subject = "Demo Lead from Website";
    $txt = "You have a new lead from your Website.\n\nName: ".$firstName." ".$lastName."\n\nPhone: ".$phone."\n\nEmail: ".$email."\n\nMessage: ".$message;
    $headers = implode("\r\n", $headers);
   if( mail($mailTo, $subject, $txt, $headers)){
       echo 'email was send';
   }else{
       echo 'email failed.';
   }
    header("Location: index.html");
}
?>
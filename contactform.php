<?php

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $mailTo = "jmalaga@reachmyleads.com";
    $headers = array("From: support@reachmyleads.net", "Reply-To: service@reachmyleads.net", "X-Mailer: PHP/". PHP_VERSION);
    $subject = "Reach My Leads Contact Us Form";
    $txt = "Someone on your website is trying to contact you.\n\nName: ".$name."\n\nCompany: ".$company."\n\nPhone: ".$phone."\n\nEmail: ".$email."\n\nMessage: ".$message;
    $headers = implode("\r\n", $headers);
   if( mail($mailTo, $subject, $txt, $headers)){
       echo 'email was send';
   }else{
       echo 'email failed.';
   }
    header("Location: index.html");
}
?>


<?php 
// $name="";
if (isset($_POST['submit'])) {
    $mailto = "tsfdonation@gmail.com";
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
   

    $email_subject = 'New form submission';

    $email_body = "User Name: $name.\n" . "User Email: $visitor_email.\n" .  "User message:$message .\n";

    $headers = "From: $visitor_email";
    $headers2 = "From: $mailto";

    
//$to = 'shubhangigondage680@gmail.com';


    $result=mail($mailto, $email_subject, $email_body,$headers );
    $result2=mail($visitor_email,$email_subject, $email_body,$headers2 );
    
    header("Location: index.php");
    if ($result && $result2) {
        $success = "Message was sent successfully, check your email!";
        echo '<script type="text/javascript">alert("Message Sent Successfully. We will contact you shortly.")</script>';
    } else {
        $failed = "Message was not sent, try again later!";
        echo '<script type="text/javascript">alert("Mail was not sent, Try again!.")</script>';
    }
}


?>



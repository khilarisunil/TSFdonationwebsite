

<?php 
// $name="";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = 'New form submission';

    $email_body = "User Name: $name.\n" . "User Email: $visitor_email.\n" .  "User message:$message .\n";

    $headers = "From: gfgforshubh@gmail.com";

    
    $to = 'shubhangigondage680@gmail.com';


    mail($to, $email_subject, $email_body,$headers );
    mail($visitor_email,$email_subject, $email_body);
    header("Location: index.html");
    
}
else
{
    echo "error ";
}

?>



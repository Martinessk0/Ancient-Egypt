<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_post ['message'];


    $email_from = 'martingrahovski2004@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n.
                         "User message: $message.\n

    $to = "martingrahovski2004@abv.bg";


    $headers = "from: $email_from \r\n";

    $headers .- :"Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
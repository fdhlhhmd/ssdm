<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nurfadhilahabhamid@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];
    
    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "There was an error sending your message.";
    }
} else {
    echo "Method not allowed";
}
?>

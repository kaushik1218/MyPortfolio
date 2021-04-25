<?php 
if(isset($_POST['submit'])){
    $to = "kaushikmehta218@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = $_POST['subject'];
    $message = $full_name " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
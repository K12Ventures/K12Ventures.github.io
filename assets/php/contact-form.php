<?php

$errorMSG = "";

//get name
if ( isset( $_POST["namefield"] ) ) {
    $input_name = $_POST["namefield"];
}

//get email
if ( isset( $_POST["emailfield"] ) ) {
    $input_email = $_POST["emailfield"];
}

//get subject
if ( empty( $_POST["subjectfield"] ) ) {
    $input_subject = "New Message Received";
} else {
    $input_subject = $_POST["subjectfield"];
}

//get subject
if ( isset( $_POST["messagefield"] ) ) {
    $input_message = $_POST["messagefield"];
}

//Add your email here
$EmailTo = "youremail@email.com";

// prepare email body text
$msgBody = "";
$msgBody .= "Name: ";
$msgBody .= $input_name;
$msgBody .= "\n";
$msgBody .= "Email: ";
$msgBody .= $input_email;
$msgBody .= "\n";
$msgBody .= "Subject: ";
$msgBody .= $input_subject;
$msgBody .= "\n";
$msgBody .= "Message: ";
$msgBody .= $input_message;
$msgBody .= "\n";

//send email
$success = mail($EmailTo, $input_subject, $msgBody, "From:".$input_email);

// redirect to success page
if ( $success && $errorMSG == "" ) {
   echo "Mail Sent Successfully :)";
} else {
    if( $errorMSG == "" ) {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>

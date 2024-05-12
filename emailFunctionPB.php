<?php

function sendUserConfirmationEmail($email, $name) {
    $to = $email;
    $subject = "Request Confirmation";
    $message = "Dear $name,\n\nYour request has been confirmed. We will contact you shortly with further details.\n\nThank you.";
    $headers = "From: earthtradescf@gmail.com"; // Change this to your email

    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 465);

    return mail($to, $subject, $message, $headers);
}

function sendAdminNotificationEmail($name, $email, $bottle_s, $bottle_m, $bottle_l, $city, $totalPrice, $date) {
    $to = "earthtradescf@gmail.com"; // Change this to your email
    $subject = "New Bottle Request";
    $message = "Name: $name\nEmail: $email\nSmall Bottles: $bottle_s\nMedium Bottles: $bottle_m\nLarge Bottles: $bottle_l\nCity: $city\nTotal Price: $totalPrice EUR\nDate: $date";
    $headers = "From: $email";

    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 465);

    return mail($to, $subject, $message, $headers);
}

function sendPriceCalculationEmail($email, $totalPrice, $date) {
    $to = $email;
    $subject = "Bottle Request Price Calculation";
    $message = "Your total price for the bottle request is: $totalPrice EUR\n\nWe will meet on $date for the pickup.";
    $headers = "From: earthtradescf@gmail.com";

    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 465);

    return mail($to, $subject, $message, $headers);
}

?>

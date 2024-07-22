<?php
$com_email = "m-6831023@moe-dl.edu.my";
$email = "thecokl4t@gmail.com";
$title = "Collab";
$date = "15.7.2024";
$time_start = " 10:00";
$time_end = " 12:00";
$name = "Thecokl4t";
$purpose = "Product collab negotation.";

// Email Info
$subject = "SG77 - Your meeting request" . $title . ", " . $date . " accepted.";
$headers = 'From: ' . $com_email . "\r\n";
$message = "Dear sir/madam, we gladly accept your meeting request with us. Please refer the datails below : " . PHP_EOL .
"Name : " . $name . PHP_EOL .
"Email : " . $email . PHP_EOL .
"Date : " . $date . $time_start . $time_end . PHP_EOL .
"Purpose : " . $purpose . ", " . PHP_EOL .

"Here your meeting link, we will be waiting for you on " . $date . $time_start ;

$send_email = mail($email, $subject, $message, $headers);

?>
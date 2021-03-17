<?php
// Uncomment the next line if you're using a dependency loader (such as Composer) (recommended)
require 'vendor/autoload.php';
$API_KEY = "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";

// Uncomment the next line if you're not using a dependency loader (such as Composer), replacing <PATH TO> with the path to the sendgrid-php.php file
// require_once '<PATH TO>/sendgrid-php.php';
$email = new \SendGrid\Mail\Mail();
$email->setFrom("ishwarya.898@gmail.com", "Ishwarya");
$email->setSubject("Sending with Twilio SendGrid is Fun");
$email->addTo("ishwaryas.2016.cse@ritchennai.edu.in", "User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
/*$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);*/
$sendgrid = new \SendGrid($API_KEY);

if($sendgrid->send($email));
{
	echo "email sent";
}
/*try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}*/
?>
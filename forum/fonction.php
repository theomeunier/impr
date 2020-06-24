<?php
require_once '../vendor/autoload.php';

function str_random($length){
    $alphabet="0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
     return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}
function mail() {
    // Create the Transport
    $transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 587 ))
        ->setUsername(' 79fafba77e9118cb2961537bef2b2c27 ')
        ->setPassword(' 2ab06fe6a9404acda6567a480afdf773 ')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['john@doe.com' => 'John Doe'])
        ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
        ->setBody('Here is the message itself')
    ;

// Send the message
    $result = $mailer->send($message);

    return $result;
}
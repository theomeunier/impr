<?php
require_once '../vendor/autoload.php';

function str_random($length){
    $alphabet="0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
     return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

/**
 * Envoie d'email via un serveu SMTP
 * @param string $subject
 * @param array $from
 * @param array $to
 * @param string $body
 * @return int
 */
function sendMail($subject, array $from, array $to, $body)
{
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.example.org', 25))
        ->setUsername('your username')
        ->setPassword('your password')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message($subject))
        ->setFrom($from)
        ->setTo($to)
        ->setBody($body)
    ;

// Send the message
    return $mailer->send($message);
}

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/variables.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/db.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function strRandom($length)
{
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

/**
 * Envoie d'email via un serveu SMTP.
 * @param string $subject
 * @param array $from
 * @param array $to
 * @param string $body contenu HTML
 * @param string $txt contenu texte
 * @return int
 */
function sendMail($subject, array $from, array $to, $body, $txt)
{
    // Create the Transport
    $transport = (new Swift_SmtpTransport(MAILER_HOST, MAILER_PORT))
        ->setUsername(MAILER_USERNAME)
        ->setPassword(MAILER_PASSWORD);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message($subject))
        ->setFrom($from)
        ->setTo($to)
        ->setBody($body, 'text/html')
        ->addPart($txt, 'text/plain');

    // Send the message
    return $mailer->send($message);
}

/**
 * Obtient le lien de vérification.
 * @param int $user_id
 * @param string $token
 * @return string
 */
function getLinkPageConfirmation($user_id, $token)
{
    return PAGE_CONFIRMATION . "?id=$user_id&token=$token";
}
function getLinkPageReset($user_id, $reset_token)
{
    return PAGE_RESET . "?id=$user_id&token=$reset_token";
}

/**
 * Vérifie si l'utilisateur est connecté.
 */
function checkUserConnected()
{
    session_start();

    return empty($_SESSION['auth']);
}

/**
 * Construit un lien
 * @param $path
 * @return string
 */
function getLink($path)
{
    return HOST . $path;
}
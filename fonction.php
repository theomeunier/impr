<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/variables.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/db.php";

if (session_status() === PHP_SESSION_NONE) {
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

/**
 * Obtient un lien de récupération de mot de passe.
 * @param $user_id
 * @param $reset_token
 * @return string
 */
function getLinkPageReset($user_id, $reset_token)
{
    return PAGE_RESET . "?id=$user_id&token=$reset_token";
}

/**
 * Vérifie si l'utilisateur est connecté.
 */
function checkUserConnected()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    return empty($_SESSION['auth']);
}

/**
 * Construit une session utilisateur.
 * @param $user
 */
function setSessionUser($user)
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['auth'] = (object) [
        'id' => $user->id,
        'username' => $user->username,
        'email' => $user->email,
        'confirmation_at' => $user->confirmation_at,
    ];
}

/**
 * Construit un message de succès en session
 * @param string $message
 * @param string $type      type disponible : primary, secondary, success, danger, warning, info, dark, light
 */
function setSessionFlash($message, $type)
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['flash'][$type] = $message;
}

/**
 * Récupère une date française à partir d'une date anglaise (bdd)
 * @param string $date
 * @return string
 */
function getDateFr($date)
{
    try {
        $date = new DateTime($date);
    } catch (Exception $exception) {
        dump($exception->getMessage());
    }

    return $date->format("d/m/Y");
}

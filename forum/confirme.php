<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

session_abort();

$userId = $_GET['id'];
$token = $_GET['token'];

$req = $pdo->prepare('SELECT confirmation_token FROM user WHERE id = :userId');
$req->execute([
    'userId' => $userId,
]);
$user = $req->fetch();

if ($user && $user->confirmation_token == $token) {
     $req = $pdo->prepare('UPDATE user SET confirmation_token = NULL, confirmation_at = NOW() WHERE id = :userId');
     $req->execute([
         'userId' => $userId,
     ]);

     setSessionFlash("Votre compte à bien été validé", "success");
     setSessionUser($user);

     header("Location: ../forum/account.php");
} else {
    setSessionFlash("Ce token n'est plus valide", "danger");

    header('Location: index.php');
}

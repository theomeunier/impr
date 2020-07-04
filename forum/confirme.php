<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

session_abort();

$user_id = $_GET['id'];
$token = $_GET['token'];

$req = $pdo->prepare('SELECT confirmation_token FROM user WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();

if ($user && $user->confirmation_token == $token) {
     $req = $pdo->prepare('UPDATE user SET confirmation_token = NULL,  confirmation_at = NOW() WHERE id = ?');
     $req->execute([$user_id]);
     $_SESSION['flash']['success'] = "votre compte a bien ete validé ";
     $_SESSION['auth'] = $user;

     header("Location: ../forum/account.php");
} else {
    $_SESSION['flash']['danger'] = "Ce token n'est plus valide";

    header('Location: index.php');
}

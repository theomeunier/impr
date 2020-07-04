<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

unset($_SESSION["auth"]);
$_SESSION['flash']['success'] = "vous êtes maintenant deconnecter ";

header("Location: ". getLink("forum/login.php"));

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

unset($_SESSION["auth"]);
setSessionFlash("Vous êtes maintenant déconnecté", "success");

header("Location: /index.php");

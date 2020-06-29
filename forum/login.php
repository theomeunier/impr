<?php
//die("account");
include "{$_SERVER['DOCUMENT_ROOT']}/forum/fonction.php";
ob_start();
?>

<h1>Votre compte </h1>
<p> votre compte a bien bien étais crée et verifier</p>

<?php
var_dump($_SESSION);
?>

<?php
$content = ob_get_clean();
include '../template.php';
?>







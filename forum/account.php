<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (checkUserConnected()) {
    header('Location: ../index.php');
}

ob_start();
?>

<h1>Votre compte</h1>
<p>
    <?php dump($_SESSION['auth']); ?>
</p>

<?php
$content = ob_get_clean();
include '../template.php';

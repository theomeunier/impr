<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

    $userConnected = checkUserConnected();

    if (!$userConnected) {
        $_SESSION['flash']['danger'] = "Erreur de connrxion";

        header('Location: ../index.php');
    }

    ob_start();
?>

<h1>Votre compte </h1>
<p> votre compte a bien bien étais crée et verifier</p>


<?php
$content = ob_get_clean();
include '../template.php';
?>







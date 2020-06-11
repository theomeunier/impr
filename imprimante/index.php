<?php
include "{$_SERVER['DOCUMENT_ROOT']}/methods/display.php";
?>

<!DOCTYPE html>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>L'imprimeur</title>
    <link rel="stylesheet" type="text/css" href="/imprimante/css/imprimante.css"/>
    <?php print_head() ?>
</head>
<body>
<header>
    <?php print_header() ?>
</header>
<section>
    <div class="block-home" id="block-fdm">
        <div class="home">
        <div class="home-element">
                <h2> FDM </h2>
                <p> Nous allons découvivre l'imprimante FDM, l'imprimante de demain</p>
                <a href="fdm.php"> DECOUVREZ LA FDM </a>
        </div>
        </div>
        <div class="home-element">
                <img class="home_img" src="img/FDM.jpg" alt="impriamnte FDM">
        </div>
    </div>
    <div class="block-home" id="block-fdm">
        <div class="home">
            <div class="home-element">
                <h2> SLA </h2>
                <p> Je vais vous présente le principe de fabrication de la SLa</p>
                <a href="fdm.php"> DECOUVREZ LA SLA </a>
            </div>
        </div>
        <div class="home-element">
            <img class="home_img" src="img/SLA.jpg" alt="impriamnte FDM">
        </div>
    </div>
    <div class="block-home" id="block-fdm">
        <div class="home">
            <div class="home-element">
                <h2>Polyjet </h2>
                <p> Voici les imprimante que les industrie utilise </p>
                <a href="fdm.php"> DECOUVREZ Le POLYJET </a>
            </div>
        </div>
        <div class="home-element">
            <img class="home_img" src="img/polyjet.jpg" alt="impriamnte FDM">
        </div>
    </div>
</section>
<footer>
    <?php print_footer() ?>
</footer>
</body>
</html>

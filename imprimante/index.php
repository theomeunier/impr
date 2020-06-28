<?php
ob_start();
?>
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
<?php
$content = ob_get_clean();
include '../template.php';
?>


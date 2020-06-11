<?php
include "{$_SERVER['DOCUMENT_ROOT']}/methods/display.php";
?>

<!DOCTYPE html>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>L'imprimeur</title>
    <link rel="stylesheet" type="text/css" href="/materiaux/css/materiaux.css"/>
    <?php print_head() ?>
</head>
<body>
<header>
    <?php print_header() ?>
</header>
<section class="acceuil">
    <div class="block-home">
        <div id="block-PLA">
            <div id="desc-PLA" class="block-desc1">
                <h2> PLA </h2>
                <p class="texte-imp"> Je vais vous présenter le PLA le plastique le plus utiliser </p>
                <a href="/materiaux/pla.php">DECOUVREZ LE PLA </a>
            </div>
            <div id="img-html-css" class="block-image1">
                <img class="image-pla" src="img/pla.jpg" alt="image PLA ">
            </div>
        </div>
    </div>
    <div class="block-home">
        <div id="block-ABS">
            <div id="desc-ABS" class="block-desc2">
                <h2> ABS </h2>
                <p class="texte-imp">Je vais vous fair découvrir L'ABS  </p>
                <a href="/materiaux/abs.php">DECOUVREZ L'ABS </a>
            </div>
            <div id="img-html-css" class="block-image2">
                <img class="image-abs"  src="img/ABS.jpg" alt="image ABS">
            </div>
        </div>
    </div>
    <div class="block-home">
        <div id="block-HIPS">
            <div id="desc-HIPS" class="block-desc1">
                <h2> HIPS </h2>
                <p class="texte-imp"> Nous allons découvrir les suppors pour l'impression 3D </p>
                <a href="/materiaux/hips.php">DECOUVREZ L'HIPS</a>
            </div>
            <div id="img-html-css" class="block-image1">
                <img class="iamge-hips" src="img/HIPS-mat.jpg" alt="image HIPS ">
            </div>
        </div>
    </div>
    <div class="block-home">
        <div id="block-resine">
            <div id="desc-resine" class="block-desc2">
                <h2> Résines </h2>
                <p class="texte-imp">Je vais vous fair découvrir l'impresion avec la résines   </p>
                <a href="/materiaux/resines.php">DECOUVREZ LES RESINES </a>
            </div>
            <div id="img-html-css" class="block-image2">
                <img class="image-resine" src="img/resine.jpg" alt="image résine">
            </div>
        </div>
    </div>
    </div>
</section>
<footer>
    <?php print_footer() ?>
</footer>
</body>
</html>


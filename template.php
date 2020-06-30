<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
if (isset($_SESSION['flash'])) : ?>
    <?php foreach ($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?= $type ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION ['flash']); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <title>L'imprimeur</title>
    <meta name="dsicription"
          content="l'impression 3D et son fonctionnement, tout connaitre sur le sujets et appronfondir ces connaissances ">
    <link rel="stylesheet" type="text/css" href="/css/style.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/impri.min.css"/>
    <link rel="icon" href="image/png/logo_isox3.png"/>
</head>
<body>
<div id="wrapper">
    <header>
        <div>
            <img class="image-header" src="/image/Logo_isox1.png" alt="logo site">
        </div>
        <nav class="nav-menu">
            <ul>
                <li class="menu-acc">
                    <img class="image-menu" src="/image/logoacc.png" alt="logo acceuil"
                         onclick="window.location='/index.php'"/>
                </li>
                <li>
                    <a href="/imprimante/index.php">Les imprimantes 3D</a>
                    <ul class="unroll">
                        <li><a href="/imprimante/fdm.php">FDM</a></li>
                        <li><a href="/imprimante/sla.php">SLA</a></li>
                        <li><a href="/imprimante/polyjet.php">Polyjet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/materiaux/index.php">Les matériaux</a>
                    <ul class="unroll">
                        <li><a href="/materiaux/pla.php">PLA</a></li>
                        <li><a href="/materiaux/abs.php">ABS</a></li>
                        <li><a href="/materiaux/hips.php">HIPS</a></li>
                        <li><a href="/materiaux/resines.php">les resines</a></li>
                    </ul>
                </li>
                <li><a href="/stl/index.php">STL</a></li>
                <li><a href="/forum">forum</a></li>
            </ul>
        </nav>
    </header>
    <section class="content_wrapper">
        <?php echo $content; ?>
    </section>
    <footer class="div-footer">
        <div class="footer_element">
            <h3>Liens utiles</h3>
            <p><a href="/footer/mentionss.php">Mentions légales</a></p>
            <p><a href="/footer/condition.php">Conditions d'utilisation</a></p>
            <p><a href="/footer/cookie.php">Politique des cookies</a></p>
            <p><a href="/footer/conf.php">Politique de confidentialité</a></p>
        </div>
        <div class="footer_element">
            <h3>Nous contacter</h3>
        </div>
        <div class="footer_element">
            <h3>Description</h3>
            <p>Notre site vous présente des fonctionnement de la 3D et tout ce qui tourne autour.</p>
        </div>
        <div class="footer_element">
            <h3>Nos réseaux</h3>
            <img class="img-footer" src="/image/yt.png" alt="youtube"/>
            <img class="img-footer" src="/image/mail.jpg" alt="mail"/>
            <img class="img-footer" src="/image/instagrame.jpg" alt="insta"/>
        </div>
    </footer>
</div>
</body>
</html>

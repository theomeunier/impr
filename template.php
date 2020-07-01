<!DOCTYPE html>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <title>L'imprimeur</title>
    <meta name="dsicription"
          content="l'impression 3D et son fonctionnement, tout connaitre sur le sujets et appronfondir ces connaissances ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.min.css"/>
    <link rel="icon" href="/image/png/logo_isox3.png"/>
</head>
<body>
<div>
    <img class="image-header" src="/image/Logo_isox1.png" alt="logo site">
</div>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #58a1e5;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/image/logoacc.png" width="30" height="30" class="d-inline-block align-top" alt=""
                     loading="lazy" onclick="window.location='/index.php'"/">
            </a>
            <button class="navbar-toggler mr-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownImprimante" role="button"
                           data-toggle="dropdown" aria-expanded="false">
                            Les imprimantes 3D
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownImprimante">
                            <li><a class="dropdown-item" href="/imprimante/index.php">Les imprimantes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/imprimante/fdm.php">fdm</a></li>
                            <li><a class="dropdown-item" href="/imprimante/sla.php">sla</a></li>
                            <li><a class="dropdown-item" href="/imprimante/polyjet.php">polyjet</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMateriaux" role="button"
                           data-toggle="dropdown" aria-expanded="false">
                            Les matériaux
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMateriaux">
                            <li><a class="dropdown-item" href="/materiaux/index.php">Matériaux</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/materiaux/pla.php">pla</a></li>
                            <li><a class="dropdown-item" href="/materiaux/abs.php">abs</a></li>
                            <li><a class="dropdown-item" href="/materiaux/hips.php">hips</a></li>
                            <li><a class="dropdown-item" href="/materiaux/resines.php">résines</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php if ($_SESSION['auth']): ?>
                        <div class="btn-group" role="group">
                            <button id="btnGroupUserConnected" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Bonjour <?php echo $_SESSION['auth']->username; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupUserConnected">
                                <li><a class="dropdown-item" href="/forum/account.php">Mon compte</a></li>
                                <li><a class="dropdown-item" href="/forum/logout.php">Se déconnecté</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="/forum/register.php" type="button" class="btn btn-primary mr-3">Crée un compte</a>
                        <a href="/forum/login.php" type="button" class="btn btn-primary mr-3">Se connecter</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>
</html>

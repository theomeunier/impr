<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";
ob_start();
?>

<div class="div-menu-polyget-1">
    <h1 class="titre-polyget"> Polyjet </h1>
    <p class="text-FDM"> Le polyjet est une imprimante utiliser surtout utilisé par les entreprises car le prix
        est assez important et la qualité d'impression est parfaite. Cette imprimante est fabriquée par
        plusieurs fabriquant mais reste quand même très rare, mais le système reste le même pour tous les
        modèles.</p>
</div>
<div class="div-menu-polyget">
    <h2 class="sous-titre-polyget-1"> La présentation </h2>
    <p> Voici une imprimante polyjet avec sa présentation descriptive des composants qu'elle possède. Je vous ai
        mis les principaux composant, lors de votre négation sur le site vous pourrez retrouver plus de détaille
        dessus. Pour toute les imprimantes c'est sensiblement le même chose.
    <p><img class="image-pre-polyget" src="img/processus-frittage-de-poudre.jpg"
            alt="processus-frittage-de-poudre"></p>
</div>
<div class="div-menu-polyget">
    <h2 class="sous-titre-polyget-2"> Le fonctionnement </h2>
    <p> L’imprimante fonctionne de la manière suivante, utilisent la lumière UV pour solidifier une résine
        polymère. Cependant, plutôt que d'utiliser un laser pour polymériser les couches d'un bac de résine, des
        têtes d'impression envoient de fines gouttelettes de résine photopolymère (comme le ferait une
        imprimante à jet d'encre) pour former une première couche. La lampe UV, attachée aux têtes d'impression,
        solidifie ensuite la résine, figeant ainsi la forme de la couche. Ensuite, le plateau d'impression
        descend légèrement (de la hauteur d'une couche d'impression) et une nouvelle couche est ajouté de la
        même façon. Le procédé se renouvelle jusqu'à ce que l'objet soit complètement imprimé.</p>
    <p><img class="image-pre-polyget" src="img/procédé-polyjet.jpg" alt="procéde polyjet"></p>
</div>
<div class="div-menu-polyget">
    <h2 class="sous-titre-polyget-3"> Les usages </h2>
    <p> Ce type d'imprimante peut vous servir pour faire des prototypes. Cette imprimante est surtout utilisée
        par des entreprises comme EKOI et plein d'autre encore. Cette imprimante n'est pas utile pour vous car
        une imprimante FDM vous conviendras parfaitement pour un usage particulier. Cette imprimante et très
        aimer de tous les entreprises qui les utilise.</p>
</div>
<div class="div-menu-polyget">
    <h2 class="sous-titre-polyget-4"> les impirmante que je vous conseil </h2>
    <p> Je suis désolée je ne px pas vous donnez de lien vers des imprimantes car pour acheter une imprimante il
        faut faire un devis avec le fabricant en personne et je pense que pour votre usage (pour particulier) ce
        type d'imprimante vous ne servirez pas. </p>
</div>

<?php
$content = ob_get_clean();
include '../template.php';

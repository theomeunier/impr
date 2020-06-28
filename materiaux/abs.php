<?php ob_start(); ?>

    <div class="div-menu-abs-1">
        <h1 class="titre-abs"> ABS </h1>
        <p> L'ABS (acrylonitrile butadiène styrène) fonctionne commme le PLA mais il a pas le même usage, ils et plus
            fait pour faire des choses plus solides. </p>
    </div>
    <div class="div-menu-abs">
        <h2 class="sous-titre-abs-1"> Le fonctionnement </h2>
        <p> Voici L'ABS (acrylonitrile butadiène styrène)c'est un deuxième plastique le plus utiliser. Le fonctionnement
            est le même que pour le PLA.
            Vous allez le rececoir en bobine de 750g ou de 1000kg ou plus, il vous sufit de couper l'extremiter du
            filament à 45° et vous pouvais l'insercert dans le tupe PTFE ( ce tupe enmène le filament de la bobine à la
            buse ) il est conseillé de l'utiliser à une température de 230°C à 260°C et pour le plateau à 105°C à 115°C
            si celui-ci est chauffant, pour une meilleur accroche je vous conseil de le préchauffer avant pour une
            meilleur dicipation de chaleur sur tout le bed.
            Pour l'ABS il est oblicatoir d'avoir un plateau chaffaut sinon celui-ci ne tiendra pas sur le bed. Pour
            mettre à cette température vous allez avoir une option dans votre logiceil comme cura ( premier logiciel de
            de prépartion de print pour en suite l'envoyer dans sur votre imprimante ) ou autre.
        <p><img class="image-pre-abs" src="img/PLA.jpg" alt="imprimanteFDM"></p>
    </div>
    <div class="div-menu-abs">
        <h2 class="sous-titre-abs-1"> Les usages </h2>
        <p>l'usage avec de l'ABS est itentique ou presque avec le PLA car nous pouvons faire les même choses, et aussi
            nous pouvons des choses plus solides. L'ABS est
            consu pour cela pour faire des pièces resistante. Comme un skeat, une pièce de portail. Ce que j'aime avec
            ce plastique c'est que nous pouvons remplacer chaque pièces casser chez sois ou chez des personnes voisnes
            ou autres. Dans mon cas j'aide beaucoup des personnes qui on bessoin de mon aide sur ce type t'ennui. Ils me
            demendent si je peux faire le pièces et je leur remplace et les perosnnes sont content et aussi avec
            l'impression c'est que c'est coutable.
        <p><img class="image-pre-ab" src="img/ABS.jpg" alt="imprimanteFDM"></p>
    </div>
<?php
$content = ob_get_clean();
include '../template.php'
?>


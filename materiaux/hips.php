<?php
ob_start();
?>
    <div class="div-menu-hips-1">
        <h1 class="titre-hips"> HIPS </h1>
        <p>Le PVA(PolyVinyl Alcohol) et le HIPS ce sont de filament pour faire des support qui parte avec l'eau.</p>
    </div>
    <div class="div-menu-hips">
        <h2 class="sous-titre-hips-1"> Le fonctionnement </h2>
        <p>Le fonctionnement est le même que le PLA et L'ABS mais pour l'HIPS il faut un double extruteur pour que celui
            fonctionne. Ce matériau se vend généralement en bobine de 500g ou 1kg et est disponible seulement en blanc.
            La température optimale pour l’extrusion de ce dernier est 235°C et chauffer le plateau (bed) à une
            température de 90 à 100°C mais si la surface est recouvert de ruban à masquer a peintre bleu chauffer a 70°C
            mais pour meilleur dispersion sur le plasteau préchauffer a 80°C , mais il est recommandé de vérifier les
            spécifications fournies par votre fournisseurs car des additifs ou procédés de fabrication particuliers
            peuvent avoir une influence sur la température requise. Aprés l'impression fini vous aller regarque que le
            print contient de L'HIPS il faut le mettre pendant 24h dans un solvant qui n'affect pas le PLA et L'ABS.
        <p><img class="image-pre-hips" src="img/HIPS.jpg" alt="imprimanteFDM"></p>
    </div>
    <div class="div-menu-hips">
        <h2 class="sous-titre-hips-1"> Les usages </h2>
        <p> L'HPS sert a remplacer les support que vous pouvez mettre que vos print avec une imprimante avec une buse
            d'impression, l'HIPS est de couleur blanche.
        <p><img class="image-pre-hips" src="img/support-hips.jpg" alt="imprimanteFDM"></p>
    </div>
<?php
    $content = ob_get_clean();
    include '../template.php'
?>



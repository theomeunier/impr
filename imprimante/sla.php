<?php ob_start(); ?>

    <div class="div-menu-SLA-1">
        <h1 class="titre-SLA"> SLA </h1>
        <p> Stereolithographie ou SlA= ( Stereolithography Apparatus ) c'est la deuxième impriamte la plus utiliser sur
            le marcher de la 3D . cette imprimante est fabriquer par plusieur fabriquant, mais le système reste le meme
            pour tout les modèles.</p>
    </div>
    <div class="div-menu-SLA">
        <h2 class="sous-titre-SLA-1"> La présentation </h2>
        <p> Voici une imprimante SLA avec le descriptif des composants qu'elle possède. Je vous ai mis les principaux,
            lors de votre navigation sur le site vous pourrez retrouver plus de détaille dessus. Pour toute les
            imprimantes c'est sensiblement le même chose.</p>
        <p><img class="image-pre-SLA" src="img/SLA-presentation.jpg" alt="imprimante-FDM"></p>
    </div>
    <div class="div-menu-SLA">
        <h2 class="sous-titre-SLA-2"> Le fonctionnement </h2>
        <p> Tout comme la FDM, l’imprimante va dans un premier analyser le fichier CAO, puis en fonction de la forme de
            l’objet va lui ajouter des fixations temporaires pour maintenir certaines parties qui pourraient
            s’affaisser. Puis le laser va commencer par toucher et durcir instantanément la première couche de l’objet à
            imprimer. Une fois que la couche initiale de l’objet a durci, la plate-forme est abaissée, est ensuite
            exposée une nouvelle couche de surface de polymère liquide. Le laser trace à nouveau une section
            transversale de l’objet qui colle instantanément à la pièce durcie du dessous
            Ce processus se répète encore et encore jusqu’à ce que la totalité de l’objet ce soit formé et soit
            entièrement immergé dans le réservoir. La plateforme va ensuite se relever pour faire apparaitre l’objet
            fini en trois dimensions. Après qu’il ai été rincé avec un solvant liquide pour le débarrasser de l’excès de
            résine, l’objet est cuit dans un four à ultraviolet pour durcir la matière plastique supplémentaire.</p>
        <p><img class="image-pre-SLA" src="img/fonc-SLA.png" alt="imprimante-FDM"></p>
    </div>
    <div class="div-menu-SLA">
        <h2 class="sous-titre-SLA-3"> Les usages </h2>
        <p> Cette imprimante est conseillée pour faire des impressions solide, lisse et minutieux, vous pourrez faire
            avec cette imprimante toute type d'impression pareil que la FDM. Mais avec un format de pièces réduite par
            rapport à la FDM. Le SLA est plus destiner à faire des pièces de petite taille et de très bonne qualité.
            Cette imprimante et destiner au particulier comment les entreprises. </p>
    </div>
    <div class="div-menu-SLA">
        <h2 class="sous-titre-SLA-4"> les impirmante que je vous conseil </h2>
        <p>Ce type d'imprimante il en existe une marque très connut et de très bonne qualité et que je vous conseille je
            plus. Je vais vous diriger vers des liens de machine et que je vous conseil. Ce n'est pas parce que
            l'imprimante coute moins chère que les autres quel est nul ou que l'imprimante la plus couteuse et la mieux.
            Pour ce types d'imprimante je vais vous conseil trois modèles différents.</p>
        <table class="table-SLA-conseil">
            <tr>
                <td><img class="image-conseil-SLA" src="img/SLA1.jpg"><a
                            href="hhttps://3ddentalstore.fr/boutique/imprimante-3d/pack-formlabs-2/"><p
                                class="p-consiel-SLA"> Form 2 de Formlabs</p></a></td>
                <td><img class="image-conseil-SLA" src="img/SLA2.jpg"><a
                            href="https://3ddentalstore.fr/boutique/imprimante-3d/pack-formlabs-2/"><p
                                class="p-consiel-SLA"> Slash+ </p></a></td>
                <td><img class="image-conseil-SLA" src="img/SLA3.jpg"><a
                            href="https://www.ldlc.com/fiche/PB00238845.html?gclid=CjwKCAjwv6blBRBzEiwAihbM-VscrUiJw9797
                            ts4tbnRuGrJrASaDQDcvZWivaQsQvGmPeX_x4n-ahoC9eEQAvD_BwE">
                        <p class="p-consiel-SLA"> Nobel 1.0 A </p></a></td>
            </tr>
        </table>
    </div>
<?php
$content = ob_get_clean();
include '../template.php';
?>
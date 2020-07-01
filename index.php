<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";
ob_start();
?>

<h1 class="title"> Bienvenue sur L'imprimeur</h1>
<p class="text">
    Ce site vous propose des aides sur le monde de la 3D<br><br>
    Ainsi vous pouvez trouver les différentes machines pour la 3D, les différentes matières qui vont à cela.
    Vous pouvez trouver des solutions pour vos problèmes avec votre imprimante. Ainsi je vous mets à votre
    disposition.<br><br>
    Pour bien comprendre votre imprimante je vous conseille de bien l'étudier. Et pourquoi pas l'assembler comment
    sur certaines imprimante aujourd'hui comme l'Anet A8, Prusa i3 mk3 etc... Pour ainsi bien comprendre
    comment fonctionne une imprimante, après cela vous trouverais vos problèmes tout seul car vous sauriez
    comment les résoudre.<br><br>
    Pour plus d'information je vous conseille d'aller voir les différentes parties que je vous propose ci-dessous.
</p>

<?php
$content = ob_get_clean();
include 'template.php';

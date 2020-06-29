<?php ob_start(); ?>

<h1> Maintenance </h1>
<p> cet page est en maintenance merci de bien vouloir passer plus tard </p>

<?php
$content = ob_get_clean();
include 'template.php';
?>
<?php ob_start(); ?>

<h1> Maintenance</h1>
<a> ce site est en maintenance merci de passer plus tard à très vite sur le site </a>

<?php
$content = ob_get_clean();
include 'template.php';
?>

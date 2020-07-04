<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";
ob_start();
?>
    <h1>Cahnger son mot de passer</h1>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control"/>
    </div>
<button type="submit" class="btn btn-primary mt-3">Changer le mot de passe </button>


<?php
$content = ob_get_clean();
include '../template.php';
?>


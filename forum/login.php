<?php
include "{$_SERVER['DOCUMENT_ROOT']}/forum/fonction.php";
ob_start();
?>
<?php
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST ['password'])){
    include $_SERVER['DOCUMENT_ROOT'] . "/db.php";
    $req = $pdo -> prepare('SELECT * FROM users WHERE usermane = :username OR email = :useranme');
    $req -> execute(['username ' => $_POST['username']]);
    $user = $req->fetch();
}
?>

<h1>Se connnecter </h1>
<form action="#" method="POST">
    <div class="forum-group">
        <label for="username">Pseudo ou email </label>
        <input type="text" id="username" name="username" class="form-control"/>
    </div>
    <div class="forum-group">
        <label for="password">mot de passe</label>
        <input type="password" id="password" name="password" class="form-control"/>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
<p>page login</p>

<?php
$content = ob_get_clean();
include '../template.php';
?>







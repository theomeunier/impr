<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";
include $_SERVER['DOCUMENT_ROOT'] . "/db.php";
ob_start();
?>
<?php
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST ['password'])){
    $req = $pdo->prepare('SELECT * FROM users WHERE usermane = :username OR email = :useranme');
    $req -> execute(['username '=>$_POST['username']]);
    $user = $req->fetch();
    var_dump(password_verify($_POST['password'], PASSWORD_BCRYPT));
    var_dump($user);
}
?>

<h1>Se connecter</h1>
<form action="#" method="POST">
    <div class="forum-group">
        <label for="username">Pseudo ou email</label>
        <input type="text" id="username" name="username" class="form-control"/>
    </div>
    <div class="forum-group">
        <label for="password">mot de passe</label>
        <input type="password" id="password" name="password" class="form-control"/>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php
$content = ob_get_clean();
include '../template.php';
?>



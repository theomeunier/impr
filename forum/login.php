<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";
include $_SERVER['DOCUMENT_ROOT'] . "/db.php";
ob_start();

if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST ['password'])) {
    $errors = [];

    $req = $pdo->prepare('SELECT * FROM users WHERE usermane = :username OR email = :useranme');
    $req->execute(['username ' => $_POST['username']]);
    $user = $req->fetch();

    if(empty($user)) {
        $errors['username'] = 'Mauvais pseudo ou email';
    }

    $checkPassword = password_verify($_POST['password'], PASSWORD_BCRYPT);
    if($checkPassword) {
        $errors['password'] = 'Mauvais mot de passe';
    }

    header('Location: /forum/account.php');
}
?>

<h1>Se connnecter</h1>

<?php if (!empty($errors)): ?> // message de vigilance
    <div class="alert alert-danger"><
        <ul>
            <?php foreach ($errors as $error): ?>
                <li>
                    <?php echo $error; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

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

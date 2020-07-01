<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (!checkUserConnected()) {
    header('Location: /forum/account.php');
}

ob_start();

if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST ['password'])) {
    $errors = [];

    $req = $pdo->prepare('SELECT * FROM user WHERE username = :username OR email = :username');
    $req->execute(['username'=> $_POST['username']]);
    $user = $req->fetch();

    if(empty($user)) {
        $errors['username'] = 'Mauvais pseudo ou email';
    }

    $checkPassword = password_verify($_POST['password'], $user->password);
    if(!$checkPassword) {
        $errors['password'] = 'Mauvais mot de passe';
    }

    if(empty($errors)) {
        session_start();
        $_SESSION['auth'] = $user;

        header('Location: /forum/account.php');
    }
}
?>

<h1>Se connecter</h1>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
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
    <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
</form>

<?php
$content = ob_get_clean();
include '../template.php';


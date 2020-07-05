<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (!checkUserConnected()) {
    header('Location: /forum/account.php');
}

ob_start();

if (isset($_GET['id']) && isset($_GET['token'])) {
    $req = $pdo->prepare('SELECT * FROM user WHERE id = ? AND reset_token IS NOT NULL AND reset_at = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
    $req->execute([$_GET['id'], $_GET['token']]);
    $user = $req->fetch();

    if($user) {
        if (!empty($_POST)){
            if (!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $pdo->prepare('UPDATE user SET password = ?, reset_at = NULL, reset_token = NULL')->execute([$password]);
                $success = "Votre mot de passe à bien été modifié";
                $_SESSION['auth'] = $user;
                header('Location: /forum/account.php');
                exit();
            }
        }
    }else{
        $errors['token'] = "Ce token n'est pas valide";
         //header('Location: /forum/login.php');
        exit();
    }
} else {
    header('Location: /forum/login.php');
    exit();
}
?>
    <h1>Réinitialiser mon mot de passe</h1>

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
        <div class="mb-3">
            <label for="password">mot de passe </label>
            <input type="password" id="password" name="password" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="password">confirmation du mot de passe</label>
            <input type="password" id="password" name="password_confirm" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Réinitialiser votre mot de passe</button>
    </form>

<?php
$content = ob_get_clean();
include '../template.php';

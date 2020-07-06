<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (!checkUserConnected()) {
    header('Location: /forum/account.php');
}

$idUser = $_GET['id'];
$token = $_GET['token'];

ob_start();

if (isset($idUser) && isset($token)) {
    $req = $pdo->prepare('SELECT * FROM user WHERE id = :idUser AND reset_at IS NOT NULL AND reset_token = :token');
    $req->execute([
        'idUser' => $idUser,
        'token' => $token,
    ]);
    $user = $req->fetch();

    if(!$user) {
       $errors['token'] = "Ce token n'est pas valide";
    }

    if (!empty($_POST)) {
        $password = $_POST['password'];
        $passwordConfirm = $_POST['password_confirm'];

        $errors = [];

        if (empty($password) && empty($passwordConfirm) && $password !== $passwordConfirm) {
            $errors["password"] = "Les 2 mots de passe doivent correspondes";
        }

        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        $req = $pdo->prepare('UPDATE user SET password = :password, reset_at = NULL, reset_token = NULL WHERE id = :idUser');
        $req->execute([
            'password' => $hashPassword,
            'idUser' => $idUser,
        ]);

        setSessionFlash("Votre mot de passe à bien été modifié", "success");
        setSessionUser($user);

        header('Location: /forum/account.php');
    }
} else {
    header('Location: /forum/login.php');
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
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" class="form-control" required/>
        </div>
        <div class="mb-3">
            <label for="password">Confirmation du mot de passe</label>
            <input type="password" id="password" name="password_confirm" class="form-control" required/>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Réinitialiser votre mot de passe</button>
    </form>

<?php
$content = ob_get_clean();
include '../template.php';

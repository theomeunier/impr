<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (checkUserConnected()) {
    header('Location: ../index.php');
}

ob_start();

if (!empty($_POST)) {
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];

    if (!empty($password) || $password && $passwordConfirm){
        $errors ['password'] = "les mots de passes ne correspondent pas";
    } else {
        $userId = $_SESSION['auth']->id;
        $hashPassword = password_hash($password, PASSWORD_BCRYPT);

        $req = $pdo->prepare('UPDATE user SET password = :password WHERE id = :userId');
        $req->execute([
            'password' => $hashPassword,
            'userId' => $userId,
        ]);

        $success = true;
    }
}

?>

<?php if(!empty($_SESSION["flash"])): ?>
    <?php foreach($_SESSION["flash"] as $key => $value): ?>
        <div class="alert alert-<?php echo $key; ?>">
            <?php echo $value; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

    <h1>Votre compte</h1>
    <p class="font-weight-bold">
        speudo : <?php echo $_SESSION['auth']->username; ?><br>
        N° de compte: <?php echo $_SESSION['auth']->id; ?><br>
        Email : <?php echo $_SESSION['auth']->email; ?> <br>
        Date de création du compte : <?php echo $_SESSION['auth']->confirmation_at; ?>
    </p>
    <form action="" method="post">
        <div class="form_group">
            <input class="form-control mt-3" type="password" name="password" placeholder="Changer de mot de passe">
        </div>
        <div class="form_group">
            <input class="form-control mt-3 " type="password" name="password_confirm"
                   placeholder="Confirmation du mot de passe">
        </div>
        <button class="btn btn-primary mt-3">Changer de mot de passe</button>
    </form>

<?php
unset($_SESSION["flash"]);

$content = ob_get_clean();
include '../template.php';

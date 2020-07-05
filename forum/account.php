<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (checkUserConnected()) {
    header('Location: ../index.php');
}
ob_start();

if (!empty($_POST)) {

    if (!empty($_POST['password']) || $_POST['password'] && $_POST['password_confirm']){
        $errors ['password'] = "les mots de passes ne correspondent pas";
    } else {
        $user_id = $_SESSION['auth']->id;
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $pdo->prepare('UPDATE user SET password = ? WHERE id = ?')->execute([$password, $user_id]);

        $success = true;

    }
}

?>
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

<?php if ($success): ?>
    <div class="alert alert-success">
        Votre mot de passe viens d'être changer
    </div>
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
$content = ob_get_clean();
include '../template.php';

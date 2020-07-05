<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (!checkUserConnected()) {
    header('Location: /forum/account.php');
}

ob_start();

if (!empty($_POST) && !empty($_POST['email'])) {
    $errors = [];
    var_dump($errors);
    $req = $pdo->prepare('SELECT * FROM user WHERE email = :email AND confirmation_at IS NOT NULL ');
    $req->execute(['email' => $_POST['email']]);
    $user = $req->fetch();


    if ($user) {
        $reset_token = strRandom(60);
        $pdo->prepare('UPDATE user SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
        $success['username'] = 'les instruction du rappel du mot de passe vous ont été envoyées par email';
        $link = getLinkPageReset($user->id, $reset_token);
        $txt = <<<EOT
Bonjour,

Afin de réiniatiliser votre mot de passe merci de cliquer sur le liens ci-contre  :$link
L'équipe
EOT;
        sendMail(
            "confirmation de votre compte",
            ["noryply@limprimeur.com" => "L'imprieur"],
            [$_POST['email']],
            preg_replace('/< link >/', $link, file_get_contents("mail_reset.html")),
            $txt
        );

        header('Location: /forum/login.php');
    } else {
        $errors = "Aucun compte ne correspond à cet adresse";
    }
}
?>

    <h1>Changer de mot de passe</h1>

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
        Un email de confirmation vous a été envoyé pour valider votre compte
    </div>
<?php endif; ?>

    <form action="#" method="POST">
        <div class="mb-3">
            <label for="username">Email</label>
            <input type="email" name="email" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
    </form>

<?php
$content = ob_get_clean();
include '../template.php';


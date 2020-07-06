<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";

if (!checkUserConnected()) {
    header('Location: /forum/account.php');
}

ob_start();

$email = $_POST['email'];

if (!empty($_POST) && !empty($email)) {
    $errors = [];

    $req = $pdo->prepare('SELECT * FROM user WHERE email = :email AND confirmation_at IS NOT NULL');
    $req->execute([
        'email' => $email,
    ]);
    $user = $req->fetch();

    if ($user) {
        $userId = $user->id;
        $resetToken = strRandom(60);

        $req = $pdo->prepare('UPDATE user SET reset_token = :token, reset_at = NOW() WHERE id = :idUser');
        $req->execute([
            'token' => $resetToken,
            'idUser' => $userId
        ]);

        $link = getLinkPageReset($userId, $resetToken);
        $txt = <<<EOT
Bonjour,

Afin de réiniatiliser votre mot de passe merci de cliquer sur le liens ci-contre : $link
L'équipe
EOT;

        sendMail(
            "confirmation de votre compte",
            ["noryply@limprimeur.com" => "L'imprieur"],
            [$email],
            preg_replace('/< link >/', $link, file_get_contents("mail_reset.html")),
            $txt
        );

        $success = true;
    } else {
        $errors['user'] = "Aucun compte ne correspond à cet adresse";
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
        Les instruction du rappel du mot de passe vous ont été envoyées par email
    </div>
<?php endif; ?>

    <form action="#" method="POST">
        <div class="mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Obtenir un nouveau mot de passe</button>
    </form>

<?php
$content = ob_get_clean();
include '../template.php';

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/fonction.php";
ob_start();

session_start();
if (isset($_SESSION['auth'])) {
    header('Location: index.php');
    exit();
}

if (!empty($_POST)){
extract($_POST);
$valid = true;

if (isset($_POST['oublie'])) {
    $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail afin d envoyer le mail pour la récupèration du mot de passe 

// Si le mail est vide alors on ne traite pas
    if (empty($mail)) {
        $valid = false;
        $er_mail = "Il faut mettre un mail";
    }
}

if ($valid){
$verification_mail = $DB->query("SELECT id, user, email, n_mdp FROM utilisateur WHERE mail = ?",
    array($mail));
$verification_mail = $verification_mail->fetch();

if (isset($verification_mail['email'])) {
    if ($verification_mail['n_mdp'] == 0) {
// On génère un mot de passe à l'aide de la fonction RAND de PHP
        $new_pass = rand();

// Le mieux serait de générer un nombre aléatoire entre 7 et 10 caractères (Lettres et chiffres)
        $new_pass_crypt = crypt($new_pass, "$6$rounds=5000$macleapersonnaliseretagardersecret$");

// $new_pass_crypt = crypt($new_pass, "VOTRE CLÉ UNIQUE DE CRYPTAGE DU MOT DE PASSE");
        $objet = 'Nouveau mot de passe';
        $to = $verification_mail['email'];

//envoye du mail
        $link = getLinkPageConfirmation($user_id, $token);
        $txt = <<<EOT
Bonjour,

Afin de changer votre mot de passe merci ce bien vouloir cliquer sur le liens ci-contre : $link1
L'équipe
EOT;

        sendMail(
            "confirmation de votre compte",
            ["noryply@limprimeur.com" => "L'imprieur"],
            [$_POST['email']],
            preg_replace('/< link >/', $link1, file_get_contents("mail_change.html")),
            $txt
        );

        $success = true;
    }
}

?>
?>
<h1>Changer son mot de passe</h1>
<div class="mb-3">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control"/>
</div>
<input type="email" placeholder="Adresse mail" name="mail" value="<?php if (isset($mail)) {
    echo $mail;
} ?>" required>
           
<button type="submit" name="oublie">Envoyer</button>


<?php
$content = ob_get_clean();
include '../template.php';
?>


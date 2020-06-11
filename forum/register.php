<?php include "{$_SERVER['DOCUMENT_ROOT']}/methods/display.php"; ?>
<?php include "/forum/fonction.php"; ?>


<!DOCTYPE html>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>L'imprimeur</title>
    <?php print_head() ?>
</head>
<body>
<header>
    <?php print_header() ?>
</header>
<section>
    <h1> S'inscrire</h1>

    <form action="" method="POST">
        <div class="forum-group">
            <label for="">Pseudo</label>
            <input type="text" name="username" class="form-control"  />
        </div>
        <div class="forum-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" />
        </div>
        <div class="forum-group">
            <label for="">mot de passe</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="forum-group">
            <label for="">Confirmer votre mot de passe</label>
            <input type="password" name="password_confirm" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary"> M'inscrire</button>
    </form>

    <?php
    // exigence pour champs demandées
    if (!empty($_POST)){
        $errors = array();

        if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
            $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";
        }
        else{ // voir si la basse de donner à déjà ce nom d'utilisateur
            $req = $pdo -> prepare('SELECT id FROM users WHERE username = ?');
            $req-> execute([$_POST['username']]);
            $user = $req ->fetch();

            if ($user){
                $errors['username'] = 'Ce speudo est déjà pris';
            }
        }

        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
            $errors['email'] = "votre email n'est pas valide";
        }
        else{ // voir si la basse de donnée a déjà l'email
            $req = $pdo -> prepare('SELECT id FROM users WHERE mail = ?');
            $req-> execute([$_POST['mail']]);
            $user = $req ->fetch();

            if ($user){
                $errors['email'] = 'Ce mail est déjà utilisé par un autre utilisateur';
            }
        }
        if (empty($_POST ['password']) || $_POST['password'] != $_POST['password_confirm']){
            $errors['password'] = "vous devez rentrer un mot de passe valise ";
        }

        // conexion à la machine
        if (empty($errors)){
            require_once '/forum/db.php';
            $req = $pdo-> prepare('INSERT INTO users SET username = ?, password = ?, email = ?');
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);// criptage mode de passe
            $req-> execute([$_POST ['username'], $password, $_POST['email']]);
            die('Notre compte a bien été crée');
        }
    }
    debug($errors);

    ?>
</section>
<footer>
    <?php print_footer() ?>
</footer>
</body>
</html>

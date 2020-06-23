<?php include "{$_SERVER['DOCUMENT_ROOT']}/methods/display.php"; ?>
<?php include "{$_SERVER['DOCUMENT_ROOT']}/forum/fonction.php" ?>


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
<div id="wrapper">
<section class="content_wrapper">

    <h1> S'inscrire</h1>

    <?php  if (!empty($errors)): ?> // message de vigilance
        <div class="alert alert-danger"><
            <p>Vous n'avez pas rempli le formulaire correctement</p>
            <ul>
                <?php foreach($errors as $error): ?>
                    <li>
                        <?php echo $error; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

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
        require_once 'db.php';

        if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
            $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";
        }
        else{ // voir si la basse de donner à déjà ce nom d'utilisateur
            $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
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
            $req = $pdo -> prepare('SELECT id FROM users WHERE email = ?');
            $req-> execute([$_POST['email']]);
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
            $req = $pdo-> prepare('INSERT INTO users SET username = ?, password = ?, email = ?, 
confirmation_token = ?');
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);// chiffrement du mot de passe
            $token = str_random(60);
            debug($token);
            $req-> execute([$_POST ['username'], $password, $_POST['email'], $token ]);
            $user_id = $pdo->lastInsertId();
            mail ($_POST['email'], 'confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce liens\n\nhttp://88.198.243.216/forum/confirme.php?id=$user_id&token=$token");
            header('location: login.php');
            exit();
        }
       var_dump($errors);
    }

    ?>
</section>
<footer>
    <?php print_footer() ?>
</footer>
</div>
</body>
</html>

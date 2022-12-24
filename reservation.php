<head>
    <meta charset="utf-8">

    <title>reservation</title>
</head>

<body>
    <header>
        <?php include_once('./header.php'); ?>
    </header>
    <main>
        <div class='pagesAnnexes'>
            <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>

            <div class="createUser">

                <?php
                if (isset($_GET['login_err'])) {
                    $error = htmlspecialchars($_GET['login_err']);
                    switch ($error) {

                        case 'password': ?>
                            <div class="messageErreur"><strong>Erreur :</strong>Le mot de passe n'est pas valide</div>
                        <?php break;
                        case 'email': ?>
                            <div class="messageErreur"><strong>Erreur :</strong>L'email n'est pas</div>
                        <?php break;

                        case 'already': ?>
                            <div class="messageErreur"><strong>Erreur :</strong>Ce compte n existe pas</div>
                <?php break;
                    }
                }; ?>



                <form class="createUser" action='./connexion_bdb.php' method='post'>
                    <div class="divCreateUser">
                        <input type="text" id="nick" name="nick" placeholder="Votre pseudo">
                    </div>

                    <div class="divCreateUser">
                        <input id="email" name="email" placeholder="Votre e-mail d'inscription" placeholder="E-mail d'inscription" required>
                    </div>

                    <div class="divCreateUser">
                        <input type="password" id="pass" name="pass" placeholder="Votre mot de passe" placeholder="Mot de passe" required="required">
                    </div>


                    <div>
                        <button type='submit'>Se connecter</button>
                    </div>
                </form>

                <form action='./inscription.php' methode='post'>

                    <button type='submit'>S'inscrire</button>

                </form>
            </div>
        </div>
        <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>




    </main>
    <footer>
        <?php include_once('./footer.php'); ?>
    </footer>
</body>
<head>
    <meta charset="utf-8">

    <title>creation compte</title>
</head>

<body>
    <header>
        <?php include_once('./header.php'); ?>
    </header>
    <main>
        <div class='pagesAnnexes'>
            <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>

            <?php
            if (isset($_GET['reg_err'])) {
                $error = htmlspecialchars($_GET['reg_err']);
                switch ($error) {
                    case 'success': ?>
                        <div class="messageErreur"><strong>Félicitation, </strong>vous vous ếtes enregistré avec succès</div>
                    <?php break;
                    case 'password': ?>
                        <div class="messageErreur"><strong>Erreur :</strong>Les deux mots de passes ne sont pas identiques</div>
                    <?php break;
                    case 'email': ?>
                        <div class="messageErreur"><strong>Erreur :</strong>Votre e-mail n'est pas au format e-mail </div>
                    <?php break;
                    case 'email_length': ?>
                        <div class="messageErreur"><strong>Erreur :</strong>Votre e-mail est trop long</div>
                    <?php break;
                    case 'pseudo_length': ?>
                        <div class="messageErreur"><strong>Erreur :</strong>Votre pseudo est trop long</div>
                    <?php break;
                    case 'already': ?>
                        <div class="messageErreur"><strong>Erreur :</strong>Cet email et/ou ce pseudo est déjà utilisé</div>
            <?php break;
                }
            }; ?>

            <form class="createUser" action="./inscription_traitement.php" method="POST">
                <h1>Formulaire d inscription</h1>
                <div class="divCreateUser">
                    <input type="text" id="nick" name="nick" placeholder="Pseudo" required="required">
                </div>

                <div class="divCreateUser">
                    <input id="email" name="email" placeholder="e-mail" required="required">
                </div>

                <div id='messageDErreur'></div>

                <div class="divCreateUser">
                    <input type="password" id="pass" name="pass" placeholder="Mot de passe" required="required">
                </div>

                <div class="divCreateUser">
                    <input type="password" id="passwordCreateConfirm" name="passwordCreateConfirm" placeholder="Confirmation mot de passe" required="required">
                </div>

                <div class="divCreateUser">
                    <input type="text" id="nameCreate" name="nameCreate" placeholder="Nom" required="required">
                </div>

                <div class="divCreateUser">
                    <input type="text" id="firstNameCreate" name="firstNameCreate" placeholder="Prénom" required="required">
                </div>

                <div class="divCreateUser">
                    <input type="date" id="ageCreate" name="ageCreate" placeholder="Date de naissance" required="required">
                </div>

                <div>
                    <button id="inscription" type="submit">Inscription</button>
                </div>
            </form>





            <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>
        </div>
    </main>
    <footer>
        <?php include_once('./footer.php'); ?>
    </footer>
    <script type="text/javascript" src="./index.js"></script>
</body>
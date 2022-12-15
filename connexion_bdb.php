<body>
    <main>
        <?php

        if (!isset($_SESSION['loguser'])) {

            include_once('./appel_bdb.php');
            $sqlQuery = 'SELECT * FROM ';
            //$recipesStatement// = $dbZozor->prepare($sqlQuery);
            //$recipesStatement//->execute();
            $users = $recipesStatement->fetchAll();




            if (isset($_POST['']) && isset($_POST['']) && isset($_POST[''])) {
                foreach ($users as $user) {


                    if ($user[''] === $_POST[''] && $user[''] === $_POST[''] && $user[''] === ucfirst($_POST[''])) {

                        $_SESSION['loguser'] = $user[''];
                    } else {
                        $errorIdentification = sprintf(
                            '%s Vos identifiants ne sont pas valident: %s n\'est pas votre adresse mail d\'inscription et/ou votre mot de passe est erroné',
                            $_POST[''], //nom des variables input a remplacer%
                            $_POST[''],

                        );
                    }
                }
            }
        ?>
            <?php if (!isset($_SESSION['loguser'])) :  ?>
                <form action='./zozor.php' method='post'>
                    <?php if (isset($errorIdentification)) : ?>
                        <div>
                            <?php print($errorIdentification) ?>
                        </div>
                    <?php endif; ?>
                    <div id="conexion">

                        <div>
                            <label for="userInput">Votre pseudo</label>
                            <input type="text" id="userInput" name="userInput">
                        </div>
                        <div>
                            <label for="identifiant">Votre identifiant</label>
                            <input type="email" id="identifiant" name="identifiant" placeholder="Votre e-mail d'inscription">
                        </div>
                        <div>
                            <label for="passwords">Votre mot de passe</p></label>
                            <input type="passwords" id="passwords" name="passwords" placeholder="Votre mot de passe">
                        </div>

                        <div>
                            <button type='submit'>Se connecter</button>
                        </div>
                </form>
                <div>
                    <form action='./createUser.php' method='post'>
                        <button type='submit'>S'inscrire</button>
                    </form>
                </div>
                </div>
            <?php else : ?>
                <div id="messageAcceuil">
                    Bonjour <?php echo (htmlspecialchars($_SESSION['loguser'])) ?> bienvenue sur le site Zozor
                </div>

            <?php endif; ?>



        <?php } ?>



    </main>

</body>
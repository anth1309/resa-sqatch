<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>creation compte</title>
</head>
<header>

    <?php include_once('./header.php'); ?>
</header>



<!-- <a id="retourzozor" href="zozor.php">retour a zozor</a> -->

<div id="createUser">
    <h1>Formulaire d inscription</h1>
    <form action="./post_createUser.php" method="POST">
        <div class>
            <label for="userCreate" class="form-createUser">Votre pseudo</label><input type="text" id="userCreate" name="userCreate">
        </div>
        <div class>
            <label for="emailCreate" class="form-createUser">Votre e-mail</label><input type="email" id="emailCreate" name="emailCreate">
        </div>
        <div class>
            <label for="passwordCreate" class="form-createUser">Votre mot de passe</label><input type="password" id="passwordCreate" name="passwordCreate">
        </div>
        <div class>
            <label for="sexeCreate" class="form-createUser">Homme/Femme</label><input type="text" id="sexeCreate" name="sexeCreate">
        </div>
        <div class>
            <label for="ageCreate" class="form-createUser">Votre date de naissance</label><input type="date" id="ageCreate" name="ageCreate">
        </div>
        <div id=button>
            <button type="submit">Inscription</button>
        </div>
    </form>
</div>
<footer>
    <?php include_once('./footer.php'); ?>
</footer>
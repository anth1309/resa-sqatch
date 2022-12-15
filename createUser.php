<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>creation compte</title>
</head>
<header>

    <?php include_once('./header.php'); ?>
</header>
<!-- <a id="retourzozor" href="zozor.php">retour a zozor</a> -->


<?php
include_once('./appelBdb.php');
//Verification du formulaire d inscription


if (empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST[''])) {

    print "Veuillez remplir tous les champs";
    return;
}
//insertion dans la base

//creation des variables


// $userCreate = $_POST['userCreate'];
// $emailCreate = $_POST['emailCreate'];
// $passwordCreate = $_POST['passwordCreate'];
// $sexeCreate = $_POST['sexeCreate'];
// $ageCreate = $_POST['ageCreate'];


//Insertion dans la BDB
$insertUser = $dbZozor->prepare('INSERT INTO user( user, email, passwords, sexe, birth) VALUES( :user, :email, :passwords ,:sexe ,:birth )');
$insertUser->execute([
    'user' => $userCreate,
    'email' => $emailCreate,
    'passwords' => $passwordCreate,
    'sexe' => $sexeCreate,
    'birth' => $ageCreate,
]);
?>

<footer>
    <?php include_once('./footer.php'); ?>
</footer>
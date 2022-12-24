<?php session_start();


require_once('./appel_bdb.php');

if (isset($_POST['nick']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['passwordCreateConfirm']) && isset($_POST['nameCreate']) && isset($_POST['firstNameCreate']) && isset($_POST['ageCreate'])) {
    $nick = htmlspecialchars($_POST['nick']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $passwordCreateConfirm = htmlspecialchars($_POST['passwordCreateConfirm']);
    $nameCreate = htmlspecialchars($_POST['nameCreate']);
    $firstNameCreate = htmlspecialchars($_POST['firstNameCreate']);
    $dateCreate = ($_POST['ageCreate']);


    $check = $db_conection->prepare('SELECT nick,email FROM conection WHERE email=? or nick=?');
    $check->execute(array($email, $nick));
    $data = $check->fetch();
    $row = $check->rowCount();
    // var_dump($row);
    if ($row == 0) {
        if (strlen($nick) <= 32) {
            if (strlen($email) <= 64) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($pass == $passwordCreateConfirm) {
                        $pass = password_hash($pass, PASSWORD_DEFAULT);
                        $insert  = $db_conection->prepare('INSERT INTO conection( nick, email, pass, name, first_name,  birth) VALUES( :nick, :email, :pass, :name , :first_name, :birth )');
                        $insert->execute([
                            'nick' => $nick,
                            'email' => $email,
                            'pass' => $pass,
                            'name' => $nameCreate,
                            'first_name' => $firstNameCreate,
                            'birth' => $dateCreate,
                        ]);
                        header('location:inscription.php?reg_err=success');
                    } else  header('location:inscription.php?reg_err=password');
                } else  header('location:inscription.php?reg_err=email');
            } else  header('location:inscription.php?reg_err=email_length');
        } else  header('location:inscription.php?reg_err=pseudo_length');
    } else  header('location:inscription.php?reg_err=already');
}

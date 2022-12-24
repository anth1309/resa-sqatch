<?php session_start();

include_once('./appel_bdb.php');

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $nick = htmlspecialchars($_POST['nick']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $check = $db_conection->prepare('SELECT nick,email,pass FROM conection WHERE email=?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            if (password_verify($pass, $data['pass'])) {

                $_SESSION['user'] = $data['nick'];

                header('location:landing.php');
            } else header('location:reservation.php?login_err=password');
        } else header('location:reservation.php?login_err=email');
    } else header('location:reservation.php?login_err=already');
} else header('location:reservation.php');

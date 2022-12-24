<?php
try {
    $db_conection = new PDO('mysql:host=localhost;dbname=jeu_de_paume;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

<?php
try {
    $dns = "mysql:host=localhost;dbname=blog;charset=utf8";
    $user = "root";
    $pw = "";
    $cnx = new PDO($dns, $user, $pw); // $cnx est un objet PDO

} catch (Exception $e) {
    echo "Problème de connexion!!!" . $e->getMessage();
}

<?php
require_once 'composants/config.php';

$connect = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $motdepasse);


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $surname = $_POST["nom"];
    $name = $_POST['prenom'];
    $birth = $_POST['ddnaissance'];
    $email = $_POST['email'];
    $profilePic = $_POST['profil'];

    $newLign = $connect -> prepare("INSERT INTO utilisateur (nom, prenom, dateDeNaissance, email, profil) VALUES (?,?,?,?,?)");

    $newLign -> execute([$surname, $name, $birth, $email, $profilePic]);
}

?>
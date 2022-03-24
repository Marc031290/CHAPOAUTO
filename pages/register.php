<?php
include("./utils/db.php");
if (isset($_POST["register"])) {
    if (empty($_POST['email'])) {
        echo "indiquer une adresse mail";
    } elseif (empty($_POST['nom'])) {
        echo "indiquer votre nom";
    } elseif (empty($_POST['prenom'])) {
        echo "indiquer votre prenom";
    } elseif (empty($_POST['motdepasse'])) {
        echo "saisir votre mot de passe";
    } else {
        $stmt = $pdo->prepare("INSERT INTO client(email_client, nom_client, prenom_client, mot_de_passe_client, date_inscription_client) VALUES(?,UPPER(?),?, ?, NOW())");
        $email = htmlspecialchars($_POST['email']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pdwHash = htmlspecialchars($_POST['motdepasse']);
        $stmt->execute([$email, $nom, $prenom, password_hash($pdwHash, PASSWORD_DEFAULT)]);
    }
    header('location: index.php?page=home');
    die();
}
<?php
include("./utils/db.php");
$email = htmlspecialchars($_POST['email']);
$passwd = $_POST['motdepasse'];
$stmt = $pdo->prepare('select * from client where email_client=?');
$stmt->execute([$email]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $passwdHash = $result['mot_de_passe_client'];
    if (password_verify($passwd, $passwdHash)) {


        $_SESSION["etatConnexion"] = "1";
        $_SESSION["nom"] = $result['nom_client'];
        $_SESSION["prenom"] = $result['prenom_client'];
        $_SESSION["email"] = $result['email_client'];
        header('location:index.php?page=home');
        die();
    } else {
        $_SESSION['etatConnexion'] = "0";
        header('location:index.php?page=authentif');
        die();
    }
} else {
    $_SESSION['etatConnexion'] = "0";
    header('location:index.php?page=authentif');
    die();
}
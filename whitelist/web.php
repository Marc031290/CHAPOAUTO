<?php
$whitelist = array('connexion', 'authentif', 'inscription', 'register', 'reservation', 'occasions', 'location', 'tarifs et gamme', 'deconnexion');
//if(isset($_SESSION["etatConnexion"]) && $_SESSION["etatConnexion"]==1) {
//la connexion a été établie
array_push($whitelist, 'home', 'deconnexion');
//}
//déclarer des accès specifique admin
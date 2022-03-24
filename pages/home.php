<?php
include('./fonctions/vehicule.php');
include('./utils/db.php'); ?>

<main class="main-content" role="main">
    <link rel="stylesheet" href="../ProjetDynamique/public/Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@300&display=swap" rel="stylesheet">


    <h1> Bienvenu chez CHAPO AUTO </h1>

    <section id="emplacementEvenement">
        <article class="borderArticle">

            <p>
                CHAPO AUTO est un spécialiste de 50cc et 125cc à moteur 2 temps, situé à Angers. <br>
                <br> NOS SERVICE: <br>
                Nous effectuons toutes les opérations curatives et préventives sur vos scooters.<br> Entretien
                courant,
                mécanique moteur et chassis, diagnostic panne, pose d’accessoires, montage
                pneumatique. <br>
                <br> NOUS CONTACTER : <br>
                Pour toute demande d’information ou de devis, n’hésitez pas à nous contacter nous vous répondrons dans
                les plus brefs délais.
            </p>
            </div>

        </article>
        <!--Partie Slide photo-->

        <div class="slideshow">
            <ul>
                <?php $resultes = getVehicules($pdo);
                foreach ($resultes as $resulte) {
                    echo '<li><img src="' . $resulte['url_image'] . '"></li>';
                } ?>

            </ul>
        </div>
        <!--Séparation-->
        <div class="separationLigne">
            <div class="laLigne"></div>

            <span id="service">Achat - Location - Réparation / Entretien</span>

            <div class="laLigne"></div>
        </div>



</main>
<?php
function getVehicules($pdoP)
{
    $stmt = $pdoP->prepare("select id_vehicule,prix_location,url_image from vehicules");
    $stmt->execute();
    $resultes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultes;
}
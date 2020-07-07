<?php
require_once 'db.php';
function addClient($nom, $prenom, $adresse, $email, $telephone, $identite, $salaire, $profession)
{

    $sql = "INSERT INTO client VALUES(NULL, $nom, $prenom, $adresse, $email, $telephone, $identite, $salaire, $profession)";

    $conn = getConection();

    return $conn->exec($sql);
}
function listeClient()
{

    $sql = "SELECT * FROM client";

    $conn = getConection();

    return $conn->exec($sql);
}



?>
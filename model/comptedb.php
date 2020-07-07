<?php
require_once 'db.php';
function addCompte($agence, $rib, $numcompte, $montant, $salaire, $profession, $agios, $frais)
{

    $sql = "INSERT INTO compte VALUES(NULL,$agence, $rib, $numcompte, $montant,$salaire, $profession, $agios, $frais)";

    $conn = getConection();

    return $conn->exec($sql);
}
function listeCompte()
{

    $sql = "SELECT * FROM compte";

    $conn = getConection();

    return $conn->exec($sql);
}

?>
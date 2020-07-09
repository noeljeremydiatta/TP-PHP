<?php
 require_once 'db.php';
function addCompte($agence, $rib, $numcompte, $montant, $salaire, $profession, $agios, $frais)
{
    // var_dump("INSERT INTO compte VALUES(NULL,$agence, $rib, $numcompte, $montant,$salaire, '$profession',10000,4500)");
    // die;

    $sql = "INSERT INTO compte VALUES(NULL,$agence, $rib, $numcompte, $montant,$salaire, '$profession',10000,4500)";
    
    $conn = getConection();
    

    return $conn->exec($sql);
}
function listeCompte()
{

    $sql = "SELECT * FROM compte";

    $conn = getConection();

    return $conn->query($sql);
}

?>
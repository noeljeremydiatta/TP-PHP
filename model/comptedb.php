<?php
 require_once 'db.php';
function addCompte($tyco, $agence, $rib, $numcompte, $montant, $salaire, $profession, $agios, $frais)

{
    $sql = "INSERT INTO compte VALUES(NULL,'$tyco',$agence, $rib, $numcompte, $montant, $salaire,'$profession', 10000,4500)";
    

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
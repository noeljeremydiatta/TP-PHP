<?php
require_once '../model/comptedb.php'; 

extract($_POST);

$result = addCompte($tyco, $agence, $rib, $numcompte, $montant, $salaire, $profession, $agios, $frais);
header("location:http://localhost/projects/SIMPHP/TP-PHP/comptes");
?>

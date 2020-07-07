<?php
require_once '../model/comptedb.php'; 
extract($_POST);
$result = addCompte($agence, $rib, $numcompte, $montant,$salaire, $profession, $agios, $frais);

header("location:comptes");
?>
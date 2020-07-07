<?php
require_once '../model/clientdb.php'; 
extract($_POST);
$result = addClient($nom, $prenom, $adresse, $email, $telephone, $identite, $salaire, $profession);

header("location:clients");

?>
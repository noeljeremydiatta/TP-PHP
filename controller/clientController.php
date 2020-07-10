<?php
require_once '../model/clientdb.php'; 

extract($_POST);

$result = addClient($stacli, $typecli, $nom, $prenom, $adresse, $email, $telephone, $nomem, $raison, $adem);
header("location:http://localhost/projects/SIMPHP/TP-PHP/clients");

?>
<?php
require_once '../model/clientdb.php'; 
extract($_POST);
$result = addClient($nom, $prenom, $adresse, $email, $telephone, $nomem, $raison, $adem);
if($result){
    echo 'Données ajoutées avec succès';
}else{
    echo 'Echec d\'ajout';
}
?>
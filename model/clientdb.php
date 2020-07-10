<?php
require_once 'db.php';

function addClient($stacli, $typecli, $nom, $prenom, $adresse, $email, $telephone, $nomem, $raison, $adem)
{

    $sql = "INSERT INTO client VALUES(NULL,'$stacli', '$typecli','$nom','$prenom','$adresse','$email','$telephone','$nomem','$raison', '$adem')";

    $conn = getConection();
   
    return $conn->exec($sql);
  
}

function listeClient()
{

    $sql = "SELECT * FROM client";

    $conn = getConection();

    return $conn->query($sql);
}


?>
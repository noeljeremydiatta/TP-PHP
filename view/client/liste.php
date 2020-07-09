<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="formulaire d'ouverture de compte de la banque du peuple"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    <title>GESTION DE CLIENT</title>
</head>
<body>
   
       <div class="nav">
       <ul>
                <li title ="gestion de compte"><a href="comptes">Créer un compte</a></li>
                <li title ="gestion de client"><a href="clients">Ajouter un client</a></li>
            </ul>
       </div><br/>

       <div class="title">Formulaire d'ajout de client</div><br/>
       <fieldset class="form"><br/>
          <form action="clientController" method="POST">      
          <div>
                  <label for="new">Nouveau Client</label>
                  <input type="radio" name="stacli" id="newcli" value="1">
                  <label for="exist">Client Existant</label>
                  <input type="radio" name="stacli" id="cliexi"  value="2">
          </div><br>
          <div>
                  <label for="new">Client physique</label>
                  <input type="radio" name="tcli" id="cliphy" value="phy">
                  <label for="exist">Client Moral</label>
                  <input type="radio" name="tcli" id="climo"  value="mor">
          </div><br>
              
        <div class="group">
                  <label for="nomcli">Nom :</label>
                  <input type="text" name="nom" id="nomcli"/><br><br/>
                  <label for="precli">Prénom :</label>
                  <input type="text" name="prenom" id="precli"/><br><br/>
                  <label for="adcli">Adesse :</label>
                  <input type="text" name="adresse" id="adcli"/><br><br/>
                  <label for="emcli">Email :</label>
                  <input type="email" name="email" id="emcli"/><br><br/>
                  <label for="telcli">Téléphone :</label>
                  <input type="tel" name="telephone" id="telcli"/><br><br/>
        </div>
        <div class="group">
                  <label for="nomem">Nom employeur :</label>
                  <input type="text" name="nomem" id="nomem"/><br><br/>
                  <label for="rs">Raison sociale :</label>
                  <input type="text" name="raison" id="rs"/><br><br/>
                  <label for="adem">Adresse employeur :</label>
                  <input type="text" name="adem" id="adem"/><br><br/>
        </div>
        <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
        </div>
          </form><br/>
          </fieldset>
          <fieldset class="formu">
        <div class="tab">Liste des clients</div>
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Tel:</td>
        <td>Employeur</td>
        <td>Raison </td>
        <td>Adresse employeur</td>
        </tr>
        <?php
        require_once '../../model/clientdb.php';
        $clients = listeClient()->fetchAll();
        foreach($clients as $client); 
        echo" <tr>
        <td>$client[0]</td>
        <td>$client[1]</td>
        <td>$client[2]</td>
        <td>$client[3]</td>
        <td>$client[4]</td>
        <td>$client[5]</td>
        <td>$client[6]</td>
        <td>$client[7]</td>
        <td>$client[8]</td>
        </tr>";    
        ?>
        </table> 
        </fieldset> 
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>
<script type="text/javascript" src="client.js"></script>    
</body>
</html>
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
          <div id ="first">
                  <label for="newcli">Nouveau Client</label>
                  <input type="radio" name="stacli" id="newcli" value="nouveau">
                  <label for="cliexi">Client Existant</label>
                  <input type="radio" name="stacli" id="cliexi"  value="existant">
          </div><br>
          <div id="second">
                  <label for="cliphy">Client physique</label>
                  <input type="radio" name="typecli" id="cliphy" value="physique">
                  <label for="climo">Client Moral</label>
                  <input type="radio" name="typecli" id="climo"  value="moral">
          </div><br>
              
        <div class="group">
                  <label for="nom">Nom :</label>
                  <input type="text" name="nom" id="nom"/><br><br/>
                  <label for="prenom">Prénom :</label>
                  <input type="text" name="prenom" id="prenom"/><br><br/>
                  <label for="adresse">Adesse :</label>
                  <input type="text" name="adresse" id="adresse"/><br><br/>
                  <label for="email">Email :</label>
                  <input type="email" name="email" id="email"/><br><br/>
                  <label for="telephone">Téléphone :</label>
                  <input type="tel" name="telephone" id="telephone"/><br><br/>
        </div>
        <div class="group">
                  <label for="nomem">Nom employeur :</label>
                  <input type="text" name="nomem" id="nomem"/><br><br/>
                  <label for="raison">Raison sociale :</label>
                  <input type="text" name="raison" id="raison"/><br><br/>
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
        <td>Statut</td>
        <td>Type</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Tel:</td>
        <td>Employeur</td>
        <td>Raison</td>
        <td>Adresse employeur</td>
        </tr>
        <?php
        require_once '../../model/clientdb.php';
        $clients = listeClient()->fetchAll();
        foreach($clients as $client){
          
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
        <td>$client[9]</td>
        <td>$client[10]</td>
        </tr>";  
        }  
        ?>
        </table> 
        </fieldset> 
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>
<script type="text/javascript" src="public/js/client.js"></script>    
</body>
</html>
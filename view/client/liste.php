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
                <li title ="gestion de compte"><a href="comptes">Gestion des comptes</a></li>
                <li title ="gestion de client"><a href="clients">Gestion des clients</a></li>
            </ul>
       </div><br/>

       <div class="title">Formulaire d'ajout de client</div><br/>
       <fieldset class="field">
          <form action="clientController" method="POST">
          <div id="stacli">
                  <label for="new">Nouveau Client</label>
                  <input type="radio" name="stacli" id="newcli" value="1">
                  <label for="exist">Client Existant</label>
                  <input type="radio" name="stacli" id="cliexi"  value="2">
          </div><br>
          <div id="tcli">
                  <label for="new">Client physique</label>
                  <input type="radio" name="tcli" id="cliphy" value="phy">
                  <label for="exist">Client Moral</label>
                  <input type="radio" name="tcli" id="climo"  value="mor">
          </div><br>
              
        <div class="client">
                  <label for="nomcli">Nom :</label>
                  <input type="text" name="nomcli" id="nomcli"/>
                  <label for="precli">Prénom :</label>
                  <input type="text" name="precli" id="precli"/><br><br/>
                  <label for="adcli">Adesse :</label>
                  <input type="text" name="adcli" id="adcli"/>
                  <label for="emcli">Email :</label>
                  <input type="email" name="emcli" id="emcli"/><br><br/>
                  <label for="telcli">Téléphone :</label>
                  <input type="tel" name="telcli" id="telcli"/>
                  <label for="idcli">Id client :</label>
                  <input type="text" name="idcli" id="idcli"/>
        </div><br><br/>
        <div class="emplo">
                  <label for="nomem">Nom employeur :</label>
                  <input type="text" name="nomem" id="nomem"/>
                  <label for="rs">Raison sociale :</label>
                  <input type="text" name="rs" id="rs"/><br><br/>
                  <label for="adem">Adresse employeur :</label>
                  <input type="text" name="adem" id="adem"/>
                  <label for="idem">Id employeur :</label>
                  <input type="text" name="idem" id="idem"/>
        </div><br><br/>
        <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
        </div>
          </form><br/>
          </fieldset>
          <fieldset class="resultat">
        <div>Liste des clients</div>_
        <table>
        <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Telephone</td>
        </tr>
        </table>
        </fieldset> 
        
        <?php
        require_once '../../model/clientdb.php';
        $clients = listeClient();
        foreach($clients as $keys=> $value); 
        echo" <tr>
        <td>$value[0]</td>
        <td>$value[1]</td>
        <td>$value[2]</td>
        <td>$value[3]</td>
        <td>$value[4]</td>
        <td>$value[5]</td>
        </tr>";     
        
        ?>
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>
<script type="text/javascript" src="client.js"></script>    
</body>
</html>
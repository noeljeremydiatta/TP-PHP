<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="formulaire d'ouverture de compte de la banque du peuple"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <title>GESTION DE CLIENT</title>
</head>
<body>
   
       <div class="nav">
       <ul>
                <li title ="gerer un compte"><a href="comptes">Gestion des comptes</a></li>
                <li title ="gerer un client"><a href="clients">Gestion des clients</a></li>
        </ul>
       </div>
       <div class="title">Formulaire d'ajout de compte</div><br/>
       <fieldset class="form"><br/>
          <form action="compteController" method="POST">
              <div>
                  <label for="epargne">Compte Epargne</label>
                  <input type="radio" name="tyco" id="epargne"  value="co1">
                  <label for="courant">Compte Courant</label>
                  <input type="radio" name="tyco" id="courant"  value="co2">
                  <label for="bloque">Compte Bloqué</label>
                  <input type="radio" name="tyco" id="bloque"  value="co3">
              </div><br/>
              <div class="group">
                  <label for="numag">Num agence :</label>
                  <input type="number" name="numag" id="numag"/>
               </div><br/>
               <div class="group">
                  <label for="rib">RIB :</label>
                  <input type="number" name="rib" id="rib"/>
                </div><br/>
                <div class="group">
                  <label for="numco">Num compte :</label>
                  <input type="number" name="numco" id="numco"/>
                </div><br/>
                <div class="group">
                  <label for="montant">Montant :</label>
                  <input type="number" name="montant" id="montant"/>
                </div><br/>
                <div class="group">
                  <label for="sal">Salaire :</label>
                  <input type="number" name="sal" id="sal"/>
                </div><br/>
                <div class="group">
                  <label for="prof">Profession :</label>
                  <input type="text" name="prof" id="prof"/>
                </div><br/>
                <div>
                  <label for="frais">Frais d'ouveture </label>
                  <input type="checkbox" name="frais" id="frais"/>
                </div><br/>
                <div>
                  <label for="agios">Agios trimestriel </label>
                  <input type="checkbox" name="agios" id="agios"/>
                </div><br/>
                
                <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
                </div>

          </form><br/>
        </fieldset> <br><br/>
        <div>Liste des comptes</div>_
        <fieldset>
        <table>
        <tr>
        <td>ID</td>
        <td>Type de Compte</td>
        <td>Num Agence</td>
        <td>RIB</td>
        <td>Num compte</td>
        <td>Dépôt inintial</td>
        <td>Salaire</td>
        <td>Profession</td>
        
        </tr>
        </table>
        </fieldset> 
        
        <?php
        require_once '../../model/comptedb.php';
        $clients = listeCompte()-> fetchAll();
        foreach($comptes as $keys=> $value); 
        echo" <tr>
        <td>$value[0]</td>
        <td>$value[1]</td>
        <td>$value[2]</td>
        <td>$value[3]</td>
        <td>$value[4]</td>
        <td>$value[5]</td>
        <td>$value[6]</td>
        <td>$value[7]</td>
        </tr>";     
        
        ?>      
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>
<script type="text/javascript" src="indexclient.js"></script>    
</body>
</html>
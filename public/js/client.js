/*var statut = document.getElementsByName("stacli");
var typecli = document.getElementsByName("tcli");
statut.addEventListener('change', function(e) {
    if (statut.value == '1') {
        typecli.style.display ='block';
      
        profession.style.display = 'none';
        cacher0.style.display = 'none';
    }
    
    else if (typecli.value == 'cli2') {
            afficher1.style.display = 'block';
            salaire.style.display = 'inline-block';
            profession.style.display = 'inline-block';
            cacher0.style.display = 'block';  
    } 
    else {
            afficher1.style.display = 'none';
            cacher0.style.display = 'block';
         }
             
        });

        var typeco = document.getElementById("tco");
        var afficher2 = document.getElementById("open1");
        var cacher1 = document.getElementById("agios");
        var ta = document.getElementById("agio")
        var cacher2 = document.getElementById("frais");
        var tf = document.getElementById("frai")
        typeco.addEventListener('change', function(e) {
        
            if (typeco.value == "1" || typeco.value == "3") {
                afficher2.style.display = 'block';
                cacher2.style.display = 'inline-block';
                tf.style.display = 'inline';
                cacher1.style.display = 'none';
                ta.style.display = 'none';
                
            } else {
                    afficher2.style.display = 'block';
                    cacher1.style.display = 'inline-block';
                    ta.style.display = 'inline';
                    cacher2.style.display = 'none';
                    tf.style.display = 'none';
                    
               
            
            }
        });

        /*var typecli = document.getElementById("tcli").value;
        var nom = document.getElementById("nomcli").value;
        var prenom = document.getElementById("precli").value;
        var adresse = document.getElementById("adcli").value;
        var email = document.getElementById("emcli").value;
        var telephone = document.getElementById("telcli").value;
        var identité = document.getElementById("iden").value;
        var salaire = document.getElementById("sal").value;
        var profession = document.getElementById("prof").value;
        var myform = document.getElementById("ouverture");
        myform.addEventListener('submit',function(e){
            if(typecli){
                e.preventDefault();
                alert('veuiller remplir les champs');
            }else{

            }
        });*/
    
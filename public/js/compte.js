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
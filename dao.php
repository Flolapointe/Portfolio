<html>
    <head>
         <meta charset="utf-8"> <!--ligne accents fr -->
         <link rel="stylesheet" type="text/css" href="dao.css">
         <link rel="stylesheet" type="text/css" href="index.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body style="background-color:rgba(0, 0, 0, 0.20)">
    <div id="top"> </div>
        <?php
            include 'navbar.php';
        ?>
        <div class="card" style="background-color: white;margin-top:15px;margin-bottom:15px">
            <div class="card-body" style="text-align:center">
                <h3>Conception Assistée par Ordinateur</h3>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                <div class="col-sm-5">
                    <div class="card bg-dark text-black">
                        <img src="Images/litmaint.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <a href="#projet1" style="color:black">
                                    <h5 class="card-title" >Lit extansible (projet personnel)</h5>
                                </a>
                                
                            </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card bg-dark text-black">
                        <img src="Images/sdbmaint.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <a href="#projet2" style="color:black">
                                    <h5 class="card-title" >Salle d'eau (projet personnel)</h5>
                                </a>
                               
                            </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class=col-2>
                </div>
                <div class="col-sm-5">
                    <div class="card bg-dark text-black">
                        <img src="Images/diapobatot.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="#projet3" style="color:black">
                                <h5 class="card-title" >Véhicule amphibien (projet d'IUT)</h5>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card bg-dark text-black">
                        <img src="Images/dat.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="programmation.php" style="color:black">
                                <h5 class="card-title" > </h5>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            </br>
            </br>
            <p id="projet1">
                <h3>Lit extansible</h3>
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <img src="Images/litmin.jpg.png" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <img src="Images/litmid.jpg.png" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                
            </div>
            </br>
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                        
                            <p class="card-text">Voici un de mes projets personnel. Il s'agit d'un lit extansible en largeur pouvant mesurer 100, 120, 140, 160 ou 180cm en fonction des calles utilisées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <img src="Images/litmax.jpg.png" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            </br>
            </br>
            <p id="projet2">
                <h3>Salle d'eau</h3>
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="Images/sdb.jpg.png" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="Images/sdb2.jpg.png" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Dans le but de projeter des travaux personnels, j'ai modélisé la salle d'eau suivant les critères de chaques personnes et j'en suis arrivé à ce résultat à partir de Sketchup.</p>
                        </div>
                    </div>
                </div>
            </br>
            </br>
            <p id="projet3">
                <h3>Véhicule amphibien</h3>
            </p>
            </br>
            <div class="row">
                <div class="col mb-4">
                    <div class="card">
                        <img src="Images/planbato1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Etudes de la fonctionnalité et du design de la coque du véhicule.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="Images/usinagebato.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Usinage du moule du véhicule grâce à la partie CFAO de Creo parametric.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <div class="card">
                    <img src="Images/batofab.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Fabrication de la coque en appliquant de la fibre de verre avec un mélange de résine epoxy et de colle spéciale.</p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="Images/batofini.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Résultat final de la coque.</p>
                    </div>
                    </div>
                </div>
            </div>
            </br>
            </br>
            </br>
          
            </br>
            </br>
        </div>
        </br>
        <div id="scrollUp">
            <a href="#top"><img src="Images/to_top.png"/></a>
        </div>
    </body>
    <?php
        include 'footer.php';
    ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script>
function juizScrollTo(element){			
	$(element).click(function(){
		var goscroll = false;
		var the_hash = $(this).attr("href");
		var regex = new RegExp("\#(.*)","gi");
		var the_element = '';
 
		if(the_hash.match("\#(.+)")) {
			the_hash = the_hash.replace(regex,"$1");
 
			if($("#"+the_hash).length>0) {
				the_element = "#" + the_hash;
				goscroll = true;
			}
			else if($("a[name=" + the_hash + "]").length>0) {
				the_element = "a[name=" + the_hash + "]";
				goscroll = true;
			}
 
			if(goscroll) {
				$('html, body').animate({
					scrollTop:$(the_element).offset().top
				}, 'slow');
				return false;
			}
		}
	});					
};
juizScrollTo('a[href^="#"]');

 
jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
                $('#scrollUp').css('right','10px'); // Replace à 10pixels de la droite l'image
            } else { 
                $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});
 
</script>


</html>
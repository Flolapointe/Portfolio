<html>
    <head>
         <meta charset="utf-8"> <!--ligne accents fr -->
         <link rel="stylesheet" type="text/css" href="index.css">
         <link rel="stylesheet" type="text/css" href="parcour.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body style="background-color:rgba(0, 0, 0, 0.20)">
        <?php
            include 'navbar.php';
        ?>
        </br>
        <div class="accordion container" id="accordionExample" style="margin-top:5%">
            <div class="card">
                <div class="card-header" style="background-color: rgba(0,0,0,.1);" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color:black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Aujourd'hui
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Recherche d'un emploi dans un Bureau d'études, Bureau des méthodes ou en R&D</li>
                            </br>
                            <li>Vendeur en boulengerie PAUL</li>
                        </ul>
                    </div>
                </div>
                </br>
            </div>
            <div class="card">
                <div class="card-header" style="background-color: rgba(0,0,0,.1);" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed"  style="color:black" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Année 2019
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>L1 en Physique et Science de l'Ingénieur à la faculté de Strasbourg</li>
                            </br>
                            <li>Vendeur en boulengerie PAUL (emploi étudiant)</li>
                        </ul>
                    </div>
                </div>
                </br>
            </div>
            <div class="card">
                <div class="card-header" style="background-color: rgba(0,0,0,.10);" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed"  style="color:black" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Années 2015 - 2018
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4> DUT en Génie Mécanique et Productique obtenu à l'IUT de Dijon-Auxerre </h4>
                        <ul>
                            <li class="liste1">Projets et connaissances acquises :</li> <!-- différence de mise en forme pour connaissance et projets -->
                                <ul>
                                    <li>Projet : Planche de skateboard motorisée</li>
                                    <li>Projet : Véhicule amhibien</li>
                                    <li>Utilisation du logiciel CREO parametric & simulate</li>
                                    <li>Travail en équipe</li>
                                    <li>Usinage</li>
                                        <ul>
                                            <li>Soudure</li>
                                            <li>CFAO</li>
                                            <li>Machinerie traditionnelle (tour et fraiseuses)</li>
                                        </ul>
                                </ul>
                            </br>
                            <li class="liste1">Stages effectués :</li>
                                <ul>
                                    <li class="liste2">Bureau des méthodes chez LENNOX EMEA</li>
                                    <div style="font-style: italic">Aide à la maintenance et à la mise en place d'une machine.</div>
                                    <li class="liste2">Bureau Projet-Qualité chez Sundyne Internationnal S.A. (Longvic)</li>
                                    <div style="font-style: italic">Aide à la compilation de la documentation client, certification et traçabilité matière au sein de l'atelier.</div>
                                </ul>
                        
                    </div>
                </div>
            </div>
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
</script>
</html>
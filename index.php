<html>
    <head>
         <meta charset="utf-8"> <!--ligne accents fr -->
         <link rel="stylesheet" type="text/css" href="index.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body style="background-color:rgba(0, 0, 0, 0.20)">
        <?php
            include 'navbar.php';
        ?>
        </br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card bg-dark text-black">
                    <img src="Images/simple-timeline-template-SmartArt-graphics.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="parcour.php" style="color: black">
                                <h5 class="card-title" >Mon parcour</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card bg-dark text-white">
                    <img src="Images/programain.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="programmation.php" style="color: white">
                                <h5 class="card-title" style="text-align:center;margin-top: 5%">Programmation</h5>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-dark text-white">
                        <img src="Images/plandessin.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="dao.php" style="color: black">
                                <h5 class="card-title" style="text-align:center;margin-top: 5%">C.A.O.</h5>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        </br>
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
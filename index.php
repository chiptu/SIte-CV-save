<?php 
//	if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off")
//{
//  header("location: https://www.leguilloualexandre.fr/");
//}
//session_start()?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	
	
	<!--
		HESITEZ PAS A TESTER LA PAGE 404 EN AJOUTANT UNE FIN D URL QUI N EXISTE PAS 
		-->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155320952-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-155320952-1');
		</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script>
				$(document).ready(function() {
				$('.js-scrollTo').on('click', function() { // Au clic sur un élément
				var page = $(this).attr('href'); // Page cible
				var speed = 750; // Durée de l'animation (en ms)
				$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
				return false;
			});
		});
	</script>
		
		
		<meta charset="utf-8" />
		<title>Site CV Le Guillou Alexandre </title>


		<meta name="description" content="Site CV de Le Guillou Alexandre, étudiant en LP DAWIN, passioné par le développement web. ">
		
		<meta name="author" content="Le Guillou Alexandre">
   		
   		<meta name="keywords" content="Alexandre, Le Guillou, étudiant, cv, site, web, programmation, informatique, développeur web, développement, LP DAWIN, BTS SIO, Gustave Eiffel ">


   		<meta property="og:title" content="Site CV de Le Guillou Alexandre" />
		
		<meta property="og:type" content="Site CV" />
		
		<meta property="og:url" content="https://www.leguilloualexandre.fr" />


		<meta property="og:image" content="https://www.leguilloualexandre.fr/images/back3.jpeg"/>
		

		<meta property=”og:description” content=  "Site CV de Le Guillou Alexandre, étudiant en licence pro DAWIN à l'iut de bordeaux, passioné par le développement web." />





		<script src="style/jquery-3.4.1.js"></script>
		

		<link href="style/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
		
		<link href="style/layout.css" rel="stylesheet">
		
		
		<script src="style/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>

		

		<link rel="shortcut icon" type="image/png" href="images/linux.ico"/>
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		 
	</head>

	

	
		
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top w-100">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    	
       		 <div class="navbar-nav mx-auto">
       		 	
       		 	<a class="js-scrollTo" href="#home"> Accueil </a>
            	<a class="js-scrollTo" href="#QuiSuisJe"> Qui suis-je </a>
				<a class="js-scrollTo" href="#Parcours"> Mon parcours </a>
				<a class="js-scrollTo" href="#Projets"> Mes projets </a>
				
			</div>
	
		</div>	
        
	</nav>

		

		
		
		
		
		<?php
			require_once 'Controleur/controleurPrincipal.php';
		?>
	
	
	

</html>

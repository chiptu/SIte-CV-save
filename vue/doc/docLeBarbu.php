

<!DOCTYPE html>
<html lang="fr">

<head>

	<script src="../../style/jquery-3.4.1.js"></script>


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


	<link href="../../style/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> 

	<link href="../../style/layout.css" rel="stylesheet">


	<script src="../../style/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

	<title>Site CV Le Guillou Alexandre BTS SIO 2nde année </title>



</head>









	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navbarDocSiteCV">
    	
       		 <div class="navbar-nav mx-auto">

				<a class="js-scrollTo" href="#Intro">Introduction</a><br>
       		 	<a class="js-scrollTo" href="#1">Interface</a><br>
       		 	<a class="js-scrollTo" href="#2">BDD Sqlite3</a><br>
       		 	<a class="js-scrollTo" href="#3">Java</a><br>
				<a class="js-scrollTo" href="#4">Déploiement</a><br>
				<a class="js-scrollTo" href="#Conclusion">Conclusion</a><br>
       		 	
       		 	<a class= "ml-5" href="https://leguilloualexandre.fr#Projets">  Revenir aux projets </a>
            	
				
				
        	</div>
    	</div>
	</nav>
	

<div class ="row">
	<div class = "col-12">
	
		<div class = "container h-100 bg-white" id="doc">
		
			<br>
	
				<h1>Le Barbu</h1><br><br><br>
			
			<h2 class="pt-5" id ="Intro">Introduction</h2><br>

			<p>
			Ce que j ai appris, le but du projet, technos stack utilisé<br><br>
			</p>

			<h2 class="pt-5" id ="1">Interface</h2><br>

			<p>
			XML , boite a outils drag and drop, Contrainte, logique par activité<br><br>
			</p>

			<h2 class="pt-5" id ="2">BDD Sqlite3</h2><br>
			<p>
			Expliquer code AccesBDD et MySqlLite, comment acceder a la bdd et la tester grace au plugin opera.<br><br>
			</p>

			<h2 class="pt-5" id ="3">Programmation Java</h2><br>

			<p>
			Par odre d'activité voir à la section interface
			</p>
			
			<h2 class="pt-5" id ="4">Déploiement</h2><br><br>
			<p>
			Google play console, admob, build apk
			</p>

			<h2 class="pt-5" id ="Conclusion">Conclusion</h2><br><br>
	
		</div>
	</div>
</div>
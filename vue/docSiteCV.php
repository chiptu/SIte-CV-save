

<!DOCTYPE html>
<html lang="fr">
	

		<script src="../style/jquery-3.4.1.js"></script>


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
		

		<link href="../style/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
		
		<link href="../style/layout.css" rel="stylesheet">
		
		
		<script src="../style/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>





	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navDocSiteCV" aria-controls="navDocSiteCV" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navDocSiteCV">
    	
       		 <div class="navbar-nav mx-auto">
       		 	
       		 	<a href="#Intro">Introduction</a><br>
       		 	<a href="#1">BootStrap/Jquery</a><br>
       		 	<a href="#2">SEO</a><br>
       		 	<a href="#3">Hébergement</a><br>
       		 	<a href="http://127.0.0.1/Site_CV2/#Projets"> Revenir aux projets </a>
       		 	
       		 	
				
        	</div>
    	</div>
	</nav>
	
	

	
<div class = "row">

	
	
	
	<div class ="col-md-12">


		<div class = "container bg-white" id="doc">
		
			<br>

	
			<h1>Site Portfolio</h1><br><br><br>
	
			<h2 id ="Intro">Introduction</h2><br>
				<p>Ce que j'ai appris en faisant mon site CV n'est pas lié réellement aux langages de programmations à proprement dis mais ce qui l'entoure (mise en forme , indexation google, hébergement).</p>
				<p>J'ai codé ce site en utilisant pour seul librairie/framework bootstrap qui permet d'avoir des éléments responsiv (les éléments s'adaptent au format pc/tablette/mobile).
				 BootStrap inclut Jquery qui est une librairie de JavaScript permettant de rendre des éléments html dynamiques (boutons , collapses...).</p>
				 <p>Comme vous pouvez le voir ci-dessous l'arborescence du site est au format MVC (Modèle Vue Contrôleur) et le html est renvoyé par du php
				 alors que je n'utilise pas de modèle/contrôleur. En réalité c'est au cas où pour l'évolutivité du site et aussi je dois l'avouer que dans ma formation c'était devenu une habitude de commencer les projets comme cela.</p>
			
				<img class="picture h-5 m-4"
    			 src="../images/doc/ImgSiteCV/arbo.png"
     			 alt="Arborescence code SiteCV"><br>
			
			
			<h2 id ="1">BootStrap/Jquery</h2><br>
				<p> Bootstrap est un framework/librairie de html/css et inclut même certains éléments de jquery (librairie en js pour dynamiser le html)
				 comme des boutons pop up / collapses ....
				 Bootstrap est initialement un outil interne à twitter qui est passé en open source en 2011 
				 et qui est devenue le projet le plus populaire de Github en 2012.</p><br>
			
				<h4 id ="1-1">Base de bootstrap</h4><br>
				<h4 id ="1-1">Exemples d'éléments</h4><br>
			
			<h2 id ="2">SEO</h2><br>
				<p>	SEO est l'acronyme de Search Engine Optimization ce qui correspond à l'optimisation pour les moteurs de recherche.
				Cette optimisation est un ensemble de critère sur lesquel (Google, DuckDuckGo, Qwant, Yahoo...) vont indexer les sites en fonction
				de la recherche de l'utilisateur. </p><br>

				<h4 id ="1-1">Les critères</h4><br>

				<div class ="ph4"> Il existe de nombreux sites qui listent les critères d'optimisations pour les moteurs de recherche j'en ai comparé 
				plusieurs et woorank me semble le plus claire, vous pouvez retrouvez l'analyse de mon site sur woorank en cliquant
				<a id ="lien"class="text-primary d-inline ml-0" href="https://www.woorank.com/fr/www/leguilloualexandre.fr">ici</a>.</div>
				

				<h4 id ="1-1">Exemple de mon site</h4><br>
			
			<h2 id ="3">Hébergement</h2><br>
				<h4 id ="1-1">Configuration serveur</h4><br>
	
	      
	       
		</div>
	
	</div>
	
</div>
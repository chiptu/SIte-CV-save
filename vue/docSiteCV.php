

<!DOCTYPE html>
<html lang="fr " >
	<head>

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

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body>

	

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navDocSiteCV" aria-controls="navDocSiteCV" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navDocSiteCV">
    	
       		 <div class="navbar-nav mx-auto">
       		 	
       		 	<a class="js-scrollTo" href="#Intro">Introduction</a><br>
       		 	<a class="js-scrollTo" href="#1">BootStrap/Jquery</a><br>
       		 	<a class="js-scrollTo" href="#2">SEO</a><br>
       		 	<a class="js-scrollTo" href="#3">Hébergement</a><br>
       		 	<a href="https://leguilloualexandre.fr#Projets">  Revenir aux projets </a>
       		 	
       		 	
		
	</nav>
	
		</div>

	</div>
	

	
<div class = "row">

	
	
	
	<div class ="col-12">


		<div class = "container bg-white h-100" id="doc">
		
			<br>

	
			<h1>Site Portfolio</h1><br><br><br>
	
			<h2 class="pt-5" id ="Intro">Introduction</h2><br>
				<p>Ce que j'ai appris en faisant mon site CV n'est pas lié réellement aux langages de programmations à
				 proprement dis mais ce qui l'entoure (mise en forme , indexation google, hébergement).</p>
				<p>J'ai codé ce site en utilisant pour seul librairie/framework bootstrap qui permet d'avoir des éléments 
				responsiv (les éléments s'adaptent au format pc/tablette/mobile).
				 BootStrap inclut Jquery qui est une librairie de JavaScript permettant de rendre des éléments html dynamiques (boutons , collapses...).</p>
				<p>Comme vous pouvez le voir ci-dessous l'arborescence du site est au format MVC (Modèle Vue Contrôleur) et
				 le html est renvoyé par du php
				alors que je n'utilise pas de modèle/contrôleur. En réalité c'est au cas où pour l'évolutivité du site et
			    aussi je dois l'avouer que dans ma formation c'était devenu une habitude de commencer les projets comme cela.</p>
			
				<img class="picture h-3 m-4 w-25 rounded"
    			 src="../images/doc/ImgSiteCV/arbo.png"
     			 alt="Arborescence code SiteCV"><br>
			
			
				<h2 class="pt-5" id ="1">BootStrap/Jquery</h2><br>
				<p> Bootstrap est un framework/librairie de html/css et inclut même certains éléments de jquery (librairie en js pour dynamiser le html)
				 comme des boutons pop up / collapses ....
				 Bootstrap est initialement un outil interne à twitter qui est passé en open source en 2011 
				 et qui est devenue le projet le plus populaire de Github en 2012.</p><br>
			
				<h4 id ="1-1">Base de bootstrap</h4><br>
				
				<div class ="ph4">Tout d'abord bootstrap possède une logique de travail par grille où l'on va définir dans les div du html des lignes (row) et des colonnes (col), une ligne peut contenir au maximum
				12 colonnes, on peut faire des colonnes spécifiques à certain formats d'écrans.</div>
				
				<img class="picture h-5 m-4 w-75 p-5 rounded"
    			 src="../images/doc/ImgSiteCV/bootstrap12.png"
     			 alt="Exemple row col bootstrap">

				  <div class ="ph4">Cette 'grille' de bootstrap est basé sur les éléments css flexbox qui peuvent être vue comme des
				  conteneurs responsiv ( qui s'adaptent à l'écran), ces conteneurs permettent de faire le squelette de la mise en forme.
				  Voici un exemple de grilles flexbox et sa traduction en bootstrap. </div>

				  <img class="picture h-5 m-4 w-50 rounded"
    			 src="../images/doc/ImgSiteCV/flexbox.png"
     			 alt="Socials icons version pc"><br>

				  <img class="picture h-5 m-4 w-50 rounded"
    			 src="../images/doc/ImgSiteCV/ExFlex2.png"
     			 alt="Socials icons version pc"><br>

				  <img class="picture h-5 m-4 w-50 rounded"
    			 src="../images/doc/ImgSiteCV/exFlex.png"
     			 alt="Socials icons version pc"><br><br>

					
				  <div class ="ph4">Comme on peut le voir ci-dessus j'ai essayé de recréer cette disposition de flexbox , on a donc une ligne et une colonne 12 
				  (12 est le maximum de la largeur de la grille, donc équivaut à une largeur de 100%).<br><br> Dans ce rectangle on va recréer une ligne et la diviser
				  en 2 (noir /vert) puis du côté vert à droite on crée 3 lignes , la ligne centrale sera divisé en 2 colonnes (bleu/rouge)
				  <br><br> Ici je n'ai pas mis de css et malheureusement bootstrap ne permet pas de découper la hauteur en élement de 33% de la hauteur du parent 
				  (bootstrap accepte 25/50/75/100%).
				  C'est pourquoi bootstrap ne remplace absolument pas le css.</div><br><br>
				  

				
				 <div class ="ph4">De manière assez basique les colonnes et les éléments d'une ligne vont s'aligner verticalement si l'écran de l'utilisateur n'est pas assez large.
				 Par exemple voici la fin de mon site en version pc et en version mobile.</div><br>
				 
				 
				  <img class="picture h-5 m-4 w-25 rounded"
    			 src="../images/doc/ImgSiteCV/bootstrap2.png"
     			 alt="Socials icons version pc">
				->
				<img class="picture h-5 m-4 w-25 rounded"
    			 src="../images/doc/ImgSiteCV/bootstrap.png"
     			 alt="Socials icons version mobile">
     			 
     			 
     			 <div class ="ph4">Bootstrap va aussi permettre de mettre dans les div du html de la mise en forme qui normalement aurait été dans le css
     			 comme le margin , padding , couleurs, taille de l'élément et aussi son emplacement dans la grille ...<br></div>
     			 
     			  <img class="picture h-5 m-4 w-75 rounded pr-5 pl-5"
    			 src="../images/doc/ImgSiteCV/bootstrapButton.png"
     			 alt="Exemple row et buttons bootstrap">
     			 
     			 <img class="picture h-5 m-4 w-75 rounded"
    			 src="../images/doc/ImgSiteCV/ButtonBootstrap.png"
     			 alt="Rendu de l exemple ci dessus bootstrap">
     			 
     			 <br>
     			 
     			<div class ="ph4"> <i class ="w-50">Cette exemple est tiré d'un des projets de mon stage de 2 eme année on peut y voir la définition d'une ligne et la spécification de la répartition des éléments au sein de la ligne
     			 ainsi que la définition des 2 boutons ainsi que leurs marges et couleurs</i></div><br><br>
     			 
     			
     			 
     			 <div class = "ph4"> Cependant Bootstrap n'a pas vocation à remplacer tout le css contrairement à certaines librairies qui proposent cela (comme TailWind).</div><br>
				 
				 
				
				<h4 id ="1-1">Exemples d'éléments</h4><br>


				<div class = "ph4">Les exemple que je vais montrer ici sont issues d'un projet d'entreprise de mon stage de 2eme année de BTS SIO.
				Sans bootstrap ils nécessitent du javascript,html,css. Pour commencer voici un bouton supprimer qui pour éviter les suppressions accidentelles
				déclenche un popup (modal) avec deux boutons supplémentaires.</div>
				
				<div class = "ph4">
				<img class="picture  w-100 rounded mt-3 mb-5"
    			 src="../images/doc/ImgSiteCV/popup.png"
     			 alt="Popup issue de bootstrap">

				

				  <img class="picture  w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/popup2.png"
     			 alt="Popup issue de bootstrap">
				

				<img class="picture  w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/CodePopUp.png"
     			 alt="Popup issue de bootstrap">
				<br><br>
				  En élément qui dénote j'ai fait aussi des éléments "accordéons" avec bootstrap que voici. Le code contient aussi du php 
				  , l affichage est généré dynamiquement.
				  </div><br><br>

				  <div class = "ph4">

				  <img class="picture  w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/accordeons.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/accordeons2.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture h-75 w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/codeAccordeon.png"
     			 alt="Popup issue de bootstrap">

				  <br><br>
				Le dernier exemple est celui de la navbar sur mon site qui se transforme en bouton dropdown , en plus
				de ne pas rajouter du javascript, css , l'élément est responsiv et se déclenche uniquement sur un écran de largeur de smartphone 
				  </div><br><br>

				  <div class = "ph4">

				  <img class="picture w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/navPc.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/nav.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/navCollapse.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../images/doc/ImgSiteCV/codeNav.png"
     			 alt="Popup issue de bootstrap">
				  </div>

				 <br><br> <div class ="ph4"><u class="font-weight-bold">En résumé:</u> BootStrap en s'appuyant sur les flexbox nous permet de mettre un squelette à notre mise en forme
				  qui s'adaptera aux largeurs d'écrans. Aussi BootStrap permet de générer facilement des éléments qui nécessiteraient plus de codes
				  PopUp , Accordéons , Dropdowns et aussi des éléments en tout genre boutons , barre de navigation , barres de progrès...
				  Ces éléments peuvent se transformer selon la taille de l'écran (exemple ma barre de navigation).</div><br>

			
			<h2 id ="2" class="pt-5">SEO</h2><br>
				<p>	SEO est l'acronyme de Search Engine Optimization ce qui correspond à l'optimisation pour les moteurs de recherche.
				Cette optimisation est un ensemble de critère sur lesquels (Google, DuckDuckGo, Qwant, Yahoo...) vont indexer les sites en fonction
				de la recherche de l'utilisateur. </p><br>

				<h4 id ="1-1">Les critères</h4><br>

				<div class ="ph4"> Il existe de nombreux sites qui listent les critères d'optimisations pour les moteurs de recherche j'en ai comparé 
				plusieurs et woorank me semble le plus claire, vous pouvez retrouvez l'analyse de mon site sur woorank en cliquant
				<a id ="lien"class="text-primary d-inline ml-0" href="https://www.woorank.com/fr/www/leguilloualexandre.fr">ici</a>.<br><br>
				J'ai regroupé ces critères en 4 parties que voici :<br><br></div>

				<div class ="ph4">- Les balises meta qui servent à renseigner des données connexes
				 au site ou des données de mise en forme pour partager site pour les réseaux sociaux.   
				 Dans les données connexes on va retrouver la description , l'auteur , les mots clés du site.</div><br>

				 <img class="picture text-center rounded w-75 ml-5"
    			 src="../images/doc/ImgSiteCV/meta.png"
     			 alt="Exemple de code de meta données">
     			 
     			 <br>
				
				<div class ="ph4">
				<br><br>-UX (mise en cache)/Mobile/Sécurité 
				<br><br>-Importance [Trafic/Liens(dont Réseaux sociaux et outil analyse)] 
				<br><br>-Norme d'indexation (Robot.txt/Sitemap.xml/page 404) </div><br>
				

				<h4 id ="1-1">Exemple de mon site</h4><br>
			
			<h2 id ="3" class="pt-5">Hébergement</h2><br>
				<h4 id ="1-1">Configuration serveur</h4><br>
	
	      
	       
		</div>
	
	</div>
	
</div>
</body>
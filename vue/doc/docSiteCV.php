

<!DOCTYPE html>
<html lang="fr " >
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
				<a class="js-scrollTo" href="#Conclusion">Conclusion</a><br>
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
				responsiv (les éléments s'adaptent au format pc, tablette, mobile).
				 BootStrap inclut Jquery qui est une librairie de JavaScript permettant de rendre des éléments html dynamiques (boutons ,dropdown ,collapses...).</p>
				<p>Comme vous pouvez le voir ci-dessous l'arborescence du site est au format MVC (Modèle Vue Contrôleur) et
				 le html est renvoyé par du php.</p>
			
				<img class="picture h-3 m-4 w-25 rounded"
    			 src="../../images/doc/ImgSiteCV/arbo.png"
     			 alt="Arborescence code SiteCV"><br>
			
			
				<h2 class="pt-5" id ="1">BootStrap/Jquery</h2><br>
				<p> Bootstrap est un framework/librairie de html/css et inclut même certains éléments de jquery (librairie en js pour dynamiser le html)
				 comme des boutons pop up , dropdown , collapses ....
				 Bootstrap est initialement un outil interne à twitter qui est passé en open source en 2011 
				 et qui est devenu le projet le plus populaire de Github en 2012.</p><br>
			
				<h4>Base de bootstrap</h4><br>
				
				<div class ="ph4">Tout d'abord bootstrap possède une logique de travail par grille où l'on va définir dans les classes
				des éléments du html des lignes (row) et des colonnes (col), une ligne peut contenir au maximum
				12 colonnes, on peut faire des colonnes spécifiques à certain formats d'écrans.</div>
				
				<img class="picture h-5 m-4 w-75 p-5 rounded"
    			 src="../../images/doc/ImgSiteCV/bootstrap12.png"
     			 alt="Exemple row col bootstrap">

				  <div class ="ph4">Cette 'grille' de bootstrap est basé sur les éléments css flexbox qui peuvent être vue comme des
				  conteneurs responsiv ( qui s'adaptent à l'écran), ces conteneurs permettent de faire le squelette de la mise en forme.
				  Voici un exemple d'une grille de flexbox et sa traduction en bootstrap. </div>

				  <img class="picture h-5 m-4 w-50 rounded"
    			 src="../../images/doc/ImgSiteCV/flexbox.png"
     			 alt="Socials icons version pc"><br>

				  <img class="picture h-5 m-4 w-50 rounded"
    			 src="../../images/doc/ImgSiteCV/ExFlex2.png"
     			 alt="Socials icons version pc"><br>

				  <img class="picture h-5 m-4 w-50 rounded"
    			 src="../../images/doc/ImgSiteCV/exFlex.png"
     			 alt="Socials icons version pc"><br><br>

					
				  <div class ="ph4">Comme on peut le voir ci-dessus j'ai essayé de recréer cette disposition de flexbox , on a donc une ligne et une colonne 12 
				  (12 est le maximum de la largeur de la grille, donc équivaut à une largeur de 100%).<br><br> Dans ce rectangle on va recréer une ligne et la diviser
				  en 2 (noir /vert) puis du côté vert à droite on crée 3 lignes , la ligne centrale sera divisé en 2 colonnes (bleu/rouge)
				  <br><br> Ici je n'ai pas mis de css et malheureusement bootstrap ne permet pas de découper la hauteur en élement de 33% de la hauteur du parent 
				  (bootstrap accepte 25/50/75/100%).
				  
				  <br><br>C'est pourquoi on peut voir que mon conteneur bleu et rouge ne sont pas centrés contrairement à l'exemple de flexbox,
				  cela montre aussi que bootstrap ne remplace absolument pas le css.</div><br><br>
				  

				
				 <div class ="ph4">De manière assez basique les colonnes et les éléments d'une ligne vont s'aligner verticalement si l'écran de l'utilisateur n'est pas assez large.
				 Par exemple voici la fin de mon site en version pc et en version mobile.</div><br>
				 
				 
				  <img class="picture h-5 m-4 w-25 rounded"
    			 src="../../images/doc/ImgSiteCV/bootstrap2.png"
     			 alt="Socials icons version pc">
				->
				<img class="picture h-5 m-4 w-25 rounded"
    			 src="../../images/doc/ImgSiteCV/bootstrap.png"
     			 alt="Socials icons version mobile">
     			 
     			 
     			 <div class ="ph4">Bootstrap va aussi permettre de mettre dans les classes des 
				  éléments du html de la mise en forme qui normalement aurait été dans le css
     			 comme le margin , padding , couleurs, taille de l'élément et aussi son emplacement dans la grille ...<br></div>
     			 
     			  <img class="picture h-5 m-4 w-75 rounded pr-5 pl-5"
    			 src="../../images/doc/ImgSiteCV/bootstrapButton.png"
     			 alt="Exemple row et buttons bootstrap">
     			 
     			 <img class="picture h-5 m-4 w-75 rounded"
    			 src="../../images/doc/ImgSiteCV/ButtonBootstrap.png"
     			 alt="Rendu de l exemple ci dessus bootstrap">
     			 
     			 <br>
     			 
     			<div class ="ph4"> <i class ="w-50">Cette exemple montre la définition d'une ligne, la spécification de la répartition des éléments au sein de la ligne
     			 ainsi que la définition des 2 boutons ainsi que leurs marges, couleurs</i></div><br><br>
     			 
     			
     			 
     			 <div class = "ph4"> Cependant Bootstrap n'a pas vocation à remplacer tout le css contrairement à certaines librairies qui proposent cela (comme TailWind).</div><br>
				 
				 
				
				<h4>Exemples d'éléments</h4><br>


				<div class = "ph4">Les exemples que je vais montrer ici sont issues d'un projet d'entreprise de mon stage de 2eme année de BTS SIO.
				Sans bootstrap ils nécessitent du javascript,html,css. Pour commencer voici un bouton supprimer qui pour éviter les suppressions accidentelles
				déclenche un popup (modal) avec deux boutons supplémentaires.</div>
				
				<div class = "ph4">
				<img class="picture  w-100 rounded mt-3 mb-5"
    			 src="../../images/doc/ImgSiteCV/popup.png"
     			 alt="Popup issue de bootstrap">

				

				  <img class="picture  w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/popup2.png"
     			 alt="Popup issue de bootstrap">
				

				<img class="picture  w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/CodePopUp.png"
     			 alt="Popup issue de bootstrap">
				<br><br>
				  En élément qui dénote j'ai fait aussi des éléments "accordéons" avec bootstrap que voici. Le code contient aussi du php 
				  , l affichage est généré dynamiquement.
				  </div><br><br>

				  <div class = "ph4">

				  <img class="picture  w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/accordeons.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/accordeons2.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture h-75 w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/codeAccordeon.png"
     			 alt="Popup issue de bootstrap">

				  <br><br>
				Le dernier exemple est celui de la navbar sur mon site qui se transforme en bouton dropdown , en plus
				de ne pas rajouter du javascript, css , l'élément est responsiv et se déclenche uniquement sur un écran de largeur de smartphone 
				  </div><br><br>

				  <div class = "ph4">

				  <img class="picture w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/navPc.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/nav.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/navCollapse.png"
     			 alt="Popup issue de bootstrap">

				  <img class="picture w-100 rounded mb-3"
    			 src="../../images/doc/ImgSiteCV/codeNav.png"
     			 alt="Popup issue de bootstrap">
				  </div>

				 <br><br> <div class ="ph4"><u class="font-weight-bold">En résumé:</u> BootStrap en s'appuyant sur les flexbox nous permet de mettre un squelette à notre mise en forme
				  qui s'adaptera aux largeurs d'écrans. Aussi BootStrap permet de générer facilement des éléments qui nécessiteraient plus de codes
				  PopUp , Accordéons , Dropdowns et aussi des éléments en tout genre boutons , barre de navigation , barres de progrès...
				  Ces éléments peuvent se transformer selon la taille de l'écran (exemple ma barre de navigation).</div><br>

			
			<h2 id ="2" class="pt-5">SEO</h2><br>
				<p>	SEO est l'acronyme de Search Engine Optimization ce qui correspond à l'optimisation pour les moteurs de recherche.
				Cette optimisation est un ensemble de critères sur lesquels (Google, DuckDuckGo, Qwant, Yahoo...) vont indexer les sites en fonction
				de la recherche de l'utilisateur. </p><br>

				<h4>Les critères</h4><br>

				<div class ="ph4"> Il existe de nombreux sites qui listent les critères d'optimisations pour les moteurs de recherche j'en ai comparé 
				plusieurs et woorank me semble le plus claire, vous pouvez retrouver l'analyse de mon site sur woorank en cliquant
				<a id ="lien"class="text-primary d-inline ml-0" href="https://www.woorank.com/fr/www/leguilloualexandre.fr">ici</a>.<br><br>
				J'ai regroupé ces critères en 3 parties que voici :<br><br></div>

				
				
				<div class ="ph4">
				<br><br><u>-L'expérience utilisateur</u> (UX) va être évalué sur plusieurs points. Le
				premier est l'adaptation du site à tous les écrans (pc, tablettes, mobiles).</div>

				<img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/woorankResponsiv.png"
     			 alt="Affichage responsiv woorank"><br><br>
				
				<div class ="ph4">

				

				Toujours dans l'expérience utilisateur on a la vitesse de chargement du site qui va se traduire par une compression
				des ressources utilisés et une mise en cache optimisé des ressources.</div>

				<img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/woorankPerformance.png"
     			 alt="Performance de rechargement woorank"><br><br>


				  <div class ="ph4">Cependant même si mon site n'est pas optimal au niveau de la gestion de ressources vu q'il y a 
				  peu d'éléments à charger les temps de réponses sont bons.
				  </div><br><br>

				  <img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/vitesseSite.png"
     			 alt="Vitesse de chargement de mon site"><br><br>

				  <div class ="ph4">
				 Le dernier élément de l'expérience utilisateur est celui de la sécurité ce qui se traduit sur mon site par le passage
				  du http au https qui permet donc de sécuriser l'échange de données entre l'utilisateur et le serveur via un chiffrement hybride
				  et un certificat donné par un tiers de confiance. <br><br>
				  J'ai mis cet élément dans l'expérience utilisateur car les navigateurs , proxy d'entreprise bloquent de plus en plus
				  les sites qui n'ont pas de certificat ssl.<br><br>

				  J'ai un certificat SSL gratuit fournit par Let's Encrypt, j'ai configuré mon hébergement de manière à ce que les 
				  requêtes http soient redirigées en https et qu'il ne puisse y avoir de requête http traité sur mon site (principe de HSTS).
					</div><br>

				 <img class="picture rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/woorankSSL.png"
     			 alt="Analyse woorank SSL"><br><br>

				  <div class ="ph4"><u>- Les normes d'indexation</u>. Ce deuxième critère est directement destiné aux moteurs de 
				  recherches.<br><br> Tout d'abord les balises meta vont servir aux moteurs de recherches à renseigner des données connexes
				 au site ou des données de mise en forme pour partager le site.   <br><br>
				 Dans les données connexes on va retrouver la description , l'auteur , les mots clés du site, la mise en forme du partage pour les réseaux sociaux
				 (twitter, linkedin , facebook...).  </div><br>

				 <img class="picture  rounded w-75 ml-5 "
    			 src="../../images/doc/ImgSiteCV/meta.png"
     			 alt="Exemple de code de meta données"><br><br>
     			 
				  <div class ="ph4"> Ensuite on a l'ajout de fichiers pour les moteurs de recherches, 
				  ceux-ci ont des algorithmes qui en permancence analysent les sites web 
				  et vont chercher à la racine du site la présence d'un fichier robots.txt . Ce fichier va servir à renseigner des informations
				  complémentaire pour l'analyse du site. <br><br> Dans mon cas ce fichier robots.txt m'a servi à renseigner le chemin d'accès de 
				  mon Sitemap.xml. Le fichier Sitemap.xml est la liste des liens, pages que contient le site .<br> 
				  Si les algorithmes n'ont pas ce fichier ils sont suceptibles de ne pas analyser certaines pages du site.  </div><br><br>

				  <img class="picture  rounded w-50  "
    			 src="../../images/doc/ImgSiteCV/robotsTxt.png"
     			 alt="Fichier texte pour les robots google"><br><br>


				  <img class="picture  rounded w-50 "
    			 src="../../images/doc/ImgSiteCV/SitemapXml.png"
     			 alt="Sitemap.xml de mon site"><br><br>


				  <div class ="ph4">Enfin via le Sitemap.xml ou en mettant une fausse url à la fin du site , les moteurs de recherches vont vérifier
				  la présence de pages d'erreurs personalisés comme la plus répandue erreur 404 ressource non trouvé bien qu'il en existe d'autres  
				  (400 mauvaise requête : le serveur ne comprend pas la requête client, 403 accès interdit : le client n'a pas les droits d'accès à la ressource ...)
				  <br><br> Voici donc une erreur par défaut d'un serveur apache et celle personalisé de mon site.
				   </div><br>

				   <img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/404.png"
     			 alt="Erreur 404 de base d apache"><br><br>


				  <img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/4042.png"
     			 alt="Erreur 404 personalisé"><br><br>


     			 <br>

				<div class ="ph4">
				<br><br><u>-La popularité et les outils d'analyses </u>d'un site sont les derniers critères d'indexation .<br><br>
				Pour la fréquentation, la popularité du site sur les réseaux sociaux et l'engagement que le site suscite (j'aime, retweet ...) 
				sont pris en compte.
				Ainsi que les 'backlinks' c'est à dire le nombre de liens renvoyant vers mon site depuis des sites différents.<br><br>

				Sur mon site pour consulter le nombre de visiteurs et les données associés (type d'appareil, nationalité ...) 
				j'utilise google analytics.<br><br>
				Ce service de google est gratuit et il suffit de mettre un simple code javascript au début de son site.

				
				</div><br>

				<img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/GoogleAnalytics.png"
     			 alt="Code Google Analytics"><br><br>
				
				<div class ="ph4">
				  Voici à quoi ressemple le tableau de bord de Google Analytics , on notera que pour pouvoir accéder à des informations plus précises
				  sur les utilisateurs (âge ,sexe...), il faut activer les données publicitaires et mettre à jour la politique de confidentialité du site.
				</div><br>

				<img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/googleAnalytic.png"
     			 alt="Interface Google Analytics"><br><br>

				  <img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/googleAnalytic2.png"
     			 alt="Interface Google Analytics"><br><br>

				  <div class ="ph4">
				  En terme de fréquentation mon site est très mal noté vu qu'il n'a pas vocation a susciter l'engagement sur les réseaux sociaux et que les 
				  utilisateurs sont des recruteurs ou des proches curieux.
				  </div><br>

				  <img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/traffic.png"
     			 alt="Notation traffic de mon site sur woorank"><br><br>


				  <img class="picture  rounded w-75 mx-5 px-5"
    			 src="../../images/doc/ImgSiteCV/Socials.png"
     			 alt="Notation engament sur les reseaux sociaux de mon site sur woorank"><br><br>


				<br><br> <div class ="ph4"><u class="font-weight-bold">En résumé:</u> Pour améliorer la visibilité d'un site sur les moteurs de recherche
				il va falloir optimiser l'expérience utilisateur via une adaptation du site à toutes les interfaces, minimiser les ressources pour un temps
				de chargement réduit et être en https.<br> Ensuite il faut respecter certaines normes d'indexation comme les balises meta, le fichier robots.txt et sitemap.xml,
				des pages d'erreur personalisées.<br> Enfin la popularité du site, l'engagement qu'il suscite sur les réseaux sociaux et les outils d'analyses d'audience vont 
				former la denière partie de l'optimisation pour les moteurs de recherche. 
				</div><br>
				
			
			<h2 id ="3" class="pt-5">Hébergement</h2><br>
			<p> Mon site est hébergé sur un serveur partagé ovh. J'accède à l'espace partagé via FTP (File Transfer Protocol) avec mot de passe et j'y 
			retrouve la même arborescence que sur un serveur apache (www/site).</p>

			<img class="picture rounded w-75 mx-5 px-4"
    		 src="../../images/doc/ImgSiteCV/www.png"
     		 alt="arborescence apache ovh"><br><br>

			<img class="picture rounded w-75 mx-5 px-4"
    		 src="../../images/doc/ImgSiteCV/www2.png"
     		 alt="arborescence apache ovh"><br><br>

			<p> Comme on peut le voir dans l'arborescence il y a deux fichiers essentiels à configurer qui sont 
			ovhconfig et htaccess.<br><br> Pour le fichier ovhconfig j'ai mis simplement la technologie et la version à utiliser (php 7.3)
			, ovh va sûrement traduire ses informations en commande linux apt get ...</p>

			<img class="picture rounded w-75 mx-5 px-4"
    		 src="../../images/doc/ImgSiteCV/ovhconfig.png"
     		 alt="arborescence apache ovh"><br><br>
				
			  <p> Le second fichier htaccess est le plus important , va permettre de configurer les redirections http vers le https 
			  et la redirection de l'erreur serveur 404 (La ressource n'a pas été retrouvé) vers ma page personalisé. </p>

			
			  <img class="picture rounded w-75 mx-5 px-4"
    		 src="../../images/doc/ImgSiteCV/htaccess.png"
     		 alt="arborescence apache ovh"><br><br><br>

			
			  <h2 class="pt-5" id ="Conclusion">Conclusion</h2><br>

			  <p>En définitive avec ce projet j'en ai plus appris sur la mise en forme , l indexation google et l'hébergement de site web.</p>
				
			<p>De plus je vais faire en sorte de maintenir mon site à jour et d'ajouter du contenu (veille technologique , plus de projets , améliorer la documentation de chaque projet...) 
			pour que mon site puisse à la fois contribuer à mes travaux personnels , professionnelles , scolaires.</p><br><br><br><br><br><br><br><br><br><br>
				
	      
	       
		</div>
	
	</div>
	
</div>
</body>
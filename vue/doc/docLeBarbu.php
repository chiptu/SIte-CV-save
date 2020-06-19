

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
			
			L'idée de ce projet était donc de faire une application android permettant de jouer au jeu de cartes s'appelant le barbu (ou parfois appelé palmier).<br> <br>
			Il se joue à plusieurs (1 à 10) au tour par tour,
			une carte pioché par un joueur est soit un nombre de gorgée à distribuer ou un mini jeu, l'utilisateur peut modifier les mini jeux si ils le souhaitent.<br><br>

			L'application est faite sur AndroidStudio avec le langage java et une base de données Sqlite3, les interfaces sont ajuster en parties avec la langage de balisage xml.<br><br>

			Le but était que je teste de nouveaux outils, langages, framework et de sortir réellement une application sur le playstore pour voir concrétement ce que c'est de faire une application android, 
			de la tester, déployer...
			
			</p>

			<h2 class="pt-5" id ="1">Interface</h2><br>

			<p>


			
			L'application comprend 4 interfaces: <br><br>

			Les interfaces en bleu sont inclus dans android studio pour voir les éléments invisibles à l'écran, les identifiants des éléments et dans certains cas les contraintes, elles sont aussi plus rapide à générer.<br><br>

			L'interface "d'accueil" qui comprend une pub, une explication de ce qu'est le barbu :	</p>	

			<img class="picture m-4 w-50 rounded"
    			 src="../../images/doc/ImgBarbu/Interface/design1.png"
     			 alt="Interface d accueil"><br><br>

			<p>L'interface formulaire des prénoms :	<br><br>
			On peut remarquer les contraintes de placement des éléments qui servent à garder une proportionalité de la position de l'élément selon les écrans.	</p>

			<img class="picture m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/design2.png"
	 		 alt="2 eme interface"><br><br>

			  <p>L'interface du jeu en lui même avec le bouton piocher, le bouton paramètre (modification des règles), un texte dynamique en bas permettant de savoir qui a pioché la carte,
			  un autre texte dynamique pour le nom du mini jeu et un bouton popup pour afficher la description du mini jeu :		</p>

			<img class="picture m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/design3.png"
	 		 alt="3 eme interface"><br><br>

			  <p>L'interface de modification des règles (l'interface est moche et il faut que je la mette à jour) :		</p>

			<img class="picture m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/design4.png"
	 		 alt="4 eme interface"><br><br>

			<p> La grande majorité des éléments graphique sont crées avec la boîte à outils de android studio où il suffit de déposer, glisser. Le paramétrage peut se faire graphiquement dans la liste des attributs.</p>
			
			<img class="picture m-4 w-25 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/designdrop.png"
	 		 alt="drop and drag">
			  
			  <img class="picture  m-4 w-25 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/designattribut.png"
	 		 alt="design attribut"><br><br>

			
			<p> Ces éléments crées et paramétrés en glisser déposer sont en faites traduit dans le langage de balisage xml.<br><br> </p>

			<img class="picture  m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/designxml.png"
	 		 alt="designxml"><br><br>

			<p> Dans certains cas pour personnaliser le design des éléments il faut écrire, modifier le code xml.<br><br></p>

			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Interface/xmlCustom.png"
	 		 alt="Xml Custom"><br><br>
			
			<p> <u class="font-weight-bold">En résumé:</u> Les interfaces d'une application android sont différentes de celles du web, plus simple à faire grâce à la boîte à outils et aux attributs même si pour faire des éléments qui dénotent
			 il faut aller dans le code xml.</p>



			<h2 class="pt-5" id ="2">BDD Sqlite3</h2><br>
			<p>
			Expliquer code AccesBDD et MySqlLite, comment acceder a la bdd et la tester grace au plugin opera.<br><br>
			
			Les ressources d'AndroidStudio sont faites en sorte que pour stocker des données en local, SqlLite3 est la base de données par défaut à utiliser. 
			Il est dommage qu'on ne puisse pas avoir une interface semblable à celle de phpMyAdmin.<br><br>

			Par rapport à PhpMyAdmin qui marche avec MySql on doit faire en sorte que la base de données puissent se créer, mettre à jour automatiquement vu quelle est en local.
			</p>


			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/MySqlite.png"
	 		 alt="MySqlite"><br><br>

			<p>
			Pour les requêtes CRUD (Create Read Update Delete), on fait une classe à part où on peut faire des requêtes SQL directement. Pour prendre des données avec un SELECT on est obligé de faire un curseur.
			</p>

			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/AccesBDD.png"
	 		 alt="AccesBDD"><br><br>


			<p>
			Pour pouvoir faire des requêtes sur la base de données pour faire des test, vu qu'il n'y a pas d'interface implémenté de base, j'ai pris la bdd depuis les données locales de mon téléphone et ensuite l'ai upload dans 
			un "lecteur" de bdd Sqlite.
			</p>

			<img class="picture  m-4 w-25 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/bddDeviceExplorer.png"
	 		 alt="bddDeviceExplorer">

			  <img class="picture  m-4 w-25 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/dataPhone.png"
	 		 alt="dataphone"><br><br>

			  <img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/MySqliteReader.png"
	 		 alt="dataphone"><br><br>



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
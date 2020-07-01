

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







<body>

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
			Il se joue à plusieurs (2 à 10) au tour par tour,
			une carte pioché par un joueur est soit un nombre de gorgée à distribuer ou un mini jeu, l'utilisateur peut modifier les mini jeux si ils le souhaitent.<br><br>

			L'application est faite sur AndroidStudio avec le langage java et une base de données Sqlite3, les interfaces sont ajuster en parties avec le langage de balisage xml.<br><br>

			Le but était que je teste de nouveaux outils, langages, framework et de sortir réellement une application sur le playstore pour voir concrétement ce que c'est de faire une application android, 
			de la tester, déployer...
			
			</p>

			<h2 class="pt-5" id ="1">Interface</h2><br>

			<p>


			
			L'application comprend 4 interfaces: <br><br>

			Les interfaces en bleu sont inclus dans android studio pour voir les éléments invisibles à l'écran, les identifiants des éléments et dans certains cas les contraintes, elles sont aussi plus rapides à générer.<br><br>

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
			
			Les ressources d'AndroidStudio sont faites en sorte que pour stocker des données en local, SqlLite3 est la base de données par défaut à utiliser. 
			Il est dommage qu'on ne puisse pas avoir une interface semblable à celle de phpMyAdmin.<br><br>

			Par rapport à PhpMyAdmin qui marche avec MySql on doit faire en sorte que la base de données puissent se créer, mettre à jour automatiquement vu qu'elle est en local sur le téléphone de l'utilisateur (la bdd peut être supprimé, modifié...).
			</p>


			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/MySqlite.png"
	 		 alt="MySqlite"><br><br>

			<p>
			Pour les requêtes CRUD (Create Read Update Delete), on fait une classe à part où on peut faire des requêtes SQL directement. Pour prendre des données avec un SELECT on est obligé d'utiliser un curseur.
			</p>

			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/BDD/AccesBDD.png"
	 		 alt="AccesBDD"><br><br>


			<p>
			Pour pouvoir faire des requêtes sur la base de données, vu qu'il n'y a pas d'interface implémenté de la base de données, il est nécessaire de prendre la bdd depuis les données locales de son téléphone et ensuite l'upload dans 
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
	 		 alt="SqliteReader"><br><br>







			<h2 class="pt-5" id ="3">Programmation Java</h2><br>

			<p>
			

			AndroidStudio a une logique par activité, une activité est une "page", interface où vont être liés le langage graphique (xml) et le langage de programmation (java).<br><br>

			Tout le code ne sera pas présenté mais uniquement ce qui me semble le plus pertinent. <br><br>

			On va donc dans MainActivity pouvoir déclarer les boutons, texte à saisir, texte à afficher... Pour pouvoir agir en fonction de l'utilisateur.</p>

			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Java/MainActivity.png"
	 		 alt="MainActivity"><br><br>

			<p>
			Je vérifie entre autres si la base de données contient déjà des règles ou non. Si elle ne contient pas de règles je considère que c'est le premier lancement de l'application et insère les règles de base.
			</p>

			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Java/regle.png"
	 		 alt="Regle"><br><br>

			<p>
			Ensuite pour le formulaire des noms j'ai un bouton qui déclenche une liste allant de 1 à 10. Si l'utilisateur sélectionne 4 je dois afficher 4 textes à saisir et 4 textes d'affichage. <br><br></p>

			<img class="picture  m-4 w-25 rounded"
	 		src="../../images/doc/ImgBarbu/Java/4.png"
	 		 alt="Capture app formulaire prenom"><br><br>

			<p>
			Dans un premier temps je me suis dis que j'allais faire 10 conditions if en mettant en invisible ou visible les textes à saisir correspondant. Sachant que je dois le faire pour le texte à saisir et le texte d'affichage 
			cela ferait 10 conditions x 10 (invisibiliser) x 2 (elements differents) soit 200 lignes de codes redondantes.<br><br>

			Pour optimiser mon code j'ai donc pensé à mettre tous ces éléments dans une ArrayList (collection) et automatiser leurs statuts de visibilités avec une boucle.
			</p>

			<img class="picture  m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Java/MainActivity2ArrayList.png"
	 		 alt="ArrayList"><br><br>

			<p>J'appele ensuite ces fonctions directement selon le positionnement du spinner (bouton liste).</p>
			
			<img class="picture  m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Java/MainActivity2Spinner.png"
	 		 alt="Appelle fonction arraylist"><br><br>

			<p>Pour la 3 eme activité celle du jeu en lui même, à chaque pioche un nombre au hasard est déterminé entre 1 et 52, si il n'a pas été déjà pioché la carte s'affiche. <br><br></p>

			<img class="picture  m-4 w-50 rounded"
	 		src="../../images/doc/ImgBarbu/Java/MainActivity3(1).png"
	 		 alt="Appelle fonction arraylist"><br><br>


			<p>Dans une variable tampon est gardé une ancienne carte pour l'afficher derrière la nouvelle carte pioché (sorte d'historique à un coup).<br><br></p>

			
			  <img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Java/MainActivity3(3).png"
	 		 alt="Appelle fonction arraylist"><br><br>

			<p>Toutes les cartes passées sont dans une arraylist si celle-ci dépasse 52 la partie est considéré comme terminé. </p>

			<img class="picture  m-4 w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Java/MainActivity3(2).png"
	 		 alt="Appelle fonction arraylist"><br><br>


			<p>	Le code documenté n'est pas exhaustif, j'aurai pu mentionner le code pour faire un popup , pour modifier les règles, pour identifier une carte, mettre en place une pub...	<br><br>
			
			<u class="font-weight-bold">En résumé:</u> L'essentiel du code est de la programmation impérative (boucles, conditions...), une partie lié à Sqlite3 est orienté objet et le reste est essentiellement de l'appel de fonction 
			lié aux ressources d'AndroidStudio.

			</p>





			<h2 class="pt-5" id ="4">Déploiement</h2><br><br>
			<p>
			Google play console, admob, build apk<br><br>

			Pour déployer une application sur le play store il faut avoir un compte google développeur qui coûte 25$.<br><br>
			Une fois le compte crée on peut accéder à la google play console qui permet d'ajouter, paramétrer entièrement ses applications.<br><br> 
			</p>

			<img class="picture   w-100 rounded"
	 		src="../../images/doc/ImgBarbu/Deploiement/GooglePlayConsole.png"
	 		 alt="Appelle fonction arraylist"><br><br>

			<p>Avant de soumettre l'application à la vérification de google pour la publier il va falloir répondre à tout un tas de question sur si l'application contient des achats, de la violence, alcool ect.<br><br>
			Il va falloir générer l'application au format apk ou bundle avec une clé privé donné par google. Lors de la génération de l'apk ou du bundle il est possible qui faille configuré le fichier GradleBuild dans AndroidStudio.</p>

			<img class="picture   w-25 rounded"
	 		src="../../images/doc/ImgBarbu/Deploiement/Keys.png"
	 		 alt="Appelle fonction arraylist"><br><br>

			  <img class="picture   w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Deploiement/GenerateBundle.png"
	 		 alt="Appelle fonction arraylist"><br><br>


			  <img class="picture   w-75 rounded"
	 		src="../../images/doc/ImgBarbu/Deploiement/GradleBuild.png"
	 		 alt="Appelle fonction arraylist"><br><br>

			  <p>Enfin il restera à créer sa fiche playstore avec photos, description, image d'icone.<br><br></p>

			  <img class="picture   w-100 rounded"
	 		src="../../images/doc/ImgBarbu/Deploiement/GooglePlayConsole2.png"
	 		 alt="Appelle fonction arraylist"><br><br>




			<h2 class="pt-5" id ="Conclusion">Conclusion</h2><br>

			<p>
			Le développement entre une application mobile et web sont un peu différents sur la mise en forme (xml/html) et le backend android a sa propre logique et ses ressources fonctionnant par activité .<br><br>
			Ce projet m'a permis de changer d'environnement et donc de tester et appréhender de nouveaux outil, langages, framework.
			</p><br><br><br><br><br>
	
		</div>
	</div>
</div>
</body>
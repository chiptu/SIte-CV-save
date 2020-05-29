<!DOCTYPE html>
<html lang="fr">
	

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


        










	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navbarNavAltMarkup2">
    	
       		 <div class="navbar-nav mx-auto">
       		 	
                <a class="mx-2 js-scrollTo" href="#Contexte"> Contexte </a>
				<a class="mx-2 js-scrollTo" href="#Environnement"> Environnement </a>
				<a class="mx-2 js-scrollTo" href="#Déploiement"> Déploiement </a>
				<a class="mx-2 js-scrollTo" href="#Compétence"> Compétence </a>
				<a class="mx-2 js-scrollTo" href="#Justification"> Justification </a>
				
				<a class="ml-5 mr-2" href="Accueil.php"> Accueil </a>
            	<a class=" mx-2 " href="DbsPatchs.php"> DBS Patchs </a>
				<a class="mx-2 " href="Veille.php"> Veille technologique </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
	
	<div class="row">
         <div class="col-12">

		 <div class = "container bg-white" id="doc">
		
		<br>
		
		<h1>DMS Web</h1>


                <h2 class="pt-5" id ="Contexte">Contexte</h2><br>

				<p>Ce projet a eu lieu durant mon stage de 2 ème année dans le groupe skilliance qui regroupe des entreprises 
				qui développent et éditent des applications métiers pour les concessionnaires qui vendent tout types de véhicules.<br><br>
				
				La numérisation de l'économie englobe aussi la numérisation de la gestion des concessions avec sa logique métier par exemple cela va être la gestion du matériel, des prospects, des réparations...<br><br>
				Cette numérisation de la gestion de la concession permet aux concessions de mieux contrôler leurs dépenses tout en maximisant leurs clients.<br><br>

				Skilliance group a donc un logiciel client lourd natif à windows qui est régulièrement mis à jour, les mises à jour sont asynchrones. Un client peut avoir la version 1.1 alors qu'un autre a la version 1.2. Selon les
				versions certaines comportent des fonctions sur mesure.<br><br>

				Le progiciel natif à windows est amené à évoluer en version web ce qui permettra une compatibilité entre tous les OS (windows, linux, macintosh) et 
				permet un affichage dynamique sur tout types d'écrans (pc, tablette, téléphone).<br><br>

				Ce projet s'intitule DMS Web, il a vocation à être une maquette, un début à la réflexion que l'entreprise souhaite faire sur l'évolution de son application.
				
				</p>

				<!--Entreprise, utilite du projet pour l'entreprise, environnement, lien git + lien drive d un zip, ma partie-->
				
				<h2 class="pt-5" id ="Environnement">Environnement</h2><br>

				<p>J'ai principalement travaillé sur ce projet seul même si j'ai repris le début de travail d'une première maquette.<br><br>
				
				Cependant je pouvais poser des questions sur ReactJS et sa logique à celui qui avait fait le début de maquette
				j'utilisais bitbucket pour gérer les versions du code de manière git.<br><br>


				Les besoins étaient exprimés à l'oral par mon tuteur de stage, que ceux-ci étaient flexibles malgré cela j'ai fait un trello avec des listes de chose à faire, en cours, à vérifer, fait, problème.<br><br>

				Mon poste de travail était sous le système d'exploitation linux ubuntu et j'avais comme IDE (Integrated Development Environment) Visual Studio Code.<br><br>

				Pour le BackEnd une API existait dont je ne conaissais pas son fonctionnement.<br><br> 
				
				Concernant le FrontEnd nous utilisions html, scss (qui se compile par la suite en css), Tailwind qui permet de créer du 
				contenu qui s'adapte à la taille de l'écran (grâce aux flexbox) et de personaliser les éléments directement dans le html de manière plus poussée, précis que bootstrap.
				<br><br>
				Tout ces langages, librairies étaient regroupés dans le framework ReactJS qui permet de faire une application web fluide, avec des temps de réponses très bon
				car la grande partie des formulaires actions sont traités en JS côté client, le côté serveur répondant uniquement à des requêtes très précise grâce à une API.<br><br>
				Par exemple les modules qui sont au nombre d'une bonne dizaine (matériels, ordres de réparations, clients...) peuvent être placé en favoris 
				et apparaitrons en tableau de bord, cette gestion des favoris est faites uniquement en FrontEnd grâce au LocalStorage du navigateur et à la logique
				de rechargement d'état de ReactJS.</p>

				<h2 class="pt-5" id ="Déploiement">Déploiement</h2><br>
				<p>

				Lien Google Drive du projet DMS Web en .zip <a class="ml-0 pl-0 text-primary" href="https://drive.google.com/open?id=1k-73Fqq92qTiQhDbq3dMTQbmkLVsyVKi">ici </a>.<br><br>

				Pour un lien git il me faudra votre mail pour vous inviter de préférence celui de github. <br><br>

				Le projet nécessite Node.Js.

				Pour lancer le projet il faudra dans le terminal à l'emplacement du dossier faire un "npm install" ou "npm update".<br><br> Normalement
				vous pourrez faire un "npm run" si tout est bon vous pourrez avoir accès à l'application dans votre navigateur à l'adresse 127.0.0.1:3000 .<br><br>
				En cas de problème la commande "npm audit fix" résout automatiquement certains problèmes.
				</p>
			
                <h2 class="pt-5" id ="Compétence">Compétence</h2><br>

                <p>Liste des compétences assimilées avec ce projet.</p>
        
        <div class="tab-pane mt-1 mx-5 px-5">
            <table class="table table-striped table-sm border datatable mx-5 " id="tablePatch">
                <thead>
                    <tr class="text-black bg-secondary">
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Lien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A1.1.1</td>
                        <td>Analyse du cahier des charges d'un service à produire</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.1.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.1.3</td>
                        <td class ="text-white">Etude des exigences liées à la qualité attendu attendue d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.1.3">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td>A1.4.1</td>
                        <td>Participation à un projet</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.4.1">ici</a></td>						
  
                    </tr>
					
					<tr class="bg-dark">
                        <td class ="text-white">A2.3.1</td>
                        <td class ="text-white">Identification, qualification et évaluation d'un problème</td>
                        <td ><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A2.3.1">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td>A3.2.1</td>
                        <td>Installation et configuration d'éléments d'infrastructure</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A3.2.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A3.2.2</td>
                        <td class ="text-white">Remplacement ou mise à jour d'éléments</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A3.2.2">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td >A4.1.2</td>
                        <td >Conception ou adaptation de l'interface utilisateur d'une solution aplicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.2">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.3</td>
                        <td class ="text-white">Conception ou adaptation d'une base de données</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.3">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td>A4.1.6</td>
                        <td>Gestion d'environnements de développement et de test</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.6">ici</a></td>						
  
                    </tr>
					
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.8</td>
                        <td class ="text-white">Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.8">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.2.2</td>
                        <td>Adaptation d'une solution applicative aux évolutions de ses composants</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.2.2">ici</a></td>						
  
                    </tr>
                    
                </tbody>
            </table>
        </div>

		<h2 class="pt-5" id ="Justification">Justification</h2><br>

		
		<h4 class="pt-5" id="A1.1.1">A1.1.1</h4><br>
		<p>
		Ce projet a nécissité une analyse des besoins pour choisir certaines librairies, mise en forme.<br>
		Les besoins n'étaient pas exprimés à l'écrit mais à l'oral par mon tuteur. Une fois énoncé je notais, décortiquais ces besoins sur trello.<br>
		</p>
		<img class="picture rounded w-50 mx-5 px-4 h-25 "
    		 src="../../images/portefeuille/trello2.png"
     		 alt="archive trello"><br><br>


		<h4 class="pt-5" id="A1.1.3">A1.1.3</h4><br>
		<p>
		L'analyse du besoin engendre des critères minimum d'exigence. Par exemple le besoin de gestion des widgets dans le localstorage nécessite de le transformer 
		en un objet JSON qu'on pourra récupérer et stocker sur appel de fonction.
		</p>

		<h4 class="pt-5" id="A1.4.1">A1.4.1</h4><br>
		<p>
		Je vous renvoie au contexte, environnement, déploiement. En complément voici les parties du projet sur lequelles j'ai travaillé.<br><br>
		Il existait quasiment que la navbar sur ce projet ReactJS, il a fallu faire les cadres du tableau de bord, les "cardbox" cliquables et à la fois qu'on peut mettre 
		en favoris via une gestion dans le LocalStorage du navigateur.<br><br> 
		Ensuite la gestion des widgets avec une popup pour sélectionner les widgets, les afficher, 
		cette gestion s'est aussi faite dans le LocalStorage.<br><br>
		Enfin dans chaque menu afficher les bonnes cardbox.<br><br>
		ReactJS était assez nouveau à appréhender puisque il n'est pas sur le format MVC, tout se fait en FrontEnd et marche par composant et chaque composant à un état.<br><br>
		Par exemple le dossier App.js est la racine de tous les composants, il inclut navheader qui inclut une route vers dashboard qui inclut cadre widget, incluant 
		le popup et les widgets à afficher.<br><br>
		Si dans mon fichier popup je dis a=1 print(a) une erreur me sera renvoyé , ReactJS marchant avec un cylce de vie d'état la variable n'existe pas encore, il va falloir
		recharger le composant pour que le variable existe.  a=1 this.setState{(a:1)} if isset(a) {print(a)} .
		</p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/composant.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/composant2.png"
     	alt="archive trello"><br><br>

		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/dms.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/dms2.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/dms3.png"
     	alt="archive trello"><br><br>

		<p>Ces images au-dessus correspondent à la version de l'application mise en forme avec TailWind qui permet de mettre quasi tout le css dans les class du html. 
		<br><br>Cette version n'a pas convenue à mon tuteur, il a alors acheté un template de dashboard marchant avec bootstrap. Mon rôle a donc été de passer de tailwind 
		aux éléments de bootstrap conçus dans le dashboard en les adaptant si besoin.</p>


		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/design1.png"
     	alt="archive trello"><br><br>

		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/design2.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/design3.png"
     	alt="archive trello"><br><br>

		 <p>J'ai aussi rajouter de la mise en forme sur la recherche de clients</p>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/design4.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/design5.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/design6.png"
     	alt="archive trello"><br><br>

		 <img class="picture rounded w-75 "
    	src="../../images/portefeuille/design7.png"
     	alt="archive trello"><br><br>

		<h4 class="pt-5" id="A2.3.1">A2.3.1</h4><br>
		<p>
		Plusieurs problèmes de mises en forme sont apparus au cours du projet, ils ont tous été résolu après avoir été identifié, qualifié, évalué.<br><br>
		Par exemple dans le popup des widgets le bouton fermer était trop bas et impossible à remonter avec mes connaissances il a fallu identifié la source du problème
		grâce aux outils des navigateurs. Le PopUp crée une sorte de margin il a fallu , arranger celle-ci pour que le bouton soit dans la popup.
		</p>
		<h4 class="pt-5" id="A3.2.1">A3.2.1</h4><br>
		<p>
		Comme vous pouvez le voir dans contexte et déploiement pour ce projet a été configuré et installer le framework ReactJS basé sur Node.js.
		</p>
		<h4 class="pt-5" id="A3.2.2">A3.2.2</h4><br>
		<p>
		L'élément mis à jour ici est la librairie de mise en forme de l'interface qui est passé de tailwind à bootstrap ce qui a demandé d'adapter un certain nombre 
		d'éléments.
		</p>
		<h4 class="pt-5" id="A4.1.2">A4.1.2</h4><br>
		<p>
		Comme expliqué dans A1.4.1 participation à un projet, l'immense partie du temps ce projet était sur la conception, adaptation d'interface utilisateur d'une 
		solution applicative.
		</p>
		<h4 class="pt-5" id="A4.1.3">A4.1.3</h4><br>
		<p>
		Ce projet ne contient pas sur la partie où je travaillais de base de données sql mais pour la persistence des données, objets, je transformais un objet en 
		JSON pour ensuite l'enregistrer dans le localStorage du navigateur, on peut ensuite le récupérer, modifier, supprimer.
		</p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/json.png"
     	alt="archive trello"><br><br>
		<h4 class="pt-5" id="A4.1.6">A4.1.6</h4><br>
		<p>
		Comme vous pouvez le voir dans contexte et déploiement pour ce projet a été configuré et installer le framework ReactJS basé sur Node.js.
		</p>
		<h4 class="pt-5" id="A4.1.8">A4.1.8</h4><br>
		<p>
		Chaque fonctionnalité a été testé à la main en envisageant toutes les utilisations possibles de l'utilisateurs exemple mise en favoris des cardbox , ajout et 
		retrain des widgets...
		</p>
		<h4 class="pt-5" id="A4.2.2">A4.2.2</h4><br>
		<p>
		Le composant mis à jour ici est la librairie de mise en forme de l'interface qui est passé de tailwind à bootstrap ce qui a demandé d'adapter un certain nombre 
		d'éléments.
		</p><br><br>


    </div>
</div>

	

</div>
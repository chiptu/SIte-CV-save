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
            	<a class="ml-5 mr-2 " href="DmsWeb.php"> DMS Web </a>
				<a class="mx-2 " href="Veille.php"> Veille technologique </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
<div class = "container h-100 bg-white" id="doc">
		
	<br>
	
	<h1>DBS Patchs</h1><img class="picture rounded w-50 mx-5 px-4 h-25 "
    		 src="../../images/portefeuille/trello.png"
     		 alt="archive trello"><br><br>
	
	
	<div class="row">
         <div class="col-12">


                <h2 class="pt-5" id ="Contexte">Contexte</h2><br>

				<p>Ce projet a eu lieu durant mon stage de 2 ème année dans le groupe skilliance qui regroupe des entreprises 
				qui développent et éditent des applications métiers pour les concessionnaires qui vendent tout types de véhicules.<br><br>
				
				La numérisation de l'économie englobe aussi la numérisation de la gestion des concessions avec sa logique métier par exemple cela va être la gestion du matériel, des prospects, des réparations...<br><br>
				Cette numérisation de la gestion de la concession permet aux concessions de mieux contrôler leurs dépenses tout en maximisant leurs clients.<br><br>

				Skilliance group a donc un logiciel client lourd natif à windows qui est régulièrement mis à jour, les mises à jour sont asynchrones. Un client peut avoir la version 1.1 alors qu'un autre a la version 1.2. Selon les
				versions certaines comportent des fonctions sur mesure.<br><br>

				Face à un nombre grandissant de versions du logiciel Skilliance group a eu besoin de faire un outil interne pour gérer les informations sur les versions du logiciel.<br><br>

				Cet outil est une application web sur l'intranet de l'entreprise s'intitulant DBS Patchs. 
				</p>

				
				<h2 class="pt-5" id ="Environnement">Environnement</h2><br>

				<p>Ce projet était en binôme, nous utilisions bitbucket pour gérer les versions du code de manière git.<br><br>


				Les besoins étaient exprimés à l'oral par mon tuteur de stage, que ceux-ci étaient flexibles malgré cela j'ai fait un trello avec des listes de chose à faire, en cours, à vérifer, fait, problème.<br><br>

				Mon poste de travail était sous le système d'exploitation linux ubuntu et j'avais comme IDE (Integrated Development Environment) Visual Studio Code.<br><br>

				Pour le BackEnd nous codions en PHP sur le framework laravel en utilisant l'ORM (Object Relation Mapping) eloquent.<br><br> 
				
				Concernant le FrontEnd nous utilisions html, scss (qui se compile par la suite en css), Bootstrap qui permet de créer du 
				contenu qui s'adapte à la taille de l'écran (grâce aux flexbox) et de personaliser les éléments directement dans le html.<br><br></p>

				<h2 class="pt-5" id ="Déploiement">Déploiement</h2><br>
				<p>

				Lien Google Drive du projet DBS Patchs en .zip <a class="ml-0 pl-0 text-primary" href="https://drive.google.com/file/d/1GUzDDlLvmv8dMQzSScPdPBIJOcxxHfTf/view?usp=sharing">ici </a>.<br><br>

				Pour un lien git il me faudra votre mail pour vous inviter de préférence celui de github. <br><br>

				Le projet nécessite Laravel 5.8 d'installé avec php aussi.

				Pour lancer le projet il faudra dans le terminal à l'emplacement du dossier faire un "composer install" ou "composer update".<br><br> Normalement
				vous pourrez faire un "php artisan serve" si tout est bon vous pourrez avoir accès à l'application dans votre navigateur à l'adresse 127.0.0.1:8000 .

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
                        <td>A1.2.2</td>
                        <td>Rédaction des spécifications techniques de la solution retenue</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.2.2">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.2.4</td>
                        <td class ="text-white">Détermination des tests nécessaires à la validation d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.2.4">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A1.4.1</td>
                        <td>Participation à un projet</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.4.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.4.2</td>
                        <td class ="text-white">Evaluation des indicateurs de suivi d'un projet et justification des écarts</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A1.4.2">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A2.3.1</td>
                        <td>Identification, qualification et évaluation d'un problème</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A2.3.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A2.3.2</td>
                        <td class ="text-white">Proposition d'amélioration d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A2.3.2">ici</a></td>						
  
                    </tr>
					<tr><!--Entreprise, utilite du projet pour l'entreprise, environnement, lien git + lien drive d un zip, ma partie-->
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
                        <td>A4.1.1</td>
                        <td>Proposition d'une solution applicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.2</td>
                        <td class ="text-white">Conception ou adaptation de l'interface utilisateurd'une solution apllicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.2">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.3</td>
                        <td>Conception ou adaptation d'une base de données</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.3">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.4</td>
                        <td class ="text-white">Définition des caractéristiques d'une solution applicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.4">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.6</td>
                        <td>Gestion d'environnements de développement et de test</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.6">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.7</td>
                        <td class ="text-white">Développement, utilisation ou adaptation de composants logiciels</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.7">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.8</td>
                        <td>Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.8">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.9</td>
                        <td class ="text-white">Rédaction d'une documentation technique</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="#A4.1.9">ici</a></td>						
  
                    </tr>
                    
                </tbody>
            </table>
        </div>

		<h2 class="pt-5" id ="Justification">Justification</h2><br>

		
		<h4 id="A1.1.1">A1.1.1</h4><br>
		<p>
		Ce projet a nécissité une analyse des besoins pour choisir certaines librairies, mise en forme et construction de fonction en backend.<br>
		Les besoins n'étaient pas exprimés à l'écrit mais à l'oral par mon tuteur. Une fois énoncé je notais, décortiquais ces besoins sur trello.<br>

		</p>

		
		<img class="picture rounded w-50 mx-5 px-4 h-25 "
    		 src="../../images/portefeuille/trello.png"
     		 alt="archive trello"><br><br>
		

		<h4 id="A1.1.3">A1.1.3</h4><br>

		<p>L'analyse du besoin engendre des critères minimum d'exigence. Par exemple le besoin de gestion de module exige que certains modules ne puissent être supprimés 
		selon leur liaison en BDD.</p>

		<h4 id="A1.2.2">A1.2.2</h4><br>

		<p>
		La solution retenue et ses spécifications techniques sont englobés dans trello.
		</p>

		<h4 id="A1.2.4">A1.2.4</h4><br>

		<p>Chaque fonctionnalité trello passe par la liste verify qui est en fait le moment de tester la fonctionnalité. Par example pour la recherche de patchs
		avec 3 champs possibles j'ai fais 7 tests sur des jeux de données différents. Ces commutations comprennent 3 tests avec 1 champ remplit, 
		3 tests avec 2 champs remplit , 1 test avec tous les champs remplit.</p>

		<h4 id="A1.4.1">A1.4.1</h4><br>

		<p>Je vous renvoie au contexte, environnement, déploiement. En complément voici les parties du projet sur lequelles j'ai travaillé.</p>

		<p></p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/dbs1.png"
     	alt="archive trello"><br><br>

		 <p></p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/dbs2.png"
     	alt="archive trello"><br><br>

		 <p></p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/dbs3.png"
     	alt="archive trello"><br><br>

		 <p></p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/dbs4.png"
     	alt="archive trello"><br><br>

		 <p></p>
		<img class="picture rounded w-75 "
    	src="../../images/portefeuille/dbs5.png"
     	alt="archive trello"><br><br>


		<h4 id="A1.4.2">A1.4.2</h4><br>
		<p></p>
		<h4 id="A2.3.1">A2.3.1</h4><br>
		<p></p>
		<h4 id="A2.3.2">A2.3.2</h4><br>
		<p></p>
		<h4 id="A3.2.1">A3.2.1</h4><br>
		<p></p>
		<h4 id="A3.2.2">A3.2.2</h4><br>
		<p></p>
		<h4 id="A4.1.1">A4.1.1</h4><br>
		<p></p>
		<h4 id="A4.1.2">A4.1.2</h4><br>
		<p></p>
		<h4 id="A4.1.3">A4.1.3</h4><br>
		<p></p>
		<h4 id="A4.1.4">A4.1.4</h4><br>
		<p></p>
		<h4 id="A4.1.6">A4.1.6</h4><br>
		<p></p>
		<h4 id="A4.1.7">A4.1.7</h4><br>
		<p></p>
		<h4 id="A4.1.8">A4.1.8</h4><br>
		<p></p>
		<h4 id="A4.1.9">A4.1.9</h4><br>
		<p></p>
		</p>


    </div>
</div>

	

</div>
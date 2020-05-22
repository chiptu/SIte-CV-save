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
				<a class="mx-2 " href="DmsWeb.php"> Veille technologique </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
	<div class = "container h-100 bg-white" id="doc">
		
	<br>
	
	<h1>DBS Patchs</h1>
	
	
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

				<!--Entreprise, utilite du projet pour l'entreprise, environnement, lien git + lien drive d un zip, ma partie-->
				
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
                    <tr class="text-black">
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Lien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A1.1.1</td>
                        <td>Analyse du cahier des charges d'un service à produire</td>
                        <td><a class ="ml-0 pl-0 text-dark js-scrollTo" href ="#A1.1.1">ici</a></td>

                        
                    </tr>
                    
                </tbody>
            </table>
        </div>

		<h2 class="pt-5" id ="Justification">Justification</h2><br>

		<p>
		<h4 id="A1.1.1">A1.1.1</h4><br>
		</p>


    </div>
</div>

	

</div>
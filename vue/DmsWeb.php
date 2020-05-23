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
            	<a class="ml-5 mr-2 " href="DbsPatchs.php"> DBS Patchs </a>
				<a class="mx-2 " href="DmsWeb.php"> Veille technologique </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
	<div class = "container h-100 bg-white" id="doc">
		
	<br>
	
	<h1>DMS Web</h1>
	
	
	<div class="row">
         <div class="col-12">


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
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
       		 	
                <a class="mx-2 js-scrollTo" href="#Contexte"> Sujet </a>
				<a class="mx-2 js-scrollTo" href="#Environnement"> Outils </a>
				<a class="mx-2 js-scrollTo" href="#Déploiement"> Réalisation </a>
				<a class="mx-2 js-scrollTo" href="#Compétence"> Bilan </a>
				
            	<a class="ml-5 mr-2 " href="DbsPatchs.php"> DBS Patchs </a>
				<a class="mx-2 " href="DmsWeb.php"> DMS Web </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
	<div class = "container h-100 bg-white" id="doc">
		
	<br>
	
	<h1>Veille Technologique</h1>
	
	
	<div class="row">
         <div class="col-12">


                <h2 class="pt-5" id ="Contexte">Sujet</h2><br>
                
                <p>Le sujet de ma veille technologique est AndroidStudio et ses langages de programmations (java et kotlin).<br><br>
                Le sujet est assez large car je n'étais pas sûre de vouloir un sujet précis à l'époque où on devait choisir un sujet.<br><br>
                AndroidStudio est un framework/IDE (Integrated Development Environment) développé par google qui permet de créer des applications pour les smatphones 
                Android.<br><br> Il contient l'aspect IDE avec par exemple recherche d'occurences dans le code, correcteur de syntaxe, détection d'erreur de code et même proposition de résolution.
                <br><br>En plus de cet aspect AndroidStudio met a disposition des ressources, outils qui lui donnent un côté framework comme le design graphique et sa boîte à outils, pouvoir
                virtualiser un smartphone pour tester l'application, pouvoir accéder aux données liées à l'application d'un smartphone.<br><br>

                AndroidStudio ne supporte que 2 langages qui sont java et kotlin.<br><br>

                Java est donc un langage de programmation de haut niveau 
                (à l'opposé des langages assembleurs dit de bas niveau) datant de 1995 orienté objet.<br><br>
                
                Une des particularités de java est que la compilation du code java peut être exécutée dans une 
                machine Java (JVM) en faisant abstraction du système d'exploitation.<br><br>

                Kotlin est un langage de programmation de haut niveau, orienté objet datant de 2011 supporté et mis en avant en 2015 par Google 
                qui inclura kotlin dans AndroidStudio. Kotlin est considéré comme facile à apprendre, sa syntaxe permettrait d'écrire du code optimisé, concis.<br><br>

                Kotlin permet aussi de compiler le code pour la machine virtuelle Java et JavaScript et vers plusieurs plateformes en natif.<br><br>

                Kotlin est vue par certains comme le remplaçant de java, on remarquera que le framework spring l'a aussi inclut.


                </p>
				
				<h2 class="pt-5" id ="Environnement">Outils</h2><br>

                <p> Pour faire une veille technologique et s'informer des nouveautés, actualités sur un sujet il faut des flux de données pertinent. <br>
                Ces flux doivent être assez large pour ne pas rater d'actualité mais sans englober d'information hors sujet, inutile.<br><br>
                J'ai utilisé principalement innoreader qui est un outil de filtrage de flux d'informations par tag et j'ai 
                aussi utilisé des sources d'informations plus puriels comme le journal du hacker, jesuisundev pour ma veille technologique.<br><br>
				Il m'est arrivé de faire des recherches google pour voir les news sur un sujet, google alert peut être aussi un outil pertinent, il permet de recevoir 
				une notification sur des actualités sur un sujet donné.<br><br>

				Sources: <a class="ml-0 pl-0 text-primary" href="https://www.inoreader.com/feed/https%3A%2F%2Fandroidstudio.googleblog.com%2Ffeeds%2Fposts%2Fdefault">Innoreader</a>
				<a class="ml-0 pl-0 text-primary" href="https://www.jesuisundev.com">jesuisundev</a>
				<a class="ml-0 pl-0 text-primary" href="https://www.journalduhacker.net">journalduhacker</a>
				
				</p>


				<h2 class="pt-5" id ="Déploiement">Réalisation</h2><br>

				<p>Concrètement kotlin a connu des mises à jour pour ajouter des détails techniques comme la configuration des dépendances de ses modules d'installation 
				la compatibilité avec diverses librairies, plateformes... <br> Sources : <a class="text-dark" href="https://kotlinlang.org/docs/reference/whatsnew13.html"> Kotlin 1.3 </a>
					<a class="text-dark" href="https://kotlinlang.org/docs/reference/whatsnew12.html"> Kotlin 1.2 </a> <br><br>
					
					
				Pour Java il y a un ensemble de version stable ou expérimental (JDK, JEE, J2SE, JavaSE) portant sur différents environnements avec différentes configuration comme maven
				pour Java EE ... Un site intéressant sur le monde java est infoq que vous pouvez retrouver <a class="ml-0 pl-0 text-primary" href="https://www.infoq.com/fr/java/news/">ici</a>.<br><br>
					
				Pour être franc je ne comprend rien à la technicité de ses mises à jour dans les librairies de java ou kotlin. C'est pour cela que je m'étais dis autant
				faire quelque chose de concret comme une application Android codé en java et une codé en kotlin et faire la différence.<br><br>
				Pour des raisons multiples ce travaille n'est pas fait même si j'avais bien avancé sur ma version java dont vous pouvez voir le code 
				<a class="ml-0 pl-0 text-primary" href="https://github.com/chiptu/AndroidBarbu">ici</a> et un brouillon de documentation 
				<a class="ml-0 pl-0 text-primary" href="https://docs.google.com/document/d/1OwTGYwe5f7_lGe8BOG9r-l5jOTMK2ydoYXNR9EdckHo/edit?usp=sharing">là</a>
				
				</p>
				
				
                <h2 class="pt-5" id ="Compétence">Bilan</h2><br>

				<p>Java voit donc un concurrent arrivé qui est souvent décrit comme la relève et est promu par Google. Android
				Studio et l'inclusion de kotlin dans celui-ci est un exemple du soutien de google au langage kotlin. <br><br>
				Kotlin et particulièrement java ont régulièrement des mises à jour pour l'interopérabilités entre tous types de plateformes (virtualisation, compilation...).
				Ces mises à jour interne à leur librairie sont complexes et peu lisible.<br><br>
				Faire deux applications android l'une en java et l'autre en kotlin prend plus de temps que j'imaginais et comprend tout un tas de blocage de configurations, emulations...</p>

                



    </div>
</div>

	

</div>
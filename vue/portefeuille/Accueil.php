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
       		 	
                <a class="mx-2" href="Accueil.php"> Accueil </a>
				
				<a class="mx-2 ml-5 " href="DmsWeb.php"> DMS Web </a>
            	<a class="mx-2  " href="DbsPatchs.php"> DBS Patchs </a>
				<a class="mx-2 " href="Veille.php"> Veille technologique </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
	
	<div class="row">
         <div class="col-12">

		    <div class = "container bg-white" id="doc">
		
		    <br>
		
		    <h1>Portefeuille</h1>

            
            <br><br>
            <div class="tab-pane mt-1 mx-5 px-5">
            <table class="table table-striped table-sm border datatable mx-5 " id="tablePatch">
                <thead>
                    <tr class="text-black bg-secondary">
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Lien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DBS Patchs</td>
                        <td>Projet de stage de seconde année</td>
                        <td><a class ="ml-0 pl-0 text-primary " href ="DbsPatchs.php">ici</a></td>						
                    </tr>
					
                    <tr>
                        <td>DMS Web</td>
                        <td>Projet de stage de seconde année</td>
                        <td><a class ="ml-0 pl-0 text-primary " href ="DbsWeb.php">ici</a></td>						
                    </tr>

                    

                    <tr>
                        <td>Veille Technologique</td>
                        <td>Sujet: AndroidStudio et ses langages (java et kotlin)</td>
                        <td><a class ="ml-0 pl-0 text-primary " href ="Veille.php">ici</a></td>						
                    </tr>

                    
                    
                </tbody>
            </table>
        </div>
                <br><br>
        <p>Voici le tableau des competences de chaque projet, vous le retrouverez sur la page de chaque projet également.</p><br><br>

        <h3><u>DBS Patchs :</h3></u><br>

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
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A1.1.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.1.3</td>
                        <td class ="text-white">Etude des exigences liées à la qualité attendu attendue d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A1.1.3">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A1.2.2</td>
                        <td>Rédaction des spécifications techniques de la solution retenue</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A1.2.2">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.2.4</td>
                        <td class ="text-white">Détermination des tests nécessaires à la validation d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A1.2.4">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A1.4.1</td>
                        <td>Participation à un projet</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A1.4.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.4.2</td>
                        <td class ="text-white">Evaluation des indicateurs de suivi d'un projet et justification des écarts</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A1.4.2">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A2.3.1</td>
                        <td>Identification, qualification et évaluation d'un problème</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A2.3.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A2.3.2</td>
                        <td class ="text-white">Proposition d'amélioration d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A2.3.2">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A3.2.1</td>
                        <td>Installation et configuration d'éléments d'infrastructure</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A3.2.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A3.2.2</td>
                        <td class ="text-white">Remplacement ou mise à jour d'éléments</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A3.2.2">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.1</td>
                        <td>Proposition d'une solution applicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.2</td>
                        <td class ="text-white">Conception ou adaptation de l'interface utilisateur d'une solution apllicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.2">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.3</td>
                        <td>Conception ou adaptation d'une base de données</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.3">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.4</td>
                        <td class ="text-white">Définition des caractéristiques d'une solution applicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.4">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.6</td>
                        <td>Gestion d'environnements de développement et de test</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.6">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.7</td>
                        <td class ="text-white">Développement, utilisation ou adaptation de composants logiciels</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.7">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.1.8</td>
                        <td>Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.8">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.9</td>
                        <td class ="text-white">Rédaction d'une documentation technique</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DbsPatchs.php#A4.1.9">ici</a></td>						
  
                    </tr>
                    
                </tbody>
            </table>
        </div><br>

        <h3><u>DMS Web :</h3></u><br>

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
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A1.1.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A1.1.3</td>
                        <td class ="text-white">Etude des exigences liées à la qualité attendu attendue d'un service</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A1.1.3">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td>A1.4.1</td>
                        <td>Participation à un projet</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A1.4.1">ici</a></td>						
  
                    </tr>
					
					<tr class="bg-dark">
                        <td class ="text-white">A2.3.1</td>
                        <td class ="text-white">Identification, qualification et évaluation d'un problème</td>
                        <td ><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A2.3.1">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td>A3.2.1</td>
                        <td>Installation et configuration d'éléments d'infrastructure</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A3.2.1">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A3.2.2</td>
                        <td class ="text-white">Remplacement ou mise à jour d'éléments</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A3.2.2">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td >A4.1.2</td>
                        <td >Conception ou adaptation de l'interface utilisateur d'une solution aplicative</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A4.1.2">ici</a></td>						
  
                    </tr>
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.3</td>
                        <td class ="text-white">Conception ou adaptation d'une base de données</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A4.1.3">ici</a></td>						
  
                    </tr>
					
					<tr>
                        <td>A4.1.6</td>
                        <td>Gestion d'environnements de développement et de test</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A4.1.6">ici</a></td>						
  
                    </tr>
					
					<tr class="bg-dark">
                        <td class ="text-white">A4.1.8</td>
                        <td class ="text-white">Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A4.1.8">ici</a></td>						
  
                    </tr>
					<tr>
                        <td>A4.2.2</td>
                        <td>Adaptation d'une solution applicative aux évolutions de ses composants</td>
                        <td><a class ="ml-0 pl-0 text-primary js-scrollTo" href ="DmsWeb.php#A4.2.2">ici</a></td>						
  
                    </tr>
                    
                </tbody>
            </table>
        </div>

        

        </div>
    </div>
</div>
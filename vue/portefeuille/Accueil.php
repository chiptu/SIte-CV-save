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
                        <td>Veille technologique</td>
                        <td><a class ="ml-0 pl-0 text-primary " href ="Veille.php">ici</a></td>						
                    </tr>
                    
                </tbody>
            </table>
        </div>
                


        </div>
    </div>
</div>
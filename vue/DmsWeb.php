<!DOCTYPE html>
<html lang="fr">
	

<script src="../style/jquery-3.4.1.js"></script>
		

		<link href="../style/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
		
		<link href="../style/layout.css" rel="stylesheet">
		
		
		<script src="../style/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>


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










	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navbarNavAltMarkup2">
    	
       		 <div class="navbar-nav mx-auto">
       		 	
                
            	<a class="mx-2" href="DbsPatchs.php"> DBS Patchs </a>
                
                
				
				
        	</div>
    	</div>
	</nav>
	
	
	<div class = "container h-100 bg-white" id="doc">
		
	<br>
	
	<h1>DMS Web</h1>
	
	
	<div class="row">
    <div class="col-12">
        
        <div class="tab-pane mt-1">
            <table class="table table-striped table-sm border datatable" id="tablePatch">
                <thead>
                    <tr class="text-black">
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Coché</th>
                        <th scope="col">Projet</th>
                        <th scope="col">Lien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A1.1.1</td>
                        <td>Analyse du cahier des charges d'un service à produire</td>
                        <td>Oui</td>
                        <td>DBS Patchs</td>
                        <td>ici</td>

                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

	

</div>
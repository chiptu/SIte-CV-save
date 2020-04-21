
<!DOCTYPE html>
<html lang="fr " >
	<head>

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

		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

		<title>Site portfolio Le Guillou Alexandre BTS SIO 2nde année </title>

</head>

<body>

	

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		
    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navDocTravaux" aria-controls="navDocTravaux" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
    		
    	<div class="collapse navbar-collapse" id="navDocTravaux">
    	
       		 <div class="navbar-nav mx-auto">
       		 	
       		 	<a class="js-scrollTo" href="#Intro">Introduction</a><br>
       		 	<a class="js-scrollTo" href="#1">C#</a><br>
       		 	<!--<a class="js-scrollTo" href="#2">Pythontest</a><br>
       		 	<a class="js-scrollTo" href="#3">Java</a><br>-->
				<a class="js-scrollTo" href="#Liens">Liens</a><br>
       		 	<a href="https://leguilloualexandre.fr#Projets">  Revenir aux projets </a>
       		 	
       		 	
		
	</nav>
	
		</div>

	</div>

<div class = "row">	
	
	
	<div class ="col-12">


		<div class = "container bg-white h-100" id="doc">
	
			<br>


			<h1>Petits travaux</h1><br><br><br>

			<h2 class="pt-5" id ="Intro">Introduction</h2><br>
				<p>Je regroupe ici différents travaux personnels ou scolaires issuent de différents langages, environnements. 
				Ces travaux ne sont pas forcément codés et commentés proprement, certains datent un peu . </p>

			<h2 class="pt-5" id ="1">Application windows en C#</h2><br>
			<p> C# est un langage de programmation orienté objet, développé par microsoft et ressemblant au langage java. Il permet entre autres de développer des applications web et windows dans l'environnement .NET . </p><br>
			<p> J'ai eu l'occasion de faire en C# dans l'environnement .NET avec l'IDE visual studio une application windows qui peut envoyer des mails avec un registre de contacts et de serveurs smtp </p><br>



			<img class="picture m-4 p-4 w-75 rounded"
    		src="../images/doc/ImgTravaux/MailDesign.PNG"
     		alt="Design Application windows envoie mail "><br>

			<p> L'application permet de modifier , supprimer , ajouter des contacts et serveurs.</p>

			<img class="picture m-4 p-4 w-75 mt-0 pt-0 rounded"
    		 src="../images/doc/ImgTravaux/MailModif.PNG"
     		 alt="Design gestion contact"><br>

			 <img class="picture m-4 p-4 w-75 rounded"
    		 src="../images/doc/ImgTravaux/MailEnregistrer.PNG"
     		 alt="Design gestion contact"><br>

			<img class="picture m-4 p-4 w-75 rounded"
    		 src="../images/doc/ImgTravaux/MailServeur.PNG"
     		 alt="Design gestion serveur"><br>

			  <img class="picture m-4 p-4 w-75 rounded"
    		 src="../images/doc/ImgTravaux/mailIDE.PNG"
     		 alt="Design gestion serveur"><br>

			  <p> Comme vous pouvez le voir sur la dernière image ce petit projet m'a aussi permis de décourvrir Visual Studio et l'environnement de développement .NET . Pour accéder au code cliquez 
			  <a id ="lien"class="text-primary ml-0" href="https://github.com/chiptu/MailC-">ici</a></p>
				
			<!--<h2 class="pt-5" id ="2">Jeux en Python</h2><br>
			<p> Python est un langage de programmation apprécié des développeurs pour sa simplicité de syntax et est notamment utilisé dans le big data et l'ia.  </p><br> -->

			<h2 class="pt-5" id ="2">Liens</h2><br>
			<p><a id ="Liens"class="text-primary ml-0" href="https://github.com/chiptu/MailC-">Application windows en C#</a><br><br><br><br><br><br><br><br><br><br></p>

		</div>
	
	</div>
</div>

<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	
	<link href="/style/layout.css" rel="stylesheet">

</head>


<h1>Erreur 404 </h1> <br> <h1> La ressource n'a pas été trouvé. En revanche un meme sauvage a été trouvé.</h1>
<br><br>
<div id="meme">



</div>





<script>

function getRandomInt(max) 

	{
	  return Math.floor(Math.random() * Math.floor(max));
	}


//window.alert() Pour print;


var rand = getRandomInt(11);



if (rand==0)
{
	var nom_img = "trap.jpg"
}
if (rand==1)
{
	var nom_img = "terminator.jpg"
}
if (rand==2)
{
	var nom_img = "link.png"
}
if (rand==3)
{
	var nom_img = "dog.jpg"
}

if (rand==4)
{
	var nom_img = "stackoverflow.jpg"
}

if (rand==5)
{
	var nom_img = "momie.jpg"
}

if (rand==6)
{
	var nom_img = "bubz.gif"
}

if (rand==7)
{
	var nom_img = "singe.gif"
}

if (rand==8)
{
	var nom_img = "raton.gif"
}

if (rand==9)
{
	var nom_img = "javascript.gif"
}

if (rand==10)
{
	var nom_img = "bebe.gif"
}

var block = document.getElementById("meme");

/// Pour les gifs un petit texte

if (rand==6)
{
	block.innerHTML += '<h2>Quand je réalise que j’ai oublié de commit ma modif en production</h2><br>';
}

if (rand==7)
{
	block.innerHTML += '<h2>Quand le chef nous présente au client à travers la vitre de l open space</h2><br>';
}

if (rand==8)
{
	block.innerHTML += '<h2>Quand on me donne l accès root</h2> <br>';
}

if (rand==9)
{
	block.innerHTML += '<h2>Quand j’entends « JavaScript c’est du Java mais pour le web »</h2> <br>';
}

if (rand==10)
{
	block.innerHTML += '<h2>Quand je pars prendre un café et que je me rappelle que je n ai pas verrouillé mon poste</h2> <br>';
}


var img = document.createElement("img");

img.src = "/images/404/"+nom_img;




block.appendChild(img);




</script>

<br>
<br>

<a href="https://www.leguilloualexandre.fr"> Revenir au site </a>

<a href="https://www.leguilloualexandre.fr/vue/404.php"> Charger un autre meme </a>


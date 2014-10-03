<!doctype html><html lang="fr">

<head>
<meta charset="utf-8">
<title>Avis - MWE évaluation des enseignements</title>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="grid.css">
<link rel="stylesheet" href="style.css">
</head>

<body>

	<!--- HEADER --->

	<?php include('header.php');?>
	
	
	<div id="wrapper" class="clearfix">
		<div class="container_8">
		
		<!--- MENU DE NAVIGATION ENTRE LES ENSEIGNEMENTS --->
		
			<nav id="side-nav" class="grid_2">
				<h2>Matières</h2>
				<ul>
					<li>matière1</li><li>
					matière2</li><li>
					matière3</li><li>
					matière4</li><li>
					matière5</li><li>
					matière6</li>
				</ul>
			</nav>
		
		<!--- VUE DES RESULTATS -->
		
			<div id="resultats-container" class="grid_6">
				<section id="resultats-resume">
					<h2>Résumé des avis</h2>
					<div id="commentaires-quantitatifs">
						<p class="intitule">Appréciation générale <img src="etoile-valide.png" alt="Etoile de notation sélectionnée"><img src="etoile-non-valide.png" alt="Etoile de notation non sélectionnée"></p>
						<p class="intitule">Pertinence du contenu du cours</p>
						<p class="intitule">Pédagogie</p>
						<p class="intitule">Clarté et organisation</p>
						<p class="intitule">Animation du cours</p>
						<p class="intitule">Volume horaire et positionnement dans l'année</p>
					</div><!--Fin de:commentaires-quantitatifs-->
				</section><!--Fin de:resultats-resume-->
				
				<section id="resultats-detail">
					<h2>Tous les avis</h2>
					<article>
						<h3>Nom de l'étudiant</h3>
						<div id="commentaires-quantitatifs">
							<p class="intitule">Appréciation générale</p>
							<p class="intitule">Pertinence du contenu du cours</p>
							<p class="intitule">Pédagogie</p>
							<p class="intitule">Clarté et organisation</p>
							<p class="intitule">Animation du cours</p>
							<p class="intitule">Volume horaire et positionnement dans l'année</p>
						</div><!--Fin de:commentaires-quantitatifs-->
						<div id="commentaires_textuels">
							<table>
								<tr>
									<th>Commentaires positifs</th>
									<th>Commentaires négatifs</th>
								</tr>
								<tr>
								<td>test positif</td>
								<td>test négatif</td>
								</tr>
							</table>
						</div><!--Fin de:commentaires_textuels-->
					</article>
				</section><!--Fin de: resultats-detail-->
			
			</div><!--Fin de: resultats-container-->
		</div><!--Fin de: container_8-->
	</div><!--Fin de: wrapper-->
	
	
	<!--- FOOTER --->
	
	<?php include('footer.php');?>
	
</body>
</html>
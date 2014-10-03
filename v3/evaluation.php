<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="grid.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Dispositif d'évaluation des enseignements Master Web Editorial</title>
	</head>

<body>
<!-- En-tête de page-->
	<?php include('header.php');?>
<!-- Fin d'en-tête de page-->
	
<div class="clearfix">
		<div class="container_8">

		<!-- Menu de navigation par matière à gauche -->

					<nav class="grid_2" id="menu-matieres">
						<h2>Matières</h2>
						<ul>
							<li>
							Matière 1
							</li>
							<li>
							Matière 2
							</li>
							<li>
							Matière 3
							</li>
							<li>
							Matière 4
							</li>
							<li>
							Matière 5
							</li>
						</ul>
					</nav>

	<!-- Fin de menu de navigation par matière à gauche -->
	
	<!-- Formulaire  -->

			<div id="evaluation" class="grid_6">
					<form id="formulaire" method="post" action="traitement.php">
							<h2>Titre de rubrique</h2>
							<div id="notes-echelle">
								<p>
									<label class="titre" for="question1">Appréciation générale de l’UE</label>
									<input type="radio" name="question1" id="question1" value="1" />
								</p>
								<p>
									<label class="titre" for="question2">Pertinence du contenu du cours</label>
									<input type="radio" name="question2" id="question2" value="2" />
								</p>
								
								<p>
									<label class="titre" for="question3">Pédagogie</label>
									<input type="radio" name="question3" id="question3" value="3" />
								</p>
							
								<p>
									<label class="titre" for="question4">Clarté et organisation</label>
									<input type="radio" name="question4" id="question4" value="4" />
								</p>
								
								<p>
									<label class="titre" for="question5">Animation du cours</label>
									<input type="radio" name="question5" id="question5" value="5" />
								</p>
								<p>
									<label class="titre" for="question6">Volume horaire et positionnement dans l’année</label>
									<input type="radio" name="question6" id="question6" value="6" />
								</p>

								<div id="commentaires">
									<h3>Commentaires*</h3>
									<table>
										<tr>
											<th><label class="titre" for="question5">Commentaire libre</label>
												<textarea name="question5" id="question5" rows="3" cols="35"></textarea>
											</th>
											<th><label class="titre" for="question6">Pistes d’améliorations</label>
												<textarea name="question6" id="question6" rows="3" cols="35"></textarea>
											</th>
										</tr>
									</table>
								</div>
								</div>
									<p id="bouton">
  										<input type="submit" value="Suivant >>  1/4" />
									</p>
								</div>

							</div>
					</form>
			</div>
		</div>

	<!-- Fin de formulaire  -->

</div>


<!-- Pied de page -->

	<?php include('footer.php');?>

<!-- Fin de pied de page -->

</body>
</html>

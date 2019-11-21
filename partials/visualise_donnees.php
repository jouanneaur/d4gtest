<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>


    <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D4G2019</title>
</head>
<body>
	<div class="resultat"> 
		<p>Résultat : </p> 
		<?php
		$bdd = new PDO('mysql:host=localhost;dbname=green;charset=utf8', 'root', 'team29');	
		$nam = isset($_POST['nom']) ? $_POST['nom'] : NULL ;
		$pre = isset($_POST['prenom']) ? $_POST['prenom'] : NULL ;
		$requete = "Select nom, prenom From locat where nom like '%". $nam ."%' and prenom like '%". $pre ."%'";	
		$reponse5 = $bdd->query($requete);
		?>
		
		<?php	
	    while ($donnees5 = $reponse5->fetch())
	    {
		?>
	       <p value= <?php echo $donnees5['nom'],$donnees5['prenom'];?> > <?php echo $donnees5['nom'],' ',$donnees5['prenom']?></p>
		<?php
	    }
		?>
	</div>
</body>

</html>

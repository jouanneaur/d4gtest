<!DOCTYPE HTML>
<html>
	<head>
		<title>GREEN IT</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
		<link rel="stylesheet" href='styles.css' type="text/css"/>
	</head>
	
	<body>
		<h1>Green IT</h1>
			<div class="recherche">
				<p>Oui</p>
				<select type="text" name="promotion"  />
				<?php
				$bdd = new PDO('mysql:host=localhost;dbname=greenit;charset=utf8', 'root', '');
				$reponse1 = $bdd->query("Select distinct `nom` From `informations`")
				?>
				<option value=''></option>
				<?php
	            while ($donnees1 = $reponse1->fetch())
	            {
				?>
	               <option value= <?php echo $donnees1['nom'];?> > <?php echo $donnees1['nom']; ?></option>
				<?php
	            }
				?>
		</body>
</html>
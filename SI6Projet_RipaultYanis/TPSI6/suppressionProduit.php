<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Suppression</title>
	</head>
<body>
	<link href="site.css" rel="stylesheet">
<form method="POST" action ="ScriptSuppression.php" id="formulaire" name="produit">
	<fieldset>
		<legend id ="group">Suppression Produit</legend></br>
		<label for ="prd_id"><span>ID Produit</span></label>:
		<select name="produit" id="prod"></br></br>
		<?php
		require("Connexion.php");
		$cnx=Connexion($host,$dbname,$user,$pass);
		$req="select * from Produit;";
		$result = $cnx->query($req);
			while($elem=$result->fetch(PDO::FETCH_ASSOC)){
				echo '<option value ="'.$elem['prd_id'].'">'.$elem['prd_nom'].'</option>';
				}
	?>
		
		</select>
		</br>
	<input type="submit" value="Supprimer Produit" id="envoyer" name="env"/>
</form>
</body>
</html>


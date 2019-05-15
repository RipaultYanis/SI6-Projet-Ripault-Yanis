<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Liste de Produit</title>
	</head>
</html>
<body>


	<h1>Liste des Produit</h1>
		<link href="site.css" rel="stylesheet">
	<label>Categorie :</label>
	<select name = "categorie" id ="categorie">

<?php
require("Connexion.php");
try{
		$cnx=Connexion($host,$dbname,$user,$pass);
		$req="select distinct prd_cat from produit";
		$result = $cnx->query($req);
		
		
		while($elem=$result->fetch(PDO::FETCH_ASSOC)){
			echo '<option value ="'.$elem['prd_cat'].'">'.$elem['prd_cat'].'</option>';
			}
		
		
	}
catch(PDOException $e){
	die('Error :'.$e->getMessage());
}
	?>
</select>
<p><a href ='Menu.html'><input type='button' value ='Retour au Menu'></p>
</body>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Suppression d'un produit</title>
	</head>
</html>
<body>
<link href="site.css" rel="stylesheet">
<?php
require ("Connexion.php");
	try{
		$cnx=Connexion($host,$dbname,$user,$pass);
		$req="delete from Produit where prd_id=".$_POST['produit'].";";
		$result = $cnx->query($req);
		echo "Votre Produit a bien été supprimé" ;
		echo "<p><a href ='Menu.html'><input type='button' value ='Retour au Menu'></p>";
	}
	catch(PDOException $e){
		die('Error: '.$e->getMessage());
	}
?>

</body>


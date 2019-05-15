<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajout d'un produit</title>
	</head>
</html>
<body>
<link href="site.css" rel="stylesheet">

<?php
require("Connexion.php");



try{
	
	$cnx=Connexion($host,$dbname,$user,$pass);
	
	if(isset($_POST['prd_id']) && isset($_POST['prd_nom']) && isset($_POST['prd_qte']) && isset($_POST['prd_pu']) && isset($_POST['prd_cat'])){
		$id=$_POST['prd_id'];
		$nom=$_POST['prd_nom'];
		$qte=$_POST['prd_qte'];
		$pu=$_POST['prd_pu'];
		$cat=$_POST['prd_cat'];
		
		$req="insert into Produit(prd_id,prd_nom,prd_qte,prd_pu,prd_cat) Values($id,'$nom',$qte,$pu,'$cat')";
		
		$cnx->exec($req);
		echo 'le Produit : '.$id.' a bien été ajouté !';
		echo "<p><a href ='Menu.html'><input type='button' value ='Retour au Menu'></p>";
	}
}
catch(PDOException $e){
	die('Error :'.$e->getMessage());
}
		
?>
</body>

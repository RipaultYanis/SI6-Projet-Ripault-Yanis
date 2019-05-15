<?php
session_start();
$user="yanisR";
$pass="azerty";
$dbname="inventaire";
$host="localhost";

function connexion($host,$dbname,$user,$password){
	try{
		$connect=new PDO('pgsql:host='.$host.';dbname='.$dbname,$user,"azerty");
			}
	catch(PDOException $e){
		die('Erreur:'.$e->getMessage());
	}
	return $connect;
}

if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'yanisR';
    $db_password = 'azerty';
    $db_name     = 'inventaire';
    $db_host     = 'localhost';
    $dsn="pgsql:host=localhost;port=5432;dbname=inventaire";
    
    $dbh = new PDO($dsn, $db_username, $db_password);
    
   
    $username = $_POST['username']; 
    $password =$_POST['password'];
    
    if($username !== "" and $password !== ""){
		if($username==$db_username and $password  == $db_password){
			header('Location:Menu.html');
		}
		else {
		echo "Mot de passe ou Login incorrect";
		}
	}

}

 // fermer la connexion
?>

		

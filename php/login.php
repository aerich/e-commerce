<?php
	/*
	// connexion dans la base de données
	$link = mysql_connect("localhost", "root", "")
    	or die("Impossible de se connecter : " . mysql_error());
	mysql_select_db("nomDeMaBase");
	
	$result = mysql_query("SELECT login, pass, id FROM membres WHERE login = '$_POST[login]' AND pass = '$_POST[pass]'");
	$membre = mysql_fetch_assoc($result);
	*/
	session_start();
	include_once 'dbConnect.php';
	$sql = "SELECT id, pseudo, mail, mdp FROM membres WHERE pseudo = '".$_POST['login']."' AND mdp = '".$_POST['pass']."'";
	$result = mysql_query($sql);
	//echo $sql;
	//echo $result;
	$membre = mysql_fetch_assoc($result);
	  define("PSEUDO", $membre['pseudo']);
		define("MDP", $membre['mdp']);
	if(($_POST['login']==PSEUDO)&&($_POST['pass']==MDP))
	//if(($_POST[login]=="test")&&($_POST[pass]=="ajax"))
	{
		//session_start();
		
		$_SESSION['pseudo'] = PSEUDO;
		$_SESSION['mdp'] = MDP;
		$_SESSION['panier']=null;
		header("Location: ../index.php"); 
		//setcookie("id",$membre['id']); // genere un cookie contenant l'id du membre
		//setcookie("pseudo",$membre['pseudo']); // genere un cookie contenant le login du membre		
		
		echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
	}
	else 
	{
		echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
	}
?>

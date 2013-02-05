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
	$mdp_hash = hash_hmac ("sha256",$_POST['pass'],$_POST['login'],true);
	$sql = "SELECT id, pseudo, mail, mdp, admin FROM membres WHERE pseudo = '".$_POST['login']."' AND mdp = '".$mdp_hash."'";
	$result = mysql_query($sql);
	//echo $sql;
	//echo $result;
	$membre = mysql_fetch_assoc($result);
	  define("PSEUDO", $membre['pseudo']);
		define("MDP", $membre['mdp']);
	if( is_array($membre))
	{
		//session_start();
		
		$_SESSION['pseudo'] = PSEUDO;
		$_SESSION['mdp'] = MDP;
		$_SESSION['id_user']=  $membre['id'];

		if($membre['admin']==1)
		{
		    $_SESSION['admin']=true;
		    header("Location: ../gestion/backend.php");
		}
		else
		{
		    header("Location: ../index.php"); 
		}
						
		//setcookie("id",$membre['id']); // genere un cookie contenant l'id du membre
		//setcookie("pseudo",$membre['pseudo']); // genere un cookie contenant le login du membre		
		
		
	}
	else 
	{
		header("Location: ../index.php"); 
	}
?>

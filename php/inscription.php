<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Refresh" content="5; url=../index.php">
<title>Celine... Photographe</title>
<link rel="stylesheet" href="../styles.css" type="text/css" />
<link href="jquery-ui.css" rel="../stylesheet" type="text/css"/>
            
<script type="text/javascript" src="../js/jquery.js"></script>

<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript" src="../js/superfish.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript" src="../js/custom.js"></script>

<script type="text/javascript" src="../js/verif.js"></script>
<script type="text/javascript" src="../js/login.js"></script>
<script type="text/javascript" src="../js/nav.js"></script>
<script type="text/javascript" src="../js/animations.js"></script> 

<?php
      
      include_once './dbConnect.php';
      
      $pseudo = $_POST['pseudo'];
      $mdp = $_POST['password'];
      $mail = $_POST['mail'];
      $_POST['naissance'];
  
      
      $query = 'SELECT * FROM `membres` WHERE pseudo="'.$pseudo.'" OR mail="'.$mail.'"';
      //echo $query;
      $result = mysql_query($query);
      $adresse=htmlentities($_POST['mail']);  
      $messEmail="";
      $emailOK=filter_var($adresse, FILTER_VALIDATE_EMAIL);
      if(!$emailOK)  
	{
	$messEmail='<h2>Votre adresse e-mail n\'est pas valide.</h2>';
	}
      $existe = null;
      if(mysql_num_rows($result)>=1)
      {
	   $existe = true;
	   echo '<h1>Inscription Impossible</h1><h2>Un utilisateur avec le même identifiant existe déjà.</h2>';
	   echo $messEmail;
      }
      else
      {
	if($emailOK)
	{
	$existe = false;
	$mdp_hash = hash_hmac ("sha256",$mdp,$pseudo,true);
	$query = 'INSERT INTO `membres`(`id`, `pseudo`, `mail`, `mdp`) VALUES (NULL,"'.$pseudo.'","'.$mail.'","'.$mdp_hash.'")';
	$result = mysql_query($query);
	var_dump($result);
	echo '<h1>Inscription Réussite</h1>';
	}
	else
	{
	    echo '<h1>Inscription Impossible</h1>'.$messEmail;
	}
	
	  
      }
      
	echo '<h3>Vous allez être redirigé dans quelques instants</h3>';
      
      //var_dump($existe);
?> 

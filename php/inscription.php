<?php

      include_once './dbConnect.php';
      
      $pseudo = $_POST['pseudo'];
      $mdp = $_POST['password'];
      $mail = $_POST['mail'];
      $_POST['naissance'];
  
      
      $query = 'SELECT * FROM `membres` WHERE pseudo="'.$pseudo.'" OR mail="'.$mail.'"';
      //echo $query;
      $result = mysql_query($query);

      $existe = null;
      if(mysql_num_rows($result)>=1)
      {
	   $existe = true;
      }
      else
      {
	$existe = false;
	$mdp_hash = hash_hmac ("sha256",$mdp,$pseudo,true);
	$query = 'INSERT INTO `membres`(`id`, `pseudo`, `mail`, `mdp`) VALUES (NULL,"'.$pseudo.'","'.$mail.'","'.$mdp_hash.'")';
	$result = mysql_query($query);
	var_dump($result);
      }
      
      var_dump($existe);
?> 

<?php

      include_once './dbConnect.php';
      
      $pseudo = $_POST['pseudo'];
      $mdp = $_POST['password'];
      $mail = $_POST['mail'];
      $_POST['naissance'];
  
      
      $query = 'SELECT * FROM `membres` WHERE `pseudo`=\"'.$pseudo.'\" OR `mail`="'.$mail.'"';
      
      $result = mysql_query($query);

      $existe = false;
      if(mysql_num_rows($result)>=1)
      {
	   $existe = true;
      }
      else
      {
	$existe = false;
	$mdp_hash = hash_hmac ("sha512",$mdp,$pseudo,true);
	$query = 'INSERT INTO `membres`(`id`, `pseudo`, `mail`, `mdp`) VALUES (NULL,"'.$pseudo.'","'.$mail.'","'.$mdp_hash.'")';
      }
?> 
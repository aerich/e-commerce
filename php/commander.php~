<?php


  session_start();

  

  /*$panier = "";
  foreach ($_SESSION['panier'] as $key => $value)
  {
	$panier = $panier.$value['id'].",".$value['qte'].";";  // Affiche l'id et la quantité
  }*/
  
  $panier=var_export($_SESSION['panier'],true);
  include 'dbConnect.php';
  $sql = "INSERT INTO `paniers`(`id`, `articles`) VALUES (NULL,\"".$panier."\")";
  //$sql = mysql_real_escape_string($sql);
  $result1 = mysql_query($sql);
  $numPanier = mysql_insert_id();
  $sql = "INSERT INTO `commandes`(`id`, `id_membre`, `id_panier`, `Confirme`) VALUES (NULL,".$_SESSION['id_user'].",".$numPanier.",0)";
  $result2 = mysql_query($sql);
  $numerotSuivit=mysql_insert_id();
  
  $message=""; 
  
  if($result1&&$result2)
  {
      $message = "Votre commande à bien été prise en compte.</br>Votre numérot de suivit: <b>".$numerotSuivit."</b>";
      include 'panierVider.php';
  }
  else
  {	
      $message = "Erreur durant la transaction";
  }
?>

<div  style="opacity:1;filter:alpha(opacity=100);">
  <div style="text-align:center;">
  <h1>Commande traitée</h1>
  </div>
  
  <div style="padding:15px;color:black;">
  <span><?php echo $message;?></span>
  </div>
</div>
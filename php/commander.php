<?php


  session_start();

  echo $_SESSION['id_user']."\n";

  $panier = "";
  foreach ($_SESSION['panier'] as $key => $value) 
  {
	$panier = $panier.$value['id'].",".$value['qte'].";";  // Affiche l'id et la quantité
  }

  $sql = "INSERT INTO `paniers`(`id`, `articles`) VALUES (NULL,\"".$panier."\")";
  $result = mysql_query($sql);
  echo $result;
  $sql = "INSERT INTO `commandes`(`id`, `id_membre`, `id_panier`) VALUES (NULL,\'1\',\'1\')";
  $result = mysql_query($sql);
  $numerotSuivit="???".var_dump($result);

?>

<div  style="opacity:1;filter:alpha(opacity=100);">
  <div style="text-align:center;">
  <h1>Commande traitée</h1>
  </div>

  <div style="padding:15px;color:black;">
  <span>Votre numérot de suivit: <?php echo $numerotSuivit; ?> </span>
  </div>
</div>
<?php
if(session_id() == ""){
     session_start();}
?>
<script>
//vitesse de l'annimation
var vitesseSlide='slow';
//largeur d'une image
var tailleMoveSlide=400;
//fonction gérant l'annimation 
var tour=false;
function anim()
{
    $('#bouton').animate({
    opacity: 0.25    
  }, 1500);
    
    $('#bouton').animate({
    opacity: 1    
  }, 1500);
   
    
}

//on lance l'annimation en boucle toute les secondes (1000 miliseconde)


</script> 

<div  style="opacity:1;filter:alpha(opacity=100);">
<table style="margin: auto;" cellspacing="10">
   <caption></br><h1>Bon de commande</h1></br></caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th style="text-align: center;">Réference</th>
           <th style="text-align: center;">Description</th>
	   <th style="text-align: center;">Quantité</th>
           <th style="text-align: center;">Prix unitaire</th>
	   <th style="text-align: center;">Prix</th>
       </tr>
   </thead>

   <tfoot> <!-- Pied de tableau -->
       <tr>
           <th>Total hors TVA: <?php echo $total=$_SESSION['total'];?></th>
           <th>TVA 21%: <?php echo $tva=floatval($_SESSION['total'])*0.21;?> €</th>
	   <th></th>
	   <th>Ristourne: 0 €</th>
           <th>Montant: <?php echo ($total+$tva);?> €</th>
       </tr>
   </tfoot>

   <tbody> <!-- Corps du tableau -->
   

<?php
		
		
		foreach ($_SESSION['panier'] as $key => $value) 
		{
		      echo '<tr>';
		      echo '<td style="text-align: center;color:black;"><b>'.$value['ref'].'</b></td>';
		      echo '<td style="text-align: center;color:black;"><b>'.$value['description'].'</b></td>';
		      echo '<td style="text-align: center;color:black;"><b>'.$value['qte'].'</b></td>';
		      echo '<td style="text-align: center;color:black;"><b>'.$value['prix'].'</b></td>';
		      echo '<td style="text-align: center;color:black;"><b>'.floatval($value['qte'])*floatval($value['prix']).'</b></td>';
		      echo '</tr>'; 
		}

?> 
</tbody>
</table>
<?php if(isset($_SESSION['id_user']))
      {echo '<div class="curseurMain" id="bouton" style="display:inline-block;border-radius: 10px;background-color:#666666;height: 30px;padding-top: 10px;padding-right:10px;padding-left:10px; padding-bottom: 0px;float: right;margin-right:50px;margin-top:10px;" onclick="validerCommande();"><h4 style="">Commander</h4></div>';}

else{echo '<h3 style="color:red;margin-left:10px;">Vous devez être connecté pour pouvoir commander.</h3>
<br/><h3 style="color:red;margin-left:10px;">Si vous n\'êtes pas inscrit, inscrivez vous via le menu inscription.</h3>';}

?>

</div>
<div class="curseurMain" id="bouton2" style="display:inline-block;border-radius: 10px;background-color:#666666;height: 30px;padding-top: 10px;padding-right:10px;padding-left:10px; padding-bottom: 0px;float: right;margin-right:50px;margin-top:10px;" onclick="portfolio();"><h4 style="">Retourner à la gallerie</h4></div>

</br>
<script>setInterval('anim();',1000);</script>
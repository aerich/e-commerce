<?php
include_once './protect.php';
?>
<html>
<head>
<title>Gestion des commandes</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../styles.css" type="text/css" />
<!--
  Définition des styles de la page
  -->
<style type="text/css">

    body
    {
      background: none repeat scroll 0 0 #D6E7FC;
      padding: 10px;
    }
</style>
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
  function detail(id_panier,id_membre)
  {
    $('#detail').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/gestion/detCom.php?id_panier="+id_panier+"&id_membre="+id_membre,
		   data: "",
		   success: function(msg){
				$('#detail').append(msg);
		   }
		});
  }
</script>

</head>

<body>

<h1>Gestionnaire d'articles</h1>

<p>Un gestionnaire de commandes</p>
<!--<p>Liste des nouvelles en tant que document <a href='?action=getpdf'>PDF</a>.</p>-->
<!--<input type="button" name="retour" value="<<< RETOUR" onclick="document.location='../../index.html'" 
style="background-color:#FFAC00;color:white;font-weight:bold;"/>-->
<input type="button" name="retour" value="< GESTION" onclick="document.location='./backend.php'" 
style="background-color:#ACFF00;color:white;font-weight:bold;"/> 
<?php
	include '../php/dbConnect.php';
?>


<form name="validerCommande" action="commandes.php" method="post">
<input type="hidden" name="envoi" value="yes">
<?
	
	  
	if(@$_REQUEST['action']=="del")
	{
		mysql_query("DELETE FROM commandes WHERE id=".round($_REQUEST['id']));
		header("Location: commandes.php");
	}
	
	
	$result=mysql_query("SELECT * FROM `commandes` ORDER BY Confirme");
		
	$i=0;
	while($row=mysql_fetch_array($result))
	{
	
		if($i==0)
		{
			echo '<h2>Liste:</h2>
		      <table border="0" cellpadding="0" cellspacing="0">
	      <tr bgcolor=#f87820>';

	      for($j=0;$j<count($row);$j++)
		{
		      if(!empty($row[$j]))
		      {
			echo '<td class=tabhead><b>'.mysql_field_name($result, $j).'</b></td>';
		      }	
		}
	
	      
	echo '</tr>';

		}
		($row['Confirme']==1)?$styleBarre='style="text-decoration: line-through;background-color:darkgrey;"':$styleBarre="";
		echo '<tr valign=center '.$styleBarre.'>';
		
		for($j=0;$j<count($row);$j++)
		{
		      if(!empty($row[$j]))
		      {
			echo "<td class=tabval><b>".$row[$j]."</b></td>";
		      }	
		}
		
		//echo "<td class=tabval>".htmlspecialchars($row['titre'])."&nbsp;</td>";
		//echo "<td class=tabval>".htmlspecialchars($datemod)."&nbsp;</td>";

		
		
		

		echo '<td class=tabval><a onclick="return confirm(\'Sûr?\');" href="commandes.php?action=del&id='.$row['id'].'"><span class=red>[SUPPRIMER]</span></a>............';
		if($row['Confirme']==1)
		{
		  //echo '<input type="checkbox" name="options[]" value="'.$row['id'].'" checked="checked">';
		}
		else
		{
		  echo '<input type="checkbox" name="options[]" value="'.$row['id'].'">';
		}
		echo '<a onclick="detail(\''.$row['id_panier'].'\',\''.$row['id_membre'].'\');"><span class=red>[DÉTAIL]</span></a></td>';
		echo "<td class=tabval></td>";
		echo "</tr>";
		$i++;

	}

	
	echo "<tr valign=bottom>";
        echo "<td bgcolor=#fb7922 colspan=6><img src=img/blank.gif width=1 height=8></td>";
        echo "</tr></table>";

	if(isset($_POST['envoi']))
	{
	
	    if(isset($_POST['options']))
	      {
		$envoi = $_POST['envoi'];                //aiguilleur
		$options = $_POST['options'];            //Contenu des cases à cocher
	    
		if ($envoi == 'yes')
		  {
		    $options_text = implode(' or id=',$options);
		    $options_text = "id=".$options_text;
		    echo($options_text);
		    $sql = "UPDATE `commandes` SET Confirme=1 WHERE ".$options_text;
		    $result=mysql_query($sql);
		    //$row=mysql_fetch_array($result);
		    //var_dump($row);
		    //echo '<p>options: '.$options_text.'</p>';
		    header("Location: commandes.php");
		  }    
	      }
	      else
	      {
		echo '<p>Aucun éléments sélectionné.</p>';
	      }
	    
	
     }

?>
</br>
<input type="submit" border="0" value="Valider" style="float:right;margin-right:500px;">
</form>
<br/>
<br/>
<br/>
<hr/>
<div id="detail">
</div>

</body>
</html>

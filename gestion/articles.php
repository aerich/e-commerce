<html>
<head>
<title>Gestion des articles</title>
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

<script type="text/javascript">
// Standard javascript function to clear all the options in an HTML select element
// In this method, you provide the id of the select dropdown box
function ClearOptions(id)
{
	document.getElementById(id).options.length = 0;
}

function AjouterOption(id,libele,valeur)
{
	var elOptNew = document.createElement('option');
  elOptNew.text = libele;
  elOptNew.value = valeur;
  
  var elSel = document.getElementById(id);

  try {
    elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
  }
  catch(ex) {
    elSel.add(elOptNew); // IE only
  }
}

function AjouterOptionCat()
{
  //alert(document.getElementById("themeTxt").value);
  AjouterOption("theme",document.getElementById("themeTxt").value,document.getElementById("themeTxt").value);
  
}

function SupprimerOption(theSel)
{
  var selIndex = theSel.selectedIndex;
  if (selIndex != -1) {
    for(i=theSel.length-1; i>=0; i--)
    {
      if(theSel.options[i].selected)
      {
        theSel.options[i] = null;
      }
    }
    if (theSel.length > 0) {
      theSel.selectedIndex = selIndex == 0 ? 0 : selIndex - 1;
    }
  }
}

function SupprimerOptionCat()
{
  SupprimerOption(document.getElementById("theme"));
}

function ClearOptionsCat()
{
  ClearOptions("theme");
}

function SauverAssociation()
{
  var texte = "./sauver.php?texte="+encodeURIComponent(document.getElementById("theme").innerHTML);
  document.getElementById("sauver").src=texte;
}

function copie(mot)
{
  document.getElementById("themeTxt").value=mot;
}
</script>

</head>

<body>

<h1>Gestionnaire d'articles</h1>

<p>Un gestionnaire d'articles très simple</p>
<!--<p>Liste des nouvelles en tant que document <a href='?action=getpdf'>PDF</a>.</p>-->
<!--<input type="button" name="retour" value="<<< RETOUR" onclick="document.location='../../index.html'" 
style="background-color:#FFAC00;color:white;font-weight:bold;"/>-->
<input type="button" name="retour" value="< GESTION" onclick="document.location='../gestion.php'" 
style="background-color:#ACFF00;color:white;font-weight:bold;"/> 
<?php
	include '../php/dbConnect.php';
?>



<?
$modif=false;
$modid="";
$modtitre="";
$modtheme="";
$modtexte="";
$modprix="";
$modimageref="";
	//var_dump($_REQUEST);
	
	if (isset($_REQUEST['rep']))
	{
	 
	  if(@$_REQUEST['rep']=="Ajouter")
	  {
	    
	    if(@$_REQUEST['ref']!="")
	    {
		    $ref=mysql_real_escape_string($_REQUEST['ref']);
		    $categorie=mysql_real_escape_string($_REQUEST['themeTxt']);
		    $texte = mysql_real_escape_string($_REQUEST['description']);
		    $prix = mysql_real_escape_string($_REQUEST['prix']);
		    $urlImage = mysql_real_escape_string($_REQUEST['imageref']);
		    $resultat = mysql_query("INSERT INTO `articles`(`id`, `ref`, `theme`, `description`, `prix`, `image`) VALUES (NULL,'".$ref."','".$categorie."','".$texte."','".$prix."','".$urlImage."')") ;
		    // "."'".$ref."'".",'".$categorie."','".$texte."','".$prix."','".$urlImage.")");
		    //header("Location: articles.php");
		    var_dump($resultat);
	    }
	  }
	  
	  if(@$_REQUEST['rep']=="Modifier")
	  {
		    $ref=mysql_real_escape_string($_REQUEST['ref']);
		    $categorie=mysql_real_escape_string($_REQUEST['themeTxt']);
		    $texte = mysql_real_escape_string($_REQUEST['description']);
		    $prix = mysql_real_escape_string($_REQUEST['prix']);
		    $urlImage = mysql_real_escape_string($_REQUEST['imageref']);
		    $lid=mysql_real_escape_string($_REQUEST['id']);
		    
		    $resultat = mysql_query("UPDATE `articles` SET ref='".$ref."', theme='".$categorie."', description='".$texte."', prix='".$prix."', image='".$urlImage."' WHERE id='".$lid."'");
		    
		    
	  }
	  
	}
	  
	if(@$_REQUEST['action']=="del")
	{
		mysql_query("DELETE FROM articles WHERE id=".round($_REQUEST['id']));
		header("Location: articles.php");
	}

	if(@$_REQUEST['action']=="mod")//écrit les données à modifier dans les champs
	{
		$modif=true;
		$resultat=mysql_query("SELECT id,ref,theme,description,prix,image FROM articles WHERE id=".round($_REQUEST['id']));
		$ligne=mysql_fetch_array($resultat);
		$modid=$ligne['id'];
		$modtitre=$ligne['ref'];
		$modtheme = $ligne['theme'];
		$modtexte=$ligne['description'];
		$modprix=$ligne['prix'];
		$modimageref=$ligne['image'];
		//echo "<script>alert(\"".htmlspecialchars($ligne['titre'])."\");</script>";
		
	}
	
	
	$result=mysql_query("SELECT * FROM `articles` ORDER BY theme DESC");
	
	

	
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

		echo "<tr valign=center>";
		
		for($j=0;$j<count($row);$j++)
		{
		      if(!empty($row[$j]))
		      {
			echo "<td class=tabval><b>".$row[$j]."</b></td>";
		      }	
		}
		
		//echo "<td class=tabval>".htmlspecialchars($row['titre'])."&nbsp;</td>";
		//echo "<td class=tabval>".htmlspecialchars($datemod)."&nbsp;</td>";

		echo "<td class=tabval><a onclick=\"return confirm('"."Sûr?"."');\" href=articles.php?action=del&id=".$row['id']."><span class=red>"."[SUPPRIMER]"."</span></a>\n<a href=articles.php?action=mod&id=".$row['id']."><span class=red>"."[MODIFIER]"."</span></a></td>";
		echo "<td class=tabval></td>";
		echo "</tr>";
		$i++;

	}

	
	echo "<tr valign=bottom>";
        echo "<td bgcolor=#fb7922 colspan=6><img src=img/blank.gif width=1 height=8></td>";
        echo "</tr>";


?>

</table>

<h2>Ajouter / Modifier des Articles</h2>

<form name="ajArticle" action="articles.php" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td>Référence:</td><td> 
  <input type="hidden" name="id" id="id" value="<?php echo $modid;?>" />
  <input id="ref" type="text" size="30" name="ref" value="<?php echo $modtitre;?>"></td></tr>
<tr><td>Thème:&nbsp;</td><td><input id="themeTxt" type="text" size="30" name="themeTxt" value="<?php echo $modtheme;?>">
<SELECT id="theme" name="theme" size="1" onchange="copie(this.value)">
	<?php include('categorie.html'); ?>
</SELECT>
<input type="button" name="ajmodass" value="Ajouter" onclick="AjouterOptionCat();"/>
<input type="button" name="suppass" value="Supprimer" onclick="SupprimerOptionCat();"/>
<input type="button" name="btnsauver" value="Sauver" onclick="SauverAssociation();"/>
<!--<input type="button" name="btnsauver" value="Sauver" onclick="SauverAssociation();"/>-->
<iframe id="sauver" style="border-width:0px;height:30px;"></iframe>
</td></tr>


<tr><td>Description:</td><td> <textarea id="description" type="text" cols="100" rows="10" name="description"><?php echo $modtexte;?></textarea></td></tr>
<tr><td>Prix:</td><td> <input id="prix" type="text" size="10" name="prix" value="<?php echo $modprix;?>"></td></tr>
<tr><td>Image:</td><td> <input id="imageref" type="text" size="30" name="imageref" value="<?php echo $modimageref;?>"></td></tr>
<tr><td><br/><input type="submit" border="0" name="rep" value="Ajouter" ></td><td><input type="submit" border="0" name="rep" value="Modifier" ></td></tr>
<!--

-->

</table>
<!--<form class="formulaire" id="form1" method="post" action="" enctype="multipart/form-data">

document.forms[\"general\"].elements[\"titre\"].value=\"".
-->

</form>

</body>
</html>

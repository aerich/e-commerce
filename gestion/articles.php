
<html>
<head>
<title>Gestion des articles</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

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
$modtitre="";
$modtheme="";
$modtexte="";
$modprix="";
$modimageref="";
		
	if(@$_REQUEST['ref']!="")
	{
		
		$ref=mysql_real_escape_string($_REQUEST['ref']);
		$categorie=mysql_real_escape_string($_REQUEST['themeTxt']);
		$texte = mysql_real_escape_string($_REQUEST['description']);
		$prix = mysql_real_escape_string($_REQUEST['prix']);
		$urlImage = mysql_real_escape_string($_REQUEST['imageref']);
		echo "HELLO";
		$resultat = mysql_query("INSERT INTO `articles`(`id`, `ref`, `theme`, `description`, `prix`, `image`) VALUES (NULL,'".$ref."','".$categorie."','".$texte."','".$prix."','".$urlImage."')") ;
		// "."'".$ref."'".",'".$categorie."','".$texte."','".$prix."','".$urlImage.")");
		//header("Location: articles.php");
		var_dump($resultat);
	}
	  
	if(@$_REQUEST['action']=="del")
	{
		mysql_query("DELETE FROM articles WHERE id=".round($_REQUEST['id']));
		header("Location: articles.php");
	}

	if(@$_REQUEST['action']=="mod")//écrit les données à modifiées dans les champs
	{
		$modif=true;
		$resultat=mysql_query("SELECT id,ref,theme,description,prix,image FROM articles WHERE id=".round($_REQUEST['id']));
		$ligne=mysql_fetch_array($resultat);
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

<h2>Ajouter Aticles</h2>

<form name="ajArticle" action="articles.php" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td>Référence:</td><td> <input id="ref" type="text" size="30" name="ref" value="<?php echo $modtitre;?>"></td></tr>
<tr><td>Thème:&nbsp;</td><td><input type="text" size="30" name="themeTxt" value="<?php echo $modtheme;?>">
<SELECT name="theme" size="1">
	<OPTION value="campagne" selected="selected">Campagne</OPTION>
	<OPTION value="nature">Nature</OPTION>
	<OPTION value="ville">Ville</OPTION>
	
</SELECT></td></tr>


<tr><td>Description:</td><td> <textarea id="description" type="text" cols="100" rows="10" name="description"><?php echo $modtexte;?></textarea></td></tr>
<tr><td>Prix:</td><td> <input id="prix" type="text" size="10" name="prix" value="<?php echo $modprix;?>"></td></tr>
<tr><td>Image:</td><td> <input id="imageref" type="text" size="30" name="imageref" value="<?php echo $modimageref;?>"></td></tr>
<tr><td></td><td><br/><input type="submit" border="0" value="Ajouter" ></td></tr>
<!--

-->

</table>
<!--<form class="formulaire" id="form1" method="post" action="" enctype="multipart/form-data">

document.forms[\"general\"].elements[\"titre\"].value=\"".
-->

</form>

</body>
</html>

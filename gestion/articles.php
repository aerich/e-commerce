
<html>
<head>
<title>Gestion des nouvelles</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>

<body>

<h1>Mise à jour des nouvelles</h1>

<p>Un gestionnaire de nouvelles très simple</p>
<!--<p>Liste des nouvelles en tant que document <a href='?action=getpdf'>PDF</a>.</p>-->
<!--<input type="button" name="retour" value="<<< RETOUR" onclick="document.location='../../index.html'" 
style="background-color:#FFAC00;color:white;font-weight:bold;"/>-->
<input type="button" name="retour" value="< GESTION" onclick="document.location='../gestion.php'" 
style="background-color:#ACFF00;color:white;font-weight:bold;"/> 
<?php


//    Copyright (C) 2002/2003 Kai Seidler, oswald@apachefriends.org
//
//    This program is free software; you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation; either version 2 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program; if not, write to the Free Software
//    Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.


	include '../php/dbConnect.php';
?>

<h2>Gestionnaire d'articles</h2>

<table border="0" cellpadding="0" cellspacing="0">
<tr bgcolor=#f87820>
<td><img src=img/blank.gif width=10 height=25></td>
<td class=tabhead><img src=img/blank.gif width=200 height=6><br><b>Catégorie</b></td>
<td class=tabhead><img src=img/blank.gif width=200 height=6><br><b>Intitulé</b></td>
<td class=tabhead><img src=img/blank.gif width=50 height=6><br><b>Date</b></td>
<td class=tabhead><img src=img/blank.gif width=50 height=6><br><b>Commandes</b></td>
<td><img src=img/blank.gif width=10 height=25></td>
</tr>


<?
$modif=false;
$modtitre="";
$moddate="";
$modtexte="";
$modimageref="";
		
	if(@$_REQUEST['texte']!="")
	{
		$titre=mysql_real_escape_string($_REQUEST['titre']);
		$categorie=mysql_real_escape_string($_REQUEST['categorie']);
		
		// Transformation format date en date sql
			$dateorg = mysql_real_escape_string($_REQUEST['date']);
			$datetab = explode("-", $dateorg);
		$date = $datetab[2].$datetab[1].$datetab[0];
		$texte = mysql_real_escape_string($_REQUEST['texte']);
		$urlImage = mysql_real_escape_string($_REQUEST['imageref']);
		if($date=="")$date="NULL";
		mysql_query("INSERT INTO news (titre,categorie,date,nouvelle,urlImage) VALUES('$titre','$categorie',$date,'$texte','$urlImage');");
header("Location: news.php");
		
	}
	  
	if(@$_REQUEST['action']=="del")
	{
		mysql_query("DELETE FROM news WHERE id=".round($_REQUEST['id']));
	}

	if(@$_REQUEST['action']=="mod")//écrit les données à modifiées dans les champs
	{
		$modif=true;
		$resultat=mysql_query("SELECT id,titre,categorie,date,nouvelle,urlImage FROM news WHERE id=".round($_REQUEST['id']));
		$ligne=mysql_fetch_array($resultat);
		$modtitre=$ligne['titre'];
		$dateorg = $ligne['date'];
			$datetab = explode("-", $dateorg);
			
		$moddate=$datetab[2]."-".$datetab[1]."-".$datetab[0];
		$modtexte=$ligne['nouvelle'];
		$modimageref=$ligne['urlImage'];
		//echo "<script>alert(\"".htmlspecialchars($ligne['titre'])."\");</script>";
		
	}
	
	
	$result=mysql_query("SELECT id,titre,categorie,date FROM news ORDER BY date DESC;");
	
	$i=0;
	while( $row=mysql_fetch_array($result) )
	{
		if($i>0)
		{
			echo "<tr valign=bottom>";
			echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=6><img src=img/blank.gif width=1 height=1></td>";
			echo "</tr>";
		}
		
			// Transformation format date
			$dateorg = $row['date'];
			$datetab = explode("-", $dateorg);
			$datemod = $datetab[2]."-".$datetab[1]."-".$datetab[0];

		echo "<tr valign=center>";
		echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";
		echo "<td class=tabval><b>".htmlspecialchars($row['categorie'])."</b></td>";
		echo "<td class=tabval>".htmlspecialchars($row['titre'])."&nbsp;</td>";
		echo "<td class=tabval>".htmlspecialchars($datemod)."&nbsp;</td>";

		echo "<td class=tabval><a onclick=\"return confirm('"."Sûr?"."');\" href=news.php?action=del&id=".$row['id']."><span class=red>"."[SUPPRIMER]"."</span></a>\n<a href=news.php?action=mod&id=".$row['id']."><span class=red>"."[MODIFIER]"."</span></a></td>";
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

<form name="ajArticle" action="./php/ajArticles.php" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td>Référence:</td><td> <input id="ref" type="text" size="30" name="ref"></td></tr>
<tr><td>Thème:&nbsp;</td><td><input type="text" size="30" name="themeTxt">
<SELECT name="theme" size="1">
	<OPTION value="campagne" selected="selected">Campagne</OPTION>
	<OPTION value="nature">Nature</OPTION>
	<OPTION value="ville">Ville</OPTION>
	
</SELECT></td></tr>


<tr><td>Description:</td><td> <textarea id="description" type="text" cols="100" rows="10" name="description"></textarea></td></tr>
<tr><td>Prix:</td><td> <input id="prix" type="text" size="10" name="prix"></td></tr>
<tr><td>Image:</td><td> <input id="imageref" type="text" size="30" name="imageref"></td></tr>
<tr><td></td><td><br/><input type="submit" border="0" value="Ajouter" ></td></tr>
<!--

-->

</table>
<!--<form class="formulaire" id="form1" method="post" action="" enctype="multipart/form-data">

document.forms[\"general\"].elements[\"titre\"].value=\"".
-->

</form>
<?
if ($modif==true){
echo "<script>";
echo "document.forms[\"general\"].elements[\"titre\"].value=\"".htmlspecialchars($ligne['titre'])."\";";
echo "document.forms[\"general\"].elements[\"date\"].value=\"".$moddate."\";";
echo "document.forms[\"general\"].elements[\"texte\"].value=\"".htmlspecialchars($ligne['nouvelle'])."\";";
echo "document.forms[\"general\"].elements[\"imageref\"].value=\"".htmlspecialchars($ligne['urlImage'])."\";";

echo "</script>";
}
?>
</body>
</html>

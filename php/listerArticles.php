
<?
	
		include_once './dbConnect.php';

		$sql = "SELECT * FROM `articles` LIMIT 0, 30 "; // Lecture des 30 premiers articles
		$result=mysql_query($sql);
		
		$i=0;
		while( $row=mysql_fetch_array($result) )
		{
			//$data[$i]=array('id'=>$row['id'],'ref'=>$row['ref'],'theme'=>$row['theme'],'description'=>$row['description'],'prix'=>$row['prix'],'image'=>$row['image']);
			//echo "<b>".htmlspecialchars($row['categorie'])."</b><br />";
			//echo "<b>".htmlspecialchars($row['titre'])."</b><br />";
			//echo "<b>".htmlspecialchars($row['date'])."</b><br />";



			echo "<div class=\"article\">\n";
			echo '<div class="description2" style="height : 180px;"><img class="imgprinc" src="'.$row['image'].'">';
			echo '<span class="titre">'.($row['ref']).'</span><br /><br />';
			echo '<span class="texte">'.($row['theme']).'</span>';
					
			//echo "<div>\n";
			
			echo "<div class=\"info\">\n";
			echo ($row['description']);
			echo '</div>';
			//echo "</div>\n</div>\n";
			echo "</div>\n";
			echo '<p>'.($row['prix']).'</p>';
			echo "</div>\n";
			$i++;
		}

?> 


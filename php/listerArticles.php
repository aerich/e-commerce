
<script>
function ajChart(id)
{
    $('#panier').html('');
    $.ajax({
		   type: "POST",
		   url: "/e-commerceGIT/php/panier.php",
		   data: "aj="+id,
		   success: function(msg){
				$('#panier').append(msg);
                                //$('#body').css("padding","0");
		   }
		});
}

function decChart(id)
{
    $('#panier').html('');
    $.ajax({
		   type: "POST",
		   url: "/e-commerceGIT/php/panier.php",
		   data: "dec="+id,
		   success: function(msg){
				$('#panier').append(msg);
                                //$('#body').css("padding","0");
		   }
		});
}

</script>
<?php
		
		include_once './dbConnect.php';
		
		echo '<div id="panier" class="sidebar" style="margin-right:10px;">';
		include_once './panier.php';
		echo '</div>';  
		    
		$sql = "SELECT * FROM `articles` LIMIT 0, 30 "; // Lecture des 30 premiers articles
		$result=mysql_query($sql);
		
		$i=0;
		while( $row=mysql_fetch_array($result) )
		{
			//$data[$i]=array('id'=>$row['id'],'ref'=>$row['ref'],'theme'=>$row['theme'],'description'=>$row['description'],'prix'=>$row['prix'],'image'=>$row['image']);
			//echo "<b>".htmlspecialchars($row['categorie'])."</b><br />";
			//echo "<b>".htmlspecialchars($row['titre'])."</b><br />";
			//echo "<b>".htmlspecialchars($row['date'])."</b><br />";

			$src_img=$row['image'];
			if($src_img==''){$src_img="./images/no_image.gif";}

			echo "<div class=\"article\">\n";
			  echo '<div class="description2" style="height : 180px;">
			    <div style="width:150px;height : 180px;overflow: hidden;display:inline-block;"><img class="imgprinc" src="'.$src_img.'"></div>';
			    echo '<div style="display:inline-block;position: absolute;left: 170px;width: 460px;padding-right:10px;"><span class="titre">'.($row['ref']).'</span><br /><br />';
			    echo '<span class="texte">'.($row['theme']).'</span>';
					  
			  //echo "<div>\n";
			  
			    echo "<div class=\"info\">\n";
    
			    echo ($row['description']);
			    echo '</div>';

			    
			    //echo "</div>\n</div>\n";
			    echo "</div>";
			    echo '<div class="curseurMain" style="display:inline-block;position: absolute;width: 460px;padding-right:10px;left: 170px;top:160px;text-align:right;">'.($row['prix']).' €<img width="125" src="./images/ajout_panier.gif" onclick="ajChart(\''.($row['id']).'\');"></div>';
			  echo "</div>\n";
			  
			echo "</div>\n";
			$i++;
		}

?> 


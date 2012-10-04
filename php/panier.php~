
      <ul>	
               <li>
                    <h4><span>PANIER</span></h4>
                    <ul class="blocklist">
<?php
	session_start();
	include_once 'dbConnect.php';
	  $sql = "SELECT * FROM `articles` LIMIT 0, 30 "; // Lecture des 30 premiers articles
		$result=mysql_query($sql);
		
		$i=0;
		while( $row=mysql_fetch_array($result) )
		{
		      echo '<li><a href="examples.html">';
		      echo $row['description'];
		      echo '</a></li>';
		      $i++;
		}
      
?>
                    </ul>

                </li>
                
                
            </ul> 


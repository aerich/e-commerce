<?php
      session_start();
      include_once 'dbConnect.php';

    function present($id)
        {
	  $result=null;
	  foreach ($_SESSION['panier'] as $key => $value) 
		{
		      if($value['id']==$id)
			{
			  $result=$key;
			}     
		}
	  return $result;
	}

    function recherche($id)
	{
	    $sql = "SELECT * FROM `articles` WHERE id = '".$id."'"; // Recherche de l'article
	    $result=mysql_query($sql);
	    return mysql_fetch_assoc($result);
	}
     

     
     if(isset($_POST['aj'])&&($_POST['aj']!=''))
      {	  
	  if($_SESSION['panier']==null){$article = recherche($_POST['aj']);$article['qte']=1;$_SESSION['panier']=array($article);}//Le premier article créé initialise le tableau
	  else
	  {
	    $case = present($_POST['aj']);
	    if($case!=null)
	    {
	      $_SESSION['panier'][$case]['qte']++;
	      
	    } 
	    else
	    {
	      $article = recherche($_POST['aj']);$article['qte']=1;array_push($_SESSION['panier'],$article);
	    }
	  
	  
	  }
      }
      
     echo ' <ul>	
               <li>
                    ';
	  
	
	
	  
		
		$i=0;
		/*while( $row=mysql_fetch_array($result) )
		{
		      echo '<li><a href="examples.html">';
		      echo $row['description'];
		      echo '</a></li>';
		      $i++;
		}*/
		if(isset($_SESSION['panier'])&&($_SESSION['panier']!=''))// Si la variable est initialisé (à la connexion: login) est non-null (au moins 1 achat depuis connexion)
	      {
		echo '<h4><span>PANIER</span></h4>
                    <ul class="blocklist">';
		
		foreach ($_SESSION['panier'] as $key => $value) 
		{
		      echo '<li><a href="examples.html">';
		      echo $key.' | '.$value['ref'].' | '.$value['qte'].'X';
		      echo '</a></li>'; 
		}
	      }
	      else
	      {
		    echo '<h4><span>PUBLICITÉ</span></h4>
                    <ul class="blocklist">';// Affiche une Pub
	      }
?>
                    </ul>

                </li>
                
                
            </ul> 


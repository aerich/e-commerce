<?php
      session_start();
      include_once 'dbConnect.php';

    function present($id)
        {
	  $result = -1;
	  foreach ($_SESSION['panier'] as $key => $value) 
		{
		    
		      if($value['id']==intval($id))
			{
			  $result=$key;
			  break;
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
     
     if(!isset($_SESSION['panier']))
    {
	
	$_SESSION['panier']=array();
	
    }
     
     if(isset($_POST['aj'])&&($_POST['aj']!=''))
      {		  
	    $case = present($_POST['aj']);
	    if($case>=0)
	    {
	      $_SESSION['panier'][$case]['qte']++; 
	    } 
	    else
	    {
	      $article = recherche($_POST['aj']);$article['qte']=1;array_push($_SESSION['panier'],$article);
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
		$_SESSION['total']=0.0;
		if((count($_SESSION['panier'])!=0))// Si la variable est initialisé (à la connexion: login) est non-null (au moins 1 achat depuis connexion)
	      {
		echo '<h4><span>PANIER</span></h4>
                    <ul class="blocklist">';
		
		foreach ($_SESSION['panier'] as $key => $value) 
		{
		      echo '<li><a href="examples.html">';
		      echo $key.' | '.$value['ref'].' | '.$value['qte'].' X';
		      $_SESSION['total']+=(floatval($value['qte'])*floatval($value['prix']));
		      echo '</a></li>'; 
		}
		echo '<li><div style="width:270px;text-align:right;padding-right:10px;padding-top:5px;border-color:black;border-top:1px dashed;">'
		      .'<h5>'.$_SESSION['total'].'€</h5></div></li>';
	      }
	      else
	      {
		    echo '<h4><span>PUBLICITÉ</span></h4>
                    <ul class="blocklist">
		    <img src="./images/pub_etoro.gif" width="280">';// Affiche une Pub
	      }
?>
                    </ul>

                </li>
                
                
            </ul> 


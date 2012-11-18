<script>
function vider()
{
    $('#panier').html('');
    $.ajax({
		   type: "POST",
		   url: "/e-commerceGIT/php/panier.php",
		   data: "vider=true",
		   success: function(msg){
				$('#panier').append(msg);
                                //$('#body').css("padding","0");
		   }
		});
}


function commander()
{
    document.getElementById("haut").style.display='none';
    $('#body').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/php/commande.php",
		   data: "",
		   success: function(msg){
				$('#body').append(msg);
				
                                $('#body').css("padding","0");deroul();$('#body').addClass("transfondgris");
		   }
		});
}

</script>

<?php
      session_start();
      include_once 'dbConnect.php';

    function present($id) // Vérifie si l'article est deja présent dans le panier
        {
	  $result = -1;
	  foreach ($_SESSION['panier'] as $key => $value) // Key case du tableau et value est la valeur!
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
	    return mysql_fetch_assoc($result); // Retourne un tableau associatif avec le prixet le titre de l'objet
	}
     
     if(!isset($_SESSION['panier'])) // Initialise le panier
    {
	
	$_SESSION['panier']=array();
	
    }
    
    $elemAJ=-1; //Sert à savoir quel élément du tableau a été ajouté  pour effet

     if(isset($_POST['aj'])&&($_POST['aj']!=''))
      {		  
	    $case = present($_POST['aj']);
	    if($case>=0)
	    {
	      $_SESSION['panier'][$case]['qte']++; // Ajout article déjà présent dans panier
	      $elemAJ=$case;
	    } 
	    else
	    {
	      $article = recherche($_POST['aj']);$article['qte']=1;array_push($_SESSION['panier'],$article); // ajout nouvel article au panier
	      $elemAJ=(count($_SESSION['panier'])-1); 
	    }
      }

      if(isset($_POST['vider']))
      {
	    $_SESSION['panier']=array();
      }
      
     echo ' <ul>	
               <li>
                    ';
	  
	
	
	  
		
		$i=0;
		
		$_SESSION['total']=0.0; // Total du panier remis a zero pour recalculer le prix total
		if((count($_SESSION['panier'])!=0))// Si le panier ne contient pas d'article
	      {
		
		  if((count($_SESSION['panier'])==1)&&($_SESSION['panier'][0]['qte']==1)) // Lors de l'ajout du 1er article, effectue l'effet de glissement
		    {
		      echo '<script>$("#panier").hide();$("#panier").show("slow");$("#nouvElem").hide();$("#nouvElem").fadeIn("slow");</script>'; // Cache la pub pour afficher le panier
		    }
		
		echo '<h4><span>PANIER</span></h4>
                    <ul class="blocklist">';
		
		foreach ($_SESSION['panier'] as $key => $value) 
		{
		      if($key==$elemAJ){echo '<li><a id="nouvElem" href="examples.html">';}
		      else{echo '<li><a href="examples.html">';}

		      echo $value['ref'].' | '.$value['qte'].' X';  // Affiche Le titre et la quantité
		      $_SESSION['total']+=(floatval($value['qte'])*floatval($value['prix']));
		      echo '</a></li>'; 
		}
		echo '<li><div style="width:270px;text-align:right;padding-right:10px;padding-top:5px;border-color:black;border-top:1px dashed;">'
		      .'<h5>'.$_SESSION['total'].'€</h5></div></li>';
		echo '<li><div style="width:135px;text-align:center;padding-top:5px;cursor:pointer;cursor:hand;display:inline-block;" onclick="vider();">Vider</div>
			  <div style="width:135px;text-align:center;padding-top:5px;cursor:pointer;cursor:hand;display:inline-block;" onclick="commander();">Commander</div>
		      </li>';
		echo '<script>$("#nouvElem").hide();$("#nouvElem").fadeIn("slow");</script>';
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


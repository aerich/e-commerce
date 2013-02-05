function portfolio()
{
    //document.getElementById("haut").style.display='none';
    $('#slides-container').html('');
    document.getElementById("haut").style.display='';
    document.getElementById("slides-container").style.height='0px';
     $("#slides-container").animate({ 
        height: "30px"
      }, 1500 );
    
    document.getElementById("slides-container").style.padding='2px 2px 2px 20px';
    
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/gestion/categorie.html",
		   data: "",
		   success: function(msg){
				$('#slides-container').append(
				  '<form style="bottom:10px;"><span>Filtrer par catégorie: </span><select id="theme" name="theme" size="1" onchange="relister(this.value);"><option value="">Toutes</option>'+msg+'</select></form>');
                                //deroul();
		   }
		});
 
    $('#body').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/php/listerArticles.php",
		   data: "",
		   success: function(msg){
				$('#body').append(msg);
                                deroul();
		   }
		});
    
}

function relister(theme)
{
  $('#body').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/php/listerArticles.php?theme="+theme,
		   data: "",
		   success: function(msg){
				$('#body').append(msg);
                                deroul();
		   }
		});
  
}

function deroul(){$("#body").hide();$("#body").removeClass("transfondgris");$("#body").slideDown("slow");}


function contact()
{
    document.getElementById("haut").style.display='none';
    $('#body').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/contact.html",
		   data: "",
		   success: function(msg){
				$('#body').append(msg);
                                deroul();
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
				
                                deroul();$('#body').addClass("transfondgris");
		   }
		});
}

function pasdachat()
{
  var Node = document.getElementById("mesArticles");
  
  if ( Node.hasChildNodes() )
    {
	while ( Node.childNodes.length >= 1 )
	{
	    Node.removeChild( Node.firstChild );       
	} 
    }
    
    Node.innerHTML = '<span id="pasdArticleslien">Mes articles</span>';
  
}

function achat()
{
  var Node = document.getElementById("mesArticles");
  
  if ( Node.hasChildNodes() )
    {
	while ( Node.childNodes.length >= 1 )
	{
	    Node.removeChild( Node.firstChild );       
	} 
    }
    
    Node.innerHTML = '<a class="has_submenu" href="#" onclick="commander();">Mes articles</a>';
  
}

function validerCommande()
{
    document.getElementById("haut").style.display='none';
    $('#body').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerceGIT/php/commander.php",
		   data: "",
		   success: function(msg){
				$('#body').append(msg);
				
                                deroul();$('#body').addClass("transfondgris");
		   }
		});
}
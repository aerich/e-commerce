function portfolio()
{
    document.getElementById("haut").style.display='none';
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

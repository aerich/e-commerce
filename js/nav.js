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
                                $('#body').css("padding","0");deroul();
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
                                $('#body').css("padding","0");deroul();
		   }
		});
    
} 

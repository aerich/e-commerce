function portfolio()
{
    document.getElementById("haut").style.display='none';
    $('#body').html('');
    $.ajax({
		   type: "GET",
		   url: "/e-commerce/php/listerArticles.php",
		   data: "",
		   success: function(msg){
				$('#body').append(msg);
                                $('#body').css("padding","0");
		   }
		});
    
} 

function bonmail(mailteste)

{
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

	return(reg.test(mailteste));
}

function verifmail(mailteste)
{
  if(bonmail(mailteste))
  {
   document.getElementById("imgMail").style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
  }
  else
  {
      document.getElementById("imgMail").style.backgroundImage= 'url("' + "./images/NOl.png" + '")';
  }  
}

function verifpseudo()
  {
      var longeur = document.getElementById("signup_username").value.length;
      if(longeur<6||longeur>20)
      {
          document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/NOl.png" + '")';
                    $('#pseudoinfo').hide();
                    if (longeur<6)
                    {
                        $('#pseudoinfo').html('').append('<b>Ce pseudonyme est trop court.</b><br>');
                    }
                    else
                    {
                        $('#pseudoinfo').html('').append('<b>Ce pseudonyme est trop long.</b><br>');
                    }
                    
                    
                    $('#pseudoinfo').fadeIn();
      }
      else
      {  
      
      $('#pseudoinfo').hide();
      $.getJSON(
            './php/verifpseudo.php',
            {pseudo: $('#signup_username').val()},
            function(data){
                if(data.libre=="V")
                {
                    document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
                    
                }
                else
                {
                    document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/NOl.png" + '")';
                    $('#pseudoinfo').hide();
                    $('#pseudoinfo').html('')
                    .append('<b>Ce pseudonyme existe déjà.</b><br>');
                    $('#pseudoinfo').fadeIn();
                }
                
                
            }
        );
      
    }
      
  }



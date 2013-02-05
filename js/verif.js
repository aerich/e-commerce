function bonmail(mailteste)

{
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

	return(reg.test(mailteste));
}

function verifmail(mailteste)
{
  var ret=false;
  if(bonmail(mailteste))
  {
   document.getElementById("imgMail").style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
   ret=true;
  }
  else
  {
      document.getElementById("imgMail").style.backgroundImage= 'url("' + "./images/NOl.png" + '")';
      ret=false;
  }
  return ret;
}

var pseudoOk=false;

function verifpseudo()
  {
    
    document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
      var longeur = document.getElementById("signup_username").value.length;
      if(longeur<5||longeur>20)
      {
          document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/NOl.png" + '")';
                    $('#pseudoinfo').hide();
                    if (longeur<5)
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
       document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
      $('#pseudoinfo').hide();
      $.getJSON(
            './php/verifpseudo.php',
            {pseudo: $('#signup_username').val()},
            function(data){
                if(data.libre=="V")
                {
                    document.getElementById("imgPseudo").style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
		    pseudoOk=true;
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
    
      return pseudoOk;
  }
  

function verifmdp(imgZone,entree,info)
  {
    var ret=false;
    document.getElementById(imgZone).style.backgroundImage= 'url("' + "./images/OKl.png" + '")';
      var longeur = document.getElementById(entree).value.length;
      var id = '#'+info;
      if(longeur<6||longeur>30)
      {
          document.getElementById(imgZone).style.backgroundImage= 'url("' + "./images/NOl.png" + '")';
          $(id).hide();
	  if(longeur<6)
	  {
          $(id).html('').append('<b>Le mot de passe est trop court</b><br>');
	  }
	  else
	  {
	    $(id).html('').append('<b>Le mot de passe est trop long</b><br>');
	  }
          $(id).fadeIn();
	  
      }
      else
      {
	  $(id).hide();
	  ret=true;
      }
      return ret;
  }
  
  function verifForm()
  {
	  
	  
	  
	  var longPassOK=false;
	  
	  if (verifmdp('imgPass1','signup_password','mdp1info')&& verifmdp('imgPass2','signup_passwordCheck','mdp2info'))
	  {
	    longPassOK=true;
	  }
	  
	  var concordPassOK=false;
	  
	   if (document.getElementById('signup_password').value==document.getElementById('signup_passwordCheck').value)
	  {
	    concordPassOK=true;
	  }
	  
	  if(longPassOK && concordPassOK && verifmail(document.getElementById('signup_email').value) && verifpseudo())
	  {
	      document.getElementById('btnValider').disabled = false; 
	  }
	  else
	  {
	     document.getElementById('btnValider').disabled = true; 
	  }
	  
	  
  }



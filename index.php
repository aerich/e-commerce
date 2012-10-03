<?

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Celine... Photographe</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/verif.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

</head>

<body>
<div id="container">
	<div id="header">
    	<h1><a href="/">Business</a></h1>
        <h2>Your website slogan here</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul id="menu" class="sf-menu dropdown" style="padding-left: 5%;">
            <li class="selected"><a href="index.php">Accueil</a></li>
            <li><a class="has_submenu" href="#haut" onclick="portfolio();">Portfolio</a>
            	<ul>
                    <li><a href="page.html">ii</a></li>
                    <li><a href="examples.html">A sub Link</a></li>
                    <li><a href="#">Another link</a></li>
                </ul>
            </li>
            <li><a class="has_submenu" href="#">Bibliographie</a>
            	<ul>
                	<li><a href="#">Product One</a></li>
                    <li><a href="#">Product Two</a></li>
                    <li><a href="#">Product Three</a></li>
                </ul>
            </li>
            <li><a href="#haut" onclick="contact();">Contact</a></li>
            <li id="menDeCon"><a href="#" style="display:none;">Déconnexion</a></li>
            <li id="menIns"><a href="#" onclick="document.getElementById('inscription').style.display=''">Inscription</a></li>
            <li id="menCon"><a href="#" onclick="document.getElementById('connexion').style.display=''" >Connexion</a>
                
                <ul><li>            <!-- IDENTIFICATION DEBUT-->
<div id="connexion" > <!-- bloc contenant le formulaire -->
    
                <form name="connexionForm" id="connexionForm" method="post" action="./php/login.php"><!-- début du formulaire de connexion -->
	    	<fieldset>
			<!--<legend>Connexion</legend>  titre du formulaire -->
		    <p>		    
			<span id="erreur"></span><!-- span qui contiendra les éventuels messages d'erreur -->
		    </p>
		    <p>
			<label for="login">Nom d'utilisateur :</label>
		    	<input type="text" name="login" id="login" /><!-- champ pour le login -->
		    </p>
		    
		    <p>
		    	<label for="pass">Mot de passe :</label>
		    	<input type="password" name="pass" id="pass" /><!-- champ pour le mot de passe -->
		    </p>
		    
		    <p class="center">
		    	<input type="submit" value="Je me connecte" class="bouton" /><!-- bouton de connexion -->
		    </p>
		</fieldset>
	    </form><!-- fin du formulaire -->
	</div><!-- fin du bloc contenant le formulaire -->
<!-- IDENTIFICATION FIN-->
    
    <? 
  
	
    if ((isset($_SESSION['pseudo'])) && (!empty($_SESSION['pseudo'])))
	{
		// le login a été enregistré dans la session, j'affiche le lien du profil
		echo 
        '<script>
	    
            document.getElementById(\'menIns\').style.display=\'none\';
            document.getElementById(\'menCon\').style.display=\'none\';
	    
	    var btndecon = document.createElement("li");
	    btndecon.innerHTML=\'<a href="#">Déconnexion</a>\';

	    var msg = document.createElement("h2");
	    msg.style.color=\'black\';
	    msg.innerHTML = "'.$_SESSION['pseudo'].'";

	    document.getElementById(\'menu\').appendChild(btndecon);
	    document.getElementById(\'menu\').appendChild(msg);
            
        </script>';
	}
	else
	{
		// pas de login en session : proposer la connexion
		
	}
    

     /*   $connecte=false;
    if(isset ($_COOKIE['id']) && isset ($_COOKIE['pseudo']))
	{
            $connecte=true;
        }
        
        if ($connecte==true){
        echo 
        '<script>
            document.getElementById(\'menIns\').style.display=\'none\';
            document.getElementById(\'menCon\').style.display=\'none\';
            
        </script>'
        ;} echo '<span>'.$connecte.'</span>';*/

  ?>
</li>
</ul>
            </li>
        </ul>
    </div>
    
    
    
    <div id="haut" class="middle-bg">
    	<div class="middle-top">
        	<div id="slides-container" class="middle-bottom">
                <div id="slides">
                    <div>
                        <div class="slide-image"><img src="images/slide-1.png" alt="Slide #1 image" /></div>
                        <div class="slide-text">
                            <h2>Slide #1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque. Curabitur at metus tincidunt dui tristique molestie. Donec porta molestie tortor. Fusce euismod consectetuer sapien. Fusce ac velit.</p>
        
                    
                        </div>
                    </div>
                    
                    <div>
                        <h2>Have fun with slides!</h2>
                        <p>These slides can contain anything a webpage can! HTML, Javascript, images, flash or whatever! They're completely easy to edit and add to as well, no need to bother editing or even going anywhere near some confusing Javascript files, simply add a &lt;div&gt;&lt;/div&gt; tag with your slider content to the "slides" contain - it takes just seconds to do!</p>
                        <p>These slides work using the absolutely wonderful lightweight jQuery plugin <a href="http://plugins.jquery.com/project/jFlow">jFlow</a>, originally written by Kean Loong and modified by both Mauro Belgiovine and spyka Webmaster. The script has been licensed under the open source MIT license, so feel free to play around and modify it as much or as little as you wish!</p>
                    </div>
                    
                    <div>
                        <div class="slide-image slide-image-right"><img src="images/slide-3.png" alt="Slide #3 image" /></div>
                        <div class="slide-text">
                            <h2>Slide #3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque. Curabitur at metus tincidunt dui tristique molestie. Donec porta molestie tortor. Fusce euismod consectetuer sapien. Fusce ac velit.</p>
        
                    
                        </div>
                    </div>
                </div>
                <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
                <div id="myController" class="hidden"><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div>
        	</div>
    	</div>
    </div>
        
    <div id="body">
        <div id="breadcrumbs">
            <span>You are here:</span>
            <strong>Home</strong>
        </div>
            
		<div id="content">
            <div class="box">
                <h2>Introduction</h2>
                <p>Welcome to fanfaro, a free premium valid CSS &amp; XHTML strict web template from <a href="http://www.spyka.net" title="spyka webmaster">spyka Webmaster</a>. This template is completely <strong>free</strong> to use permitting a link remains back to  <a href="http://www.spyka.net" title="spyka webmaster">http://www.spyka.net</a>. Should you wish to use this template unbranded you can buy a template license from our website for 8.00 GBP, this will allow you remove all branding related to our site, for more information about this see below.</p>	
                
                <p>This template has been tested in:</p>
    
                <ul class="styledlist">
                    <li>Firefox 3.5</li>
                    <li>Opera 10.00</li>
                    <li>IE 6, 7 and 8</li>
                    <li>Chrome</li>
                </ul>
        
                <h3>Buy unbranded</h3>
    
    
                <p>Purchasing a template license for 8.00 GBP (at time of writing around 12 USD) gives you the right to remove any branding including links, logos and source tags relating to spyka webmaster. As well as waiving the attribution requirement, your payment will also help us provide continued support for users as well as creating new web templates. Find out more about how to buy at the licensing page on our website which can be accessed at <a href="http://www.spyka.net/licensing" title="template license">http://www.spyka.net/licensing</a></p>
    
                <h3>More free web templates</h3>
                <p>Looking for more free web templates for other projects? Check out our <a href="http://justfreetemplates.com/portfolio?user=spyka">free web template portfolio</a>. We also offer <a href="http://www.spyka.net/wordpress-themes">WordPress themes</a> and <a href="http://www.awesomestyles.com">phpBB3 styles</a>, all of which are released under Open Source or Creative Commons licenses!</p>
    
    
                <h3>Webmaster forums</h3>	
                <p>You can get help with editing and using this template, as well as design tips, tricks and advice in our <a href="http://www.spyka.net/forums" title="webmaster forums">webmaster forums</a></p>
            </div>
        </div>
        
        <div class="sidebar">
            <ul>	
               <li>
                    <h4><span>Navigate</span></h4>
                    <ul class="blocklist">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="examples.html">Examples</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                
                <li>
                    <h4><span>About</span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus.</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <h4 class="h4-orange"><span>Cool Sites</span></h4>
                    <ul>
                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates"><strong>ThemeForest</strong></a> - premium HTML templates, WordPress themes and PHP scripts</li>
                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting"><strong>Web hosting</strong></a> - 50 dollars off when you use promocode <strong>awesome50</strong></li>
                        <li><a href="http://www.4templates.com/?aff=spykawg" title="4templates"><strong>4templates</strong></a> - brilliant premium templates</li>
                    </ul>
                </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
    <div id="footer">
      <div class="footer-content">

        <div class="footer-box">
            <h4>About our site</h4>

            <p>
                Morbi fermentum, nunc id pellentesque blandit, lectus velit pellentesque nisl, a condimentum est velit sed nisi. Sed libero velit, eleifend nec porttitor a, porta quis leo. In hac habitasse platea dictumst. 
            </p>
        </div>
        
        <div class="footer-box">
            <h4>Categories</h4>

            <ul>
              <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
              <li><a href="#">Quisque consequat nunc a felis.</a></li>
              <li><a href="#">Suspendisse consequat magna at.</a></li>
              <li><a href="#">Etiam eget diam id ligula rhoncus.</a></li>
              <li><a href="#">Sed in mauris non nibh.</a></li>

            </ul>
        </div>
        
        <div class="footer-box">

            <h4>Network sites</h4>
            <ul>
                <li><a href="http://www.spyka.net" title="spyka Webmaster resources">spyka webmaster</a></li>
                <li><a href="http://www.justfreetemplates.com" title="free web templates">Free web templates</a></li>

                <li><a href="http://www.spyka.net/forums" title="webmaster forums">Webmaster forums</a></li>
                <li><a href="http://www.awesomestyles.com/mybb-themes" title="mybb themes">MyBB themes</a></li>
                <li><a href="http://www.awesomestyles.com" title="free phpbb3 themes">phpBB3 styles</a></li>
            </ul>	
        </div>
        
        <div class="footer-box end-footer-box">
            <h4>Search our site</h4>

            <form action="#" method="get">
                <p>
                    <input type="text" id="searchquery" size="16" name="searchterm" />

                    <input type="submit" id="searchbutton" value="Search" class="formbutton" />
                </p>
            </form>
        </div>     
        <div class="clear"></div> 
    </div>
    <div id="footer-links">

    <!-- A link to http://www.spyka.net must remain. To remove link see http://www.spyka.net/licensing -->
            <p>&copy; YourSite 2010. Website design by <a href="http://www.spyka.net">Free CSS Templates</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a></p>
    </div>  
</div>

    
<!-- INSCRIPTION DEBUT-->

<div id="inscription" style="display:none;">
    <img id="lienFermer" width="30" src="./images/fermer.png" alt="Fermer" onclick="document.getElementById('inscription').style.display='none'"/>
    <div id="titre">
        <span>&nbsp;</span>     
    </div>
    
    <div id="insContenu">
        <div id="inscBandeau">
                    <div class="unitR size1of3">
                        <p>
                            Déjà inscrit ?                <a  href="#" class="bomdialog-follow bomdialogsize3of5 crLink">Se connecter</a>      </p>
                    </div>
                </div>



                <div>

                    <div id="insColUne">

                        <h1 id="insLabel" class="line">S'enregistrer</h1>



                        <form id="signupWh" class="usrForm" method="post" action="http://www.infos-du-net.com/communaute/signup?redirectToProfile=1&amp;iframe=0&amp;socialProxy=0">
                            <ul>
                                <li id="usernameField" class="sansPuce line">
                                    <div class="unit size3of5">
                                        <p class="stronger"><label for="signup_username">Pseudonyme</label></p>
                                        <input type="text" id="signup_username" name="signup[username]" class="username neutralInput" onkeyup="verifpseudo()"/>
                                        <span id="imgPseudo" class="validator">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        
                                        <p id="pseudoinfo" class="formError h"></p>
                                    </div>
                                    <div class="size1of2">
                                        <p class="miscInfos">6 à 20 caractères non accentués, sans espaces, en minuscules</p>
                                        </div>
                                </li>

                                <li id="passwordField" class="sansPuce line">
                                    <div class="unit size3of5">
                                        <p class="stronger"><label for="signup_password">Mot de passe</label></p>
                                        <input type="password" id="signup_password" min-length="6" class="password neutralInput" name="signup[password]"/>
                                        <span class="validator">&nbsp;</span>

                                        <p class="formError h"></p>
                                    </div>

                                    <div class="size1of2">
                                        <p class="miscInfos">6 à 30 caractères, sans espaces</p>
                                    </div>
                                </li>

                                <li id="passwordCheckField" class="sansPuce line">
                                    <div class="unit size3of5">
                                        <p class="stronger"><label for="signup_passwordCheck">Confirmez votre mot de passe</label></p>
                                        <input type="password" id="signup_passwordCheck" min-length="6" class="passwordCheck neutralInput" name="signup[passwordCheck]"/>
                                        <span class="validator">&nbsp;</span>

                                        <p class="formError h"></p>
                                    </div>

                                    <div class="size3of5">
                                        <p class="miscInfos">Vérifiez que votre saisie est correcte</p>
                                    </div>
                                </li>

                                <li id="emailField" class="sansPuce line">
                                    <div class="unit size3of5">
                                        <p class="stronger"><label for="signup_email">Adresse email</label></p>
                                        <input type="text" id="signup_email" autocomplete="off" class="email neutralInput" name="signup[email]" onkeyup="verifmail(this.value)"/>
                                        <span id="imgMail" class="validator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                        <p class="formError h"></p>
                                    </div>
                                    <div class="unit">
                                        <p class="miscInfos">Vous devrez confirmer votre email en cliquant sur le lien que nous enverrons à cette adresse</p>
                                    </div>
                                </li>

                                <li id="birthdateField" class="sansPuce line">
                                    <div class="unit">
                                        <p class="stronger"><label for="signup_birthdate">Date de naissance</label></p>
                                        <input type="text" id="signup_birthdate" class="neutralInput" name="signup[birthdate]"/>          <p class="formError"></p>
                                    </div>
                                </li>

                            </ul>

                            <div class="cgv">
                                En créant mon compte, je confirme avoir pris connaissance des <a class="crLink" onmouseover="BOM.Utils.decodeLive('aHR0cDovL3d3dy50b21zZ3VpZGUuZnIvY2d1Lmh0bWw=', this);" href="#" target="_blank">Conditions d'Utilisation</a> du site.    </div>

                            <input type="hidden" id="signup__csrf_token" value="df55dbc736e67fd50764d29c98d56d8a" name="signup[_csrf_token]"/>    <button type="submit" id="signUpButton" class="btBlue btBig txtShadS btAjaxSubmit tooltip-on btInactive inactive">S'inscrire</button>    <span class="bomdialog-action-loader h"></span>
                        </form>
                    </div>






                </div>



                <div class="gaTrack h">

                </div>

            </div>
    
</div>

<!-- INSCRIPTION FIN-->
</div>



</body>
</html>

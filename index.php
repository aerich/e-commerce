
<?php

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
<script type="text/javascript" src="js/animations.js"></script>

</head>

<body>
<div id="container">
	<div id="header">
    	<h1><a href="/">Site e-commerce</a></h1>
        <h2>de Guillaume et Stéphane</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul id="menu" class="sf-menu dropdown" style="padding-left: 5%;">
            <li class="selected"><a href="index.php">Accueil</a></li>
            <li><a class="has_submenu" href="#haut" onclick="portfolio();">Portfolio</a>
            </li>
            <li><a class="has_submenu" href="#">Bibliographie</a>
            	<ul>
                	<li><a href="#">Loris</a></li>
                    <li><a href="#">Céline</a></li>
                    <li><a href="#">voir 3iem</a></li>
                </ul>
            </li>
            <li><a href="#haut" onclick="contact();">Contact</a></li>
            <li id="menDeCon"><a href="#" style="display:none;">Déconnexion</a></li>
            <li id="menIns"><a href="#" onclick="document.getElementById('inscription').style.display=''">Inscription</a></li>
            <li id="menCon"><a href="#" onclick="document.forms['connexionForm'].submit()" >Connexion</a>
                
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
    
    <?php
  
	
    if ((isset($_SESSION['pseudo'])) && (!empty($_SESSION['pseudo'])))
	{
		// le login a été enregistré dans la session, j'affiche le lien du profil
		echo 
        '<script>
	    
            document.getElementById(\'menIns\').style.display=\'none\';
            document.getElementById(\'menCon\').style.display=\'none\';
	    
	    var btndecon = document.createElement("li");
	    btndecon.innerHTML=\'<a href="./php/logout.php">Déconnexion</a>\';

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
                        <div class="slide-image"><img src="images/slide-1.jpg" alt="Slide #1 image" /></div>
                        <div class="slide-text">
                            <h2></h2>
                            <p>Description de l'image ou alors on peut mettre 1 photographe par slide.. A voir.</p>
        
                    
                        </div>
                    </div>
                    
                    <div>
                        <h2>Projet</h2>
                        <p>Il serait intéressant de mettre la description du projet ici, ou alors le lien dur site ou bien encore un remerciement pour les photographes, vu qu'ils acceptent qu'on utilise leurs photos</p>
                        <p>On peut meme mettre la pub du site ou on a piquer le template.</p>
                    </div>
                    
                    <div>
                        <div class="slide-image slide-image-right"><img src="images/slide-3.jpg" alt="Slide #3 image" /></div>
                        <div class="slide-text">
                            <h2>Céline</h2>
                            <p>Ces photos sont originales!</p>
        
                    
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
            <span>You are here :</span>
            <strong>idem</strong>
        </div>
            
		<div id="content">
            <div class="box">
                <h2>Il est conseillé d'ouvrir ce site avec Firefox!</h2>
                <p>Céline</p>	
                
                <p>explication</p>
    
                <h3>Loris</h3>

                <p>Explication du thème de ses photos?</p>
    
                <h3>Ou</h3>

                <p>on peut mettre des photos en démonstration, nos préférée par exemple, ou alors un système qui en piochera aléatoirement dans notre dossier image</p>
    
    
                <h3>Webmaster forums</h3>	
                <p>Guillaume et Stéphane</p>
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
                    <h4><span>Promo?</span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Pour le panier?</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <h4 class="h4-orange"><span>Pub</span></h4>
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
                On virerait pas cette partie en bleu? ou tu as une idée? 
            </p>
        </div>
        
        <div class="footer-box">
            <h4>Categories</h4>

            <ul>
              <li><a href="#">j'me permet de retirer l'espagnol,</a></li>
              <li><a href="#">-_-</a></li>
              <li><a href="#">(^(^(^_^)^)^)</a></li>
              <li><a href="#">Vive les ptits bonhomes!</a></li>
              <li><a href="#">(*_-)</a></li>

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
            <p>Site de Guillaume et Stéphane</p>
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

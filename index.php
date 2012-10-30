
<?php

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Celine... Photographe</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link href="jquery-ui.css" rel="stylesheet" type="text/css"/>
            
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/verif.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/animations.js"></script>

<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();   //?????????????????????
  });
  </script>

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
                        <h2 style="text-align:center;">Projet 3IRT</h2>
                        <p>Dans le cadre du cours de technique informatique de 3iem année à l'I.S.I.M.S., nous avons du réaliser un site d'e-commerce par groupe de 2. </p>
                        <p>Celui-ci vous montrera un apperçu de nos connaissances en php/html.</p>

                    </div>
                    <div>
                        <div class="slide-image"><img src="images/Stephane.jpg" alt="Slide #1 image" /></div>
                        <div class="slide-text">
                            <h2>Stéphane Bury</h2>
                            <p>Co-webmaster du site et étudiant en 3iem IRT</p>
                            <p></p>

                        </div>
                    </div>
                    
                
                    
                    <div>
                        <div class="slide-image slide-image-right"><img src="images/Guillaume.png" alt="Slide #3 image" /></div>
                        <div class="slide-text">
                            <h2>Guillaume Pasbecq</h2>
                            <p>Co-webmaster du site et étudiant en 3iem IRT</p>
        
                    
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
        </div>
            
		<div id="content">
            <div class="box">
                <h2>Bienvenue sur notre site e-commerce.</h2>
                
                <p>Nous vous proposons de découvrir nos photographes amateurs avec possibilité d'acheter une de leurs photos.</p>
                
                <p>Si vous souhaitez contacter l'un de nos jeunes talents pour un shooting ou pour être présent à une soirée, n'hésitez pas à envoyer un e-mail à l'un de nos administrateurs (voir partie contact), nous ferons suivre votre demande.</p>    
                <p> Voici la liste de notre protographes avec une petite explication de leur oeuvre</p>
                <h3>Loris</h3>	
                
                <p>A completer </p>
    
                <h3>Céline</h3>

                <p>A compléter</p>
    
            </div>
        </div>
        
       
    	<div class="clear"></div>
    </div>
    <div id="footer">
      <div class="footer-content">
    <p> La partie HTML est un template préfait nommé « fanfaro » qui a été choisi sur le site "http://www.spyka.net" </p>
       
  
        <div class="clear"></div> 
    </div>
    <div id="footer-links">

   
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

                            <div id="datepicker"></div>

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

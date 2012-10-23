<?php
// Création d'une page formulaire sous forme de fonction.

function creerchamps($label, $txtchamps='',$a=0,$b=0) //Créer une fonction pour afficher les champs du formulaire
{  
   // if (isset($_POST['txtchamps'])) echo $_POST['']; 
    echo '<li id="usernameField" class="sansPuce line"> 
                                    <div class="unit size3of5">
                                        <p class="stronger"><label for="signup_username">'.$label.'</label></p>
                                        <input type="text" id="signup_username" name="signup[username]" class="username neutralInput" onkeyup="verifpseudo()" value = "'.$txtchamps.'"/> 
                                        <span id="imgPseudo" class="validator">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <p id="pseudoinfo" class="formError h"></p>
                                    </div>
                                    <div class="size1of2">
                                        <p class="miscInfos">'.$a.' à '.$b.' caractères non accentués, sans espaces, en minuscules</p>
                                        </div>
                                </li>'; 
                            }

// $_POST[’case’];
?>
<!--<input type="text" name="nom" id="nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>" />-->


            
     <!-- INSCRIPTION DEBUT-->

<div id="inscription">
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
                              
                          <?php

                         if (isset($_POST['pseudo']))
                            { 
                                creerchamps ('Pseudonyme',$_POST['pseudo'],6,20);
                            }
                            else
                            {
                                creerchamps ('Pseudonyme','',6,20);   
                            }
                              if (isset($_POST['Mot de passe']))
                            { 
                                creerchamps ('Mot de passe',$_POST['password'],4,10);
                            }
                            else
                            {
                                creerchamps ('Mot de passe','',4,10);   
                            }
                               if (isset($_POST['Vérification du mot de passe']))
                            { 
                                creerchamps ('Vérification du mot de passe',$_POST['password'],4,10);
                            }
                            else
                            {
                                creerchamps ('Vérfication du mot de passe','',4,10);   
                            }
                               if (isset($_POST['Date de naissance']))
                            { 
                                creerchamps ('Date de naissance',$_POST['date']);
                            }
                            else
                            {
                                creerchamps ('Date naissance','');   
                            }
                            //if(!empty($_POST) && strlen($_POST['login'])>4 && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

                          ?>
                             
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

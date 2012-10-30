<?php
// Création d'une page formulaire sous forme de fonction.
//include 'dbConnect.php';
function creerchamps($label, $txtchamps='',$msgerror='',$name='') //Créer une fonction pour afficher les champs du formulaire
{  
   // if (isset($_POST['txtchamps'])) echo $_POST['']; 
    echo '<li id="usernameField" class="sansPuce line"> 
                                    <div class="unit size3of5">
                                        <p class="stronger"><label for="signup_username">'.$label.'</label></p>
                                        <input type="text" id="signup_username" name="'.$name.'"class="username neutralInput" onkeyup="verifpseudo()" value = "'.$txtchamps.'"/> 
                                        <span id="imgPseudo" class="validator">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <p id="pseudoinfo" class="formError h"></p>
                                    </div>
                                    <div class="size1of2">
                                        <p class="miscInfos">'.$msgerror.'</p>
                                        </div>
                                </li>'; 
                            } //$name = password, name, etc..

                            $OK=true;
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



                        <form id="signupWh" class="usrForm" method="post" action="Formulaire.php">
                            <ul>
                              
                          <?php

                         if (isset($_POST['pseudo']) && (strlen($_POST['pseudo'])>4) && (strlen($_POST['pseudo']) <21))
                            {
                                creerchamps ('Pseudonyme',$_POST['pseudo'],'','pseudo');
                            }
                            else {

                                creerchamps ('Pseudonyme','','5 à 20 caractères non accentués, sans espaces, en minuscules','pseudo'); 
                                echo "Le speudo n'est pas correct"; $OK=false; 
                            }

                              if (isset($_POST['password']) && (strlen($_POST['password'])>4) && (strlen($_POST['password']) <21))

                            { 
                               creerchamps ('Mot de passe',$_POST['password'],'','password');
                               creerchamps ('Vérification du mot de passe',$_POST['verifpassword'],'','verifpassword');
                            } 
                            else {
                                creerchamps ('Mot de passe','','Le mot de passe n\'est pas compris entre 5 à 20 caractères non accentués, sans espaces, en minuscules','password');
                                creerchamps ('Vérification du mot de passe','','Les deux mots de passe ne correspondent pas','password');
                                
                               
                                    if ($_POST['password'] != $_POST['verifpassword'])
                                    { 
                                        $OK=false; 
                                    } 

                            }

    


                                 /*   
                               if (isset($_POST['Date de naissance']))
                            { 
                                creerchamps ('Date de naissance',$_POST['date']);
                            }
                            else { $OK=false;
                            
                                creerchamps ('Date naissance','','La date de naissance n\'est pas correcte');   
                            }


                                    
                                 if (isset($_POST['Adresse e-mail']) && filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL))
                            { 
                                creerchamps ('Adresse e-mail',$_POST['e-mail']);
                            }
                            else {

                                echo "L\'adresse e-mail n'est pas correct"; $OK=false;
                            
                                creerchamps ('Adresse e-mail','');   
                            }*/

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

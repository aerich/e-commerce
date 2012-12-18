<?php

$contenu=urldecode($_GET['texte']);
$contenu=str_replace('\"', '"', $contenu);
$fichier="./categorie.html";//options couleurs bandeau news
if (is_writable($fichier))
 {

    if (!$handle = fopen($fichier, 'w')) {
         echo '<span style="color:red;">Erreur 0</span>';
         exit;
    }

    // Ecrivons quelque chose dans notre fichier.
    if (fwrite($handle, $contenu) === FALSE) {
        echo '<span style="color:red;">Erreur 1</span>';
        exit;
    }

    echo '<span style="color:green;">OK</span>';

    fclose($handle);

} else {
    echo '<span style="color:red;">Erreur 2</span>';
}
//echo $contenu;


?> 

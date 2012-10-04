<?php
/*
CE SCRIPT EST UN EXEMPLE DE SCRIPT PHP
POUR VERIFIER LA DISPONIBILITE D'UN PSEUDO
DANS UNE TABLE SQL

LE SCRIPT DOIT RETOURNER :
1 : SI LE SPEUDO EST DEJA PRIS
2 : SI LE PSEUDO EST LIBRE
*/

// CONNECION SQL
include 'dbConnect.php';


$pseudo = '';
if( isset($_GET['pseudo']) ){
    $pseudo= $_GET['pseudo'];
}
// VERIFICATION
$query='SELECT pseudo FROM membres WHERE pseudo="'.$pseudo.'"';
//echo $query;
$result = mysql_query($query);
//echo $result;

$retour = array();
if(mysql_num_rows($result)>=1){

	// Traitements
	$retour = array(
    'libre'    => "F",
      );
 
      // Envoi du retour (on renvoi le tableau $retour encodé en JSON)
    header('Content-type: application/json');
    
}
else{
        // Traitements
	$retour = array(
    'libre'    => "V",
      );

}
echo json_encode($retour);


?>
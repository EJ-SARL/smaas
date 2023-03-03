
<?php
//URI
$url = 'http://api.eliajimmy.net/ressource/';

//Recuperer les variables POST
$variable=$_POST['variable'];

$mode="formulaire html";
//Preparation curl
$ch = curl_init();

// Setup request to send json via POST
$data = array(
    'variable' => $variable,
    'mode'=> $mode
);

//Transform row int Json objet
$payload = json_encode($data);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$reponse=json_decode($result);
$code =  $reponse->code;
    if($code ==201)
        {   
            $variable =  $reponse->variable;
            //tes
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/standard/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/standard/ajout/ihm/reponse_negative.php');   
        }


?>
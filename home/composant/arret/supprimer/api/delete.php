<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/arret/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $arrets= $obj->arret;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/arret/supprimer/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/arret/supprimer/ihm/reponse_negative.php');   
        }




?>
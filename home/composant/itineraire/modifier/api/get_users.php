<?php

    $url = 'http://api.eliajimmy.net/itineraire/';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    
    
    $obj = json_decode($result);                      
    $itineraire= $obj->itineraire;

    $code =  $obj->code;

    if($code ==200)  
        {   
             
            //Integration de l'IHM affichant la reponse positive
            require_once('composant/itineraire/modifier/ihm/afficher_users.php'); 
        }
    else    
        {
            
            //Integration de l'IHM affichant la reponse negative
            require_once('composant/itineraire/modifier/ihm/reponse_negative.php');   
        }

?>
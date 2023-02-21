<?php

    $url = 'http://api.eliajimmy.net/agent/';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $utilisateur= $obj->utilisateur;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/modifier/ihm/afficher_users.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/utilisateur/agent/ihm/reponse_negative.php');   
        }

?>
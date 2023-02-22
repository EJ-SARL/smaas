<?php

<<<<<<< HEAD
    $url = 'http://api.eliajimmy.net/utilisateur/';
=======
    $url = 'http://api.eliajimmy.net/agent/';
>>>>>>> ba22a06127be0ca78d58cb71ec839fe519a952af

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
<<<<<<< HEAD
    $utilisateur= $obj->utilisateur;
=======
    $agents= $obj->agent;
>>>>>>> ba22a06127be0ca78d58cb71ec839fe519a952af

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
<<<<<<< HEAD
            require_once('composant/utilisateur/modifier/ihm/afficher_users.php'); 
=======
            require_once('composant/agent/modifier/ihm/afficher_users.php'); 
>>>>>>> ba22a06127be0ca78d58cb71ec839fe519a952af
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
<<<<<<< HEAD
            require_once('composant/utilisateur/modifier/ihm/reponse_negative.php');   
=======
            require_once('composant/agent/agent/ihm/reponse_negative.php');   
>>>>>>> ba22a06127be0ca78d58cb71ec839fe519a952af
        }

?>
<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/titre/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $titre= $obj->titre;

    $code =  $obj->code;

    if($code ==200)
        {   
            $forfait=$titre[0]->forfait; 
            $periode=$titre[0]->periode;
            $prix=$titre[0]->prix;
            $zone=$titre[0]->zone;
           
            $id=$titre[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/titre/recuperer/ihm/afficher_user.php'); 
        }




?>
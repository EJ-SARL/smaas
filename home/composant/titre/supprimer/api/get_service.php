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
    $titres= $obj->titre;

    $code =  $obj->code;

    if($code ==200)
        {   
            $forfait=$titres[0]->forfait; 
            $periode=$titres[0]->periode;
            $prix=$titres[0]->prix;
            $zone=$titres[0]->zone;
            $id=$titres[0]->id;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/titre/supprimer/ihm/form_user.php'); 
        }




?>
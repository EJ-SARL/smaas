<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/appareil/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $appareils= $obj->appareil;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$appareils[0]->nom; 
            $categorie=$appareils[0]->categorie;
            $numero_serie=$appareils[0]->numero_serie;
            $place=$appareils[0]->place;
            $quantite=$appareils[0]->quantite;
            $id=$appareils[0]->id;
            //Intregration de l'IHM affichant la reponse positive

            require_once('composant/appareil/modifier/ihm/form_user.php'); 
        }




?>
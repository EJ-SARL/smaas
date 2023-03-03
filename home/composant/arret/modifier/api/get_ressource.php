<?php
$id=$_GET['id'];


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
           
            require_once('composant/arret/modifier/api/get_retour.php'); 
        }






?>
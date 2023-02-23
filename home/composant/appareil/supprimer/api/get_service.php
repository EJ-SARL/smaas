<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/bus/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $buss= $obj->bus;

    $code =  $obj->code;

    if($code ==200)
        {   
            $matricule=$buss[0]->matricule; 
            $marque=$buss[0]->marque;
            $total_place=$buss[0]->total_place;
            $id=$buss[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/bus/supprimer/ihm/form_user.php'); 
        }




?>
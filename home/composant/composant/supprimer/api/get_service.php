<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/composant/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $composants= $obj->composant;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$composants[0]->nom; 
            $categorie=$composants[0]->categorie;
            $numero_serie=$composants[0]->numero_serie;
            $quantite=$composants[0]->quantite;
            $id=$composants[0]->id;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant/supprimer/ihm/form_user.php'); 
        }




?>
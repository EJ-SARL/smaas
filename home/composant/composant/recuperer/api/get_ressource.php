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
    $composant= $obj->composant;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$composant[0]->nom; 
            $categorie=$composant[0]->categorie;
            $numero_serie=$composant[0]->numero_serie;
            $quantite=$composant[0]->quantite;
            $id=$composant[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/composant/recuperer/ihm/afficher_user.php'); 
        }




?>
<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/client/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $clients= $obj->client;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$clients[0]->prenom; 
            $nom=$clients[0]->nom;
            $postnom=$clients[0]->postnom;
            $email=$clients[0]->email;
            $telephone=$clients[0]->telephone;
            $id=$clients[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/client/recuperer/ihm/afficher_user.php'); 
        }




?>
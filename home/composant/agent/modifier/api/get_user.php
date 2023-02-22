<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/agent/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $agents= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$agents[0]->prenom; 
            $nom=$agents[0]->nom;
            $postnom=$agents[0]->postnom;
            $email=$agents[0]->email;
            $telephone=$agents[0]->telephone;
            $role=$agents[0]->role;
            $telephone=$agents[0]->telephone;
            $id=$agents[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/modifier/ihm/form_user.php'); 
        }




?>
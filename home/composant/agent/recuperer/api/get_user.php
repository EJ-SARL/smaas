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
    $agent= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$agent[0]->prenom; 
            $nom=$agent[0]->nom;
            $postnom=$agent[0]->postnom;
            $email=$agent[0]->email;
            $telephone=$agent[0]->telephone;
            $role=$agent[0]->role;
            $id=$agent[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/recuperer/ihm/afficher_user.php'); 
        }




?>
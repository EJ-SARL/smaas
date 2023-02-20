<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/utilisateur/'.$id;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $utilisateur= $obj->utilisateur;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$utilisateur[0]->prenom; 
            $nom=$utilisateur[0]->nom;
            $postnom=$utilisateur[0]->postnom;
            $email=$utilisateur[0]->email;
            $telephone=$utilisateur[0]->telephone;
            $id=$utilisateur[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/utilisateur/modifier/ihm/form_user.php'); 
        }




?>
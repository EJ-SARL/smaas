<?php

$id=$_GET['id'];

//URI
<<<<<<< HEAD
$url = 'http://api.eliajimmy.net/agent/'.$id;
=======
$url = 'http://api.eliajimmy.net/utilisateur/'.$id;
>>>>>>> a21073b2cbb0387459fdc65930121a5eebfdbf5b

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
<<<<<<< HEAD
    $agents= $obj->agents;
=======
    $utilisateur= $obj->utilisateur;
>>>>>>> a21073b2cbb0387459fdc65930121a5eebfdbf5b

    $code =  $obj->code;

    if($code ==200)
        {   
<<<<<<< HEAD
            $prenom=$agents[0]->prenom; 
            $nom=$agents[0]->nom;
            $postnom=$agents[0]->postnom;
            $email=$agents[0]->email;
            $telephone=$agents[0]->telephone;
            $id=$agents[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/modifier/ihm/form_user.php'); 
=======
            $prenom=$utilisateur[0]->prenom; 
            $nom=$utilisateur[0]->nom;
            $postnom=$utilisateur[0]->postnom;
            $email=$utilisateur[0]->email;
            $telephone=$utilisateur[0]->telephone;
            $id=$utilisateur[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/utilisateur/modifier/ihm/form_user.php'); 
>>>>>>> a21073b2cbb0387459fdc65930121a5eebfdbf5b
        }




?>
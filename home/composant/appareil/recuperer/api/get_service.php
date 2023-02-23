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
    $appareil= $obj->appareil;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$appareil[0]->nom; 
            $categorie=$appareil[0]->categorie;
            $numero_serie=$appareil[0]->numero_serie;
            $place=$appareil[0]->place;
            $quantite=$appareil[0]->quantite;
            $id=$appareil[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/appareil/recuperer/ihm/afficher_user.php'); 
        }




?>
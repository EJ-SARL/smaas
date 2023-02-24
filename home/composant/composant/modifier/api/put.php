<?php
$id=$_POST['id'];

$url = 'http://api.eliajimmy.net/composant/'.$id;


//Recuperer les variables POST
$nom=$_POST['nom'];
$categorie=$_POST['categorie'];
$numero_serie=$_POST['numero_serie'];
$quantite=$_POST['quantite'];

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'nom' => $nom,
    'categorie' => $categorie,
    'numero_serie' => $numero_serie,
    'quantite' => $quantite,
	

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $composants=json_decode($result);
    $code =  $composants->code;
    if($code ==200)
        {   
            $nom =  $composants->nom;
            $categorie =  $composants->categorie;
            $numero_serie =  $composants->numero_serie;
            $quantite =  $composants->quantite;
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/composant/modifier/ihm/reponse_positive.php'); 
            }
        else    
            {
                
                //Intregration de l'IHM affichant la reponse negative
                require_once('composant/composant/modifier/ihm/reponse_negative.php');   
            }
    
    
?>